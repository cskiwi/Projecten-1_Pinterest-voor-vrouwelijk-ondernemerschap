<?php

class UserController extends BaseController {
    public function getIndex()
    {
        $users = User::paginate(5);
        return View::make('users.overview')->with('users', $users);
    }
    public function getProfile($id)
    {
        $user = User::find($id);

        return View::make('users.profile', array('user' => $user));
    }

}