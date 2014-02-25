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
        $board = Board::find($id);
        $posts = Board::find($id)->posts;
        $following = -1;
        foreach(Auth::user()->follows as $follow){
            if($follow->board_id == $board->id){
                $following = $follow->id;
            }
        }
        return View::make('boards.detail', array('board' => $board, 'posts' => $posts, 'following' => $following));
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
                return Redirect::to('boards/detail/'.$board['id'])->witherror('not Your post');
            }
        } else {
            return Redirect::to('/');
        }
    }

    public function postFollow(){
        if (Auth::check()){
            // TODO: check if id is avalid
            $follow = Follow::create(array(
                'user_id'   => Auth::user()->id,
                'board_id'   => Input::get('id'),
            ));

            return \Response::json(['success' => true, 'followid' => $follow->id], 200);
        }

    }
    public function postUnfollow(){
        if (Auth::check()){
            // TODO: check if id is avalid
            $follow = Follow::find(Input::get('id'));
            $follow->delete();

            return \Response::json(['success' => true], 200);
        }

    }
}