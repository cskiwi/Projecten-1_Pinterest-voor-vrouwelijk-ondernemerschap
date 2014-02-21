<?php

class UserController extends BaseController {
    public function showUsers()
    {
        $users = User::paginate(5);
        return View::make('users')->with('users', $users);
    }

}