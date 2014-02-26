<?php

/**
 * Class HomeController
 */
class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    /**
     * @return mixed
     */
    public function getIndex()
    {
        if (Auth::check()){
            $posts = Post:: join('board_post', 'posts.id', '=', 'board_post.post_id')
                ->join('follows', 'follows.board_id', '=', 'board_post.board_id')
                ->where('follows.user_id', Auth::user()->id)
                ->orderBy('posts.created_at', 'DESC')
                ->get();

            return View::make('stream')->with(array('posts' => $posts));
        } else {
            return View::make('hello');
        }
    }
}