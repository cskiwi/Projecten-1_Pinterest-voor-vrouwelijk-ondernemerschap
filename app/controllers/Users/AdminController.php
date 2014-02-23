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
            return Redirect::to('admin/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
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
                return Redirect::to('/');
                // for now we'll just echo success (even though echoing in a controller is bad)

            } else {

                // validation not successful, send back to form
                return Redirect::to('admin/login')->withErrors(array('password' => 'Wrong password/username combination'));

            }

        }
    }

    /**
     *
     */
    public function getRegister()
    {
        // show the form
        return View::make('admin.register');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister(){
        $rules = array(
            'name' => 'Required|Min:3|Max:32|alpha_spaces',
            'username' => 'Required|Min:3|Max:32|Alpha',
            'email'     => 'Required|Between:3,64|Email|Unique:users',
            'password'  =>'Required|AlphaNum|Between:4,8|Confirmed',
            'password_confirmation'=>'Required|AlphaNum|Between:4,8'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('admin/register')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            $data = Input::only(array('name','username', 'password', 'email'));
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            Auth::login($user, true);
            return Redirect::to('admin/profile');

        }

    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('admin/login'); // redirect the user to the login screen
    }


    /**
     *
     */
    public function getProfile(){
        return View::make('admin.profile');

    }

}