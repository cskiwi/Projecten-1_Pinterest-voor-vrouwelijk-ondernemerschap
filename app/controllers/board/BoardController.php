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

        return View::make('boards.detail', array('board' => $board, 'posts' => $posts));
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
}