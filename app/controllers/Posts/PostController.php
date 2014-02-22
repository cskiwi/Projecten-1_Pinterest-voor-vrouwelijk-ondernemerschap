<?php

class PostController extends BaseController {
    public function getIndex()
    {
        $posts = Post::paginate(5);
        return View::make('posts.overview')->with('posts', $posts);
    }
    public function getDetail($id)
    {
        $post = Post::find($id);

        return View::make('posts.detail', array('post' => $post));
    }

    public function postAdd(){
        if (Auth::check()){
            $rules = array(
                'title' => 'Required|Min:3|Max:255|alpha_spaces',
                'body' => 'Required|Min:3',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::to('/')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $data = Input::only(array('title','body'));
                $data['user_id'] = Auth::user()->id;

                $post = Post::create($data);
                return Redirect::to('posts/detail/'.$post['id']);

            }
        } else {
            return Redirect::to('/');
        }
    }

}