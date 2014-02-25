<?php
/**
 * Class AdminController
 */
class AdminController extends BaseController {
    /**
     *
     */
    public function getIndex(){

    }

    /**
     *
     */
    public function getLogin()
    {
        // show the form
        return View::make('admin.login');
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

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
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

}