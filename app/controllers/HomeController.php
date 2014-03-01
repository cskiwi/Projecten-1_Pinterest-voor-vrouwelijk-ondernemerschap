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

            return View::make('stream')->with($this->postStream());
        } else {
            return View::make('hello');
        }
    }

    public function postStream(){
        $posts= [];
        foreach( Auth::user()->follows()->get() as $board){
            foreach($board -> posts as $post){
                array_push($posts, $post);
            }
        }

        // remove dupes
        $posts = array_filter($posts,function ($obj) {
            static $idList = array();
            if(in_array($obj->id,$idList)) {
                return false;
            }
            $idList []= $obj->id;
            return true;
        });

        // sort by date
        usort($posts, function($a, $b){
            return strcmp($b->created_at,$a->created_at);
        });

        if (Request::ajax()) {
            $postresponse = [];
            foreach($posts as $post) {
                array_push($postresponse, ['post' => $post->toArray(), 'favorites' => count($post->favorites), 'comments' => count($post->comments)]);
            }
            return Response::json($postresponse);
        } else {
            return array('posts' => $posts);
        }
    }
}
