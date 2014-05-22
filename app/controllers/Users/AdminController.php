<?php
/**
 * Class AdminController
 */
class AdminController extends BaseController {
    /**
     *
     */
    public function getIndex(){
        return Redirect::to('/');

    }

    /**
     *
     */
    public function getLogin()    {
        return View::make('admin.login');
        // return Redirect::to('/');
    }


    /**
     *
     */
    public function postLogin()
    {

        // validate the info, create rules for the inputs
        $rules = array(
            'username'    => 'required|alphaNum|min:3', // make sure the username is an actual username
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            if(\Request::ajax()){
                return \Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);
            } else {
                return \Redirect::back()->withInput()->withErrors($validator);
            }
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username' 	=> Input::get('username'),
                'password' 	=> Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata, true, true)) {

                // validation successful!
                // redirect them to the secure section or whatever
                return \Response::json(['success' => true], 200);
                // for now we'll just echo success (even though echoing in a controller is bad)

            } else {
                if(\Request::ajax()){
                    return \Response::json(['success' => false, 'errors' => array('password' => 'Wrong password/username combination')]);
                } else {
                    return \Redirect::back()->withInput(Input::except('password'))->withErrors(array('password' => 'Wrong password/username combination'));
                }
            }

        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(){
        // validate the info, create rules for the inputs
        $rules = array(
            'username'    => 'required|alphaNum|min:3', // make sure the username is an actual username
            'password' => 'required|alphaNum|min:3', // password can only be alphanumeric and has to be greater than 3 characters
            'email'     => 'Required|Between:3,64|Email|Unique:users',
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            if(\Request::ajax()){
                return \Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);
            } else {
                return \Redirect::back()->withInput(Input::except('password'))->withErrors($validator);
            }
        } else {
            $data = Input::only(array('username', 'password', 'email'));
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            Auth::login($user, true);
            // validation successful!
            // redirect them to the secure section or whatever
            return \Response::json(['success' => true], 200);
            // for now we'll just echo success (even though echoing in a controller is bad)
        }
    }

    public function getLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }


    /**
     *
     */
    public function getProfile(){
        return View::make('admin.profile');

    }

    public function getSettings(){


        return View::make('admin.settings');

    }

    public function postSettings(){
        if (Auth::check()){

            $rules = array(
                'email' => 'Required|Min:3|Max:255',
                'password' => 'Min:3|Max:255|alpha_spaces',
                'name' => 'Min:3|Max:255|alpha_spaces',
            );

            $validator = Validator::make(Input::only(array('email', 'password', 'name')), $rules);

            if ($validator->fails()) {
                return Redirect::to('admin/settings')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $data = Input::only(array('email', 'password', 'name'));
                $data['receiveMails'] = Input::has('receiveMails');
                $data['showFullName'] = Input::has('showFullName');

                Auth::User()->Update($data);

                $file = Input::file('avatar-file');

                if ($file){
                    $destinationPath    = 'avatar/';
                    $extension          = $file->getClientOriginalExtension();
                    $filename           = 'usr_'.  Auth::user()->id . '.'. $extension;

                    $file->move($destinationPath, $filename);
                    Auth::User()->avatar = $filename;
                    Auth::user()->save();
                }

                return Redirect::to('admin/settings/');

            }
        } else {
            return Redirect::to('/');
        }

    }

}