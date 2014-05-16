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
        $pins= [];
        foreach( Auth::user()->follows()->get() as $board){
            foreach($board -> pins as $pin){
                if ($pin->original_id != null){
                    $repin_by = User::find($pin->user_id);
                    $pin['repin_by'] = $repin_by;
                }

                array_push($pins, $pin);
            }
        }


        // remove dupes
        $pins = array_filter($pins,function ($obj) {
            static $idList = array();
            if(in_array($obj->id,$idList)) {
                return false;
            }
            $idList []= $obj->id;
            return true;
        });

        // sort by date
        usort($pins, function($a, $b){
            return strcmp($b->created_at,$a->created_at);
        });

        if (Request::ajax()) {
            $postresponse = [];
            foreach($pins as $pin) {
                array_push($postresponse, ['pin' => $pin->toArray(), 'favorites' => count($pin->favorites), 'comments' => count($pin->comments)]);
            }
            return Response::json($postresponse);
        } else {
            return array('pins' => $pins);
        }
    }
}
