<?php

/**
 * Class BoardController
 */
class BoardController extends BaseController {
    /**
     * @return mixed
     */
    public function getIndex()
    {
        $boards = Board::paginate(5);
        return View::make('boards.overview')->with('boards', $boards);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDetail($id)
    {
        return View::make('boards.detail', array('board' => Board::find($id)));
    }

    /**
     * @return mixed
     */
    public function postAdd(){
        if (Auth::check()){
            $rules = array(
                'title' => 'Required|Min:3|Max:255|alpha_spaces',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::to('boards/create')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $data = Input::only(array('title'));
                $data['user_id'] = Auth::user()->id;

                $board = Board::create($data);
                return Redirect::to('boards/detail/'.$board['id']);

            }
        } else {
            return Redirect::to('/');
        }
    }

    public function postDelete($id){
        if (Auth::check()){
            $board = Board::find($id);
            if ($board->user == Auth::user()){
                $board->delete();
                return Redirect::to('/');
            } else {
                return Redirect::to('boards/detail/'.$board['id'])->witherror('not Your pin');
            }
        } else {
            return Redirect::to('/');
        }
    }

    public function postFollow(){
        if (Auth::check()){
            // TODO: check if id is avalid

            DB::table('follows')->insert(array(
                'user_id'   => Auth::user()->id,
                'board_id'   => Input::get('board_id'),
            ));

            return \Response::json(['success' => true], 200);
        }

    }
    public function postUnfollow(){
        if (Auth::check()){
            // TODO: check if id is avalid
            DB::table('follows')
                ->where('user_id', Auth::user()->id)
                ->where('board_id', Input::get('board_id'))
                ->delete();
            return \Response::json(['success' => true]);
        }
    }

    public function getSearch(){

        $search = strlen(Input::get('search-text')) > 1 ? Input::get('search-text') : '';
        $boards = [];
        foreach(Tag::where('name', 'LIKE', '%'. $search .'%')->get() as $tag){
            foreach( $tag->boards as $board){
                array_push($boards,$board);
            }
        }
        foreach(Board::where('title', 'LIKE', '%'. $search .'%')->get() as $board){
            array_push($boards,$board);
        }
        // sort by name
        usort($boards, function($a, $b){
            return strcmp($b->title,$a->title);
        });

        // remove dupes
        $boards = array_filter($boards,function ($obj) {
            static $idList = array();
            if(in_array($obj->id,$idList)) {
                return false;
            }
            $idList []= $obj->id;
            return true;
        });


        return View::make('boards.search')->with('boards', $boards);
    }
}