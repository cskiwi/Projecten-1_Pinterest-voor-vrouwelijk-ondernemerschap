<?php

class UserController extends BaseController {
    public function showUsers()
    {
        $users = User::paginate(15);
        return View::make('users')->with('users', $users);
    }

}