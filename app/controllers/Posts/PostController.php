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

}