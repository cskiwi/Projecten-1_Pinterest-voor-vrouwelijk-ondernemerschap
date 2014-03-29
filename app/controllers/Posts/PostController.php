<?php

/**
 * Class PostController
 */
class PostController extends BaseController {
    /**
     * @return mixed
     */
    public function getIndex()
    {
        /*foreach(Post::All() as $post){
            echo 'Title: ';
            echo ($post->title) ? $post->title : 'no title defined';
            echo '<br />';

            echo 'username: ';
            echo ($post->user) ? $post->user->name : 'You got a problem';

            echo  '<hr/>';
        }
        die();//*/

        $posts = Post::paginate(5);
        return View::make('posts.overview')->with('posts', $posts);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDetail($id)
    {
        $post = Post::find($id);

        return View::make('posts.detail', array('post' => $post));
    }

    /**
     * @return mixed
     */
    public function postAdd(){
        if (Auth::check()){
            $rules = array(
                'media-title' => 'Required|Min:3|Max:255|alpha_spaces',
                'media-description' => 'Required|Min:3',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return \Response::json(['success' => false, 'errors' => array($validator)]);
            } else {
                $post = Post::create(array(
                    'user_id'     => Auth::user()->id,
                    'title'     => Input::get('media-title'),
                    'body'      => Input::get('media-description'),
                    'type'      => Input::get('text'),
                ));

                DB::table('board_post')->insert(['board_id'  => 1, 'post_id'   => $post->id]);

                return  \Response::json(['success' => true ]);//*/

            }
        }
    }

    public function postDelete($id){
        if (Auth::check()){
            $post = Post::find($id);
            if ($post->user == Auth::user()){
                $post->delete();
                return Redirect::to('/');
            } else {
                return Redirect::to('posts/detail/'.$post['id'])->witherror('not Your post');
            }
        } else {
            return Redirect::to('/');
        }
    }

    public function postFavorite(){
        if (Auth::check()){
            $id = Input::get('id');
            $like = Auth::user()->favorites()->where('post_id', '=', $id)->get()->first();

            if ($like == null){
                Favorite::create(array(
                    'user_id' => Auth::user()->id,
                    'post_id' => $id));
            } else {
                $like->delete();
            }
            return \Response::json(['success' => true, 'like' => $like]);//*/
        }
    }

}