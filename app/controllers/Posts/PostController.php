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
            switch(Input::get('media-type')){
                case 'Text':
                    $rules = array(
                        'Text-title' => 'Required|Min:3|Max:255|alpha_spaces',
                        'Text-description' => 'Required|Min:3'
                    );
                    break;
                case 'Image':
                    $rules = array(
                        'Image-title' => 'Required|Min:3|Max:255|alpha_spaces',
                        'Image-description' => 'Required|Min:3'
                    );
                    break;
                case 'Video':
                    $rules = array(
                        'Video-title' => 'Required|Min:3|Max:255|alpha_spaces',
                        'Video-link' => 'Required|Min:3'
                    );
                    break;
                case 'Tutorial':
                    $rules = array(
                        'Text-title' => 'Required|Min:3|Max:255|alpha_spaces',
                        'Text-description' => 'Required|Min:3'
                    );
                    break;
                case 'Offer':
                    $rules = array(
                        'Offer-title' => 'Required|Min:3|Max:255|alpha_spaces',
                        'Offer-price' => 'Required|numeric|Min:3',
                        'Offer-description' => 'Required|Min:3'
                    );
                    break;
            }
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return \Response::json(['success' => false, 'errors' =>  $validator->getMessageBag()->toArray()]);
            } else {
                if(!\Request::ajax()){
                    switch(Input::get('media-type')){
                        case 'Text':
                            $post = Post::create(array(
                                'user_id'   => Auth::user()->id,
                                'title'     => Input::get('Text-title'),
                                'description' => Input::get('Text-description'),
                                'type'      => 'Text',
                            ));
                            break;
                        case 'Image':
                            $post = Post::create(array(
                                'user_id'   => Auth::user()->id,
                                'title'     => Input::get('Image-title'),
                                'description' => Input::get('Image-description'),
                                'type'      => 'Image',
                            ));

                            $file = Input::file('Image-file');

                            $destinationPath    = 'img/';
                            $extension          = $file->getClientOriginalExtension();
                            $filename           = 'usr_'.  Auth::user()->id . '_post'.$post->id .'.'. $extension;

                            $file->move($destinationPath, $filename);
                            $post->imgLocation = $filename;
                            $post->save();
                            break;
                        case 'Video':
                            $post = Post::create(array(
                                'user_id'   => Auth::user()->id,
                                'title'     => Input::get('Video-title'),
                                'description' => Input::get('Video-link'),
                                'type'      => 'Video',
                            ));
                            break;
                        case 'Tutorial':
                            $post = Post::create(array(
                                'user_id'   => Auth::user()->id,
                                'title'     => Input::get('Text-title'),
                                'description' => Input::get('Text-description'),
                                'type'      => 'Tutorial',
                            ));
                            break;
                        case 'Offer':
                            $post = Post::create(array(
                                'user_id'   => Auth::user()->id,
                                'title'     => Input::get('Offer-title'),
                                'price'     => Input::get('Offer-price'),
                                'description' => Input::get('Offer-description'),
                                'type'      => 'Offer',
                            ));
                            $file = Input::file('Offer-file');

                            $destinationPath    = 'img/';
                            $extension          = $file->getClientOriginalExtension();
                            $filename           = 'usr_'.  Auth::user()->id . '_post'.$post->id .'.'. $extension;

                            $file->move($destinationPath, $filename);
                            $post->imgLocation = $filename;
                            $post->save();
                            break;
                    }

                    DB::table('board_post')->insert(['board_id'  => 2, 'post_id'   => $post->id]);
                    return Redirect::to('/');
                } else {
                    return \Response::json(['success' => true]);
                }
            }
        }
    }

    public function getDelete($id){
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