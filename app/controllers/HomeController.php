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
            $posts = []; $boards = [];
            foreach(Auth::user()->follows as $follow) {
                array_push($boards, $follow->board);
            }
            foreach($boards as $board){
                foreach($board->posts as $post){
                    $post['from_board'] = $board->id;
                    array_push($posts, $post);
                }
            }
            arsort($posts);
            arsort($boards);
            return View::make('stream')->with(array('posts' => $posts, 'boards' => $boards));
        } else {
            return View::make('hello');
        }
    }
}