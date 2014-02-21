<?php

class UserController extends BaseController {
    public function showUsers()
    {
        $users = User::all();
        return View::make('users')->with('users', $users);
    }

}