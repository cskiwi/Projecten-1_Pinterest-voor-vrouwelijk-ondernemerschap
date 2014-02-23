<?php

/**
 * Class UserController
 */
class UserController extends BaseController {
    /**
     * @return mixed
     */
    public function getIndex()
    {
        $users = User::paginate(5);
        return View::make('users.overview')->with('users', $users);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProfile($id)
    {
        $user = User::find($id, 'id');

        return View::make('users.profile', array('user' => $user));
    }

}