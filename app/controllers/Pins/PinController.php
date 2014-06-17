<?php

/**
 * Class PostController
 */
class PinController extends BaseController {
    /**
     * @return mixed
     */
    public function getIndex()
    {
        /*foreach(Pin::All() as $post){
            echo 'Title: ';
            echo ($post->title) ? $post->title : 'no title defined';
            echo '<br />';

            echo 'username: ';
            echo ($post->user) ? $post->user->name : 'You got a problem';

            echo  '<hr/>';
        }
        die();//*/

        $pins = Pin::paginate(5);
        return View::make('pins.overview')->with('pins', $pins);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDetail($id)
    {
        $pin = Pin::find($id);

        if ($pin) {
            return View::make('pins.detail', array('pin' => $pin));
        } else {
            return Redirect::to('/');
        }
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
                    );
                    break;
                case 'Video':
                    $rules = array(
                        'Video-title' => 'Required|Min:3|Max:255|alpha_spaces',
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
                        'Offer-price' => 'Required|numeric',
                        'Offer-description' => 'Required|Min:3'
                    );
                    break;
            }
            $validator = Validator::make(Input::all(), $rules);
            $boardId = Input::get('board');

            if ($validator->fails() || $boardId == -1 && Input::get('boardname') == "" ) {
                $messages = $validator->errors();

                if ($boardId == -1 && Input::get('boardname') == "" ){
                    $messages->add('Destination board', 'Either select an existsing board or fill in the name for the new board');
                }
                return \Response::json(['success' => false, 'errors' =>  $messages->toArray()]);
            } else {
                if(!\Request::ajax()){
                    if ($boardId == -1 ){
                        // create new board
                        $board = Board::create([
                            'user_id' => Auth::user()->id,
                            'title' => Input::get('boardname')
                        ]);

                        $boardId = $board['id'];

                        DB::table('follows')->insert(array(
                            'user_id'   => Auth::user()->id,
                            'board_id'   => $boardId
                        ));
                    }
                    $pin = null;
                    switch(Input::get('media-type')){
                        case 'Text':
                            $pin = Pin::create(array(
                                'user_id'   => Auth::user()->id,
                                'board_id'     => $boardId,
                                'title'     => Input::get('Text-title'),
                                'description' => Input::get('Text-description'),
                                'type'      => 'Text',
                            ));
                            break;
                        case 'Image':
                            $pin = Pin::create(array(
                                'user_id'   => Auth::user()->id,
                                'board_id'     => $boardId,
                                'title'     => Input::get('Image-title'),
                                'description' => Input::get('Image-description'),
                                'type'      => 'Image',
                            ));

                            $file = Input::file('Image-file');

                            $destinationPath    = 'img/';
                            $extension          = $file->getClientOriginalExtension();
                            $filename           = 'usr_'.  Auth::user()->id . '_pin'.$pin->id .'.'. $extension;

                            $file->move($destinationPath, $filename);
                            $pin->imgLocation = $filename;
                            $pin->save();
                            break;
                        case 'Video':
                            $video_id = null;
                            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', Input::get('Video-link'), $match)) {
                                $video_id = '//www.youtube.com/embed/' . $match[1];
                            }

                            if(preg_match('%https?://(player\.)?vimeo\.com(/video)?/(\d+)%i',Input::get('Video-link'), $match)){
                                $video_id = '//player.vimeo.com/video/' . $match[3];
                            }

                            $pin = Pin::create(array(
                                'user_id'   => Auth::user()->id,
                                'board_id'     => $boardId,
                                'title'     => Input::get('Video-title'),
                                'description' => $video_id,
                                'type'      => 'Video',
                            ));
                            break;
                        case 'Tutorial':
                            $pin = Pin::create(array(
                                'user_id'   => Auth::user()->id,
                                'board_id'     => $boardId,
                                'title'     => Input::get('Text-title'),
                                'description' => Input::get('Text-description'),
                                'type'      => 'Tutorial',
                            ));
                            break;
                        case 'Offer':
                            $pin = Pin::create(array(
                                'user_id'   => Auth::user()->id,
                                'board_id'     => $boardId,
                                'title'     => Input::get('Offer-title'),
                                'price'     => Input::get('Offer-price'),
                                'description' => Input::get('Offer-description'),
                                'type'      => 'Offer',
                            ));
                            $file = Input::file('Offer-file');

                            $destinationPath    = 'img/';
                            $extension          = $file->getClientOriginalExtension();
                            $filename           = 'usr_'.  Auth::user()->id . '_pin'.$pin->id .'.'. $extension;

                            $file->move($destinationPath, $filename);
                            $pin->imgLocation = $filename;
                            $pin->save();
                            break;
                    }
                    return Redirect::back();

                } else {
                    return \Response::json(['success' => true]);
                }
            }
        }
    }

    public function getDelete($id){
        if (Auth::check()){
            $post = Pin::find($id);
            if ($post->user == Auth::user()){
                $post->delete();
                return Redirect::to('/');
            } else {
                return Redirect::to('pins/detail/'.$post['id'])->witherror('not Your post');
            }
        } else {
            return Redirect::to('/');
        }
    }

    public function postFavorite(){
        if (Auth::check()){
            $id = Input::get('id');
            $like = Auth::user()->favorites()->where('pin_id', '=', $id)->get()->first();

            if ($like == null){
                Favorite::create(array(
                    'user_id' => Auth::user()->id,
                    'pin_id' => $id));
            } else {
                $like->delete();
            }
            return \Response::json(['success' => true, 'like' => $like]);//*/
        }
    }
    public function postRepin(){
        if (Auth::check()){
            $boardId = Input::get('board');
            $pinId = Input::get('pin_id');
            $originalPin = Pin::find($pinId)->base();
            $errors = [];

            // error checking
            if ($boardId == -1) {
                if (Input::get('boardname') == "") {
                    $errors[]=  'Either select an existsing board or fill in the name for the new board';
                }
            } else {
                $inBoard =  $originalPin->board->id == $boardId;

                foreach($originalPin->Repins as $repin){
                    if ($repin->board->id == $boardId){
                        $inBoard = true;
                    }
                }

                if ($inBoard){
                    $errors[]=  'Pin already in board';
                }
            }
            if($originalPin == null){
                $errors[]=  'Not a valid pin';
            }

            if ($errors != []) return \Response::json(['success' => false, 'errors' => $errors]);

            if ($boardId == -1 ){
                // create new board
                $board = Board::create([
                    'user_id' => Auth::user()->id,
                    'title' => Input::get('boardname')
                ]);

                $boardId = $board['id'];
                DB::table('follows')->insert(array(
                    'user_id'   => Auth::user()->id,
                    'board_id'   => $boardId
                ));
            }

            $pin = Pin::create(array(
                'user_id'   => Auth::user()->id,
                'board_id' => $boardId,
                'original_id' => $originalPin->id,
            ));

        }
        return \Response::json(['success' => true]);
    }

    public function getSearch(){

        $search = strlen(Input::get('search-text')) > 1 ? Input::get('search-text') : '';
        $pins = [];
        foreach(Keyword::where('keywords', 'LIKE', '%'. $search .'%')->get() as $tag){
            array_push($pins,$tag->pin);
        }
        foreach(Pin::where('title', 'LIKE', '%'. $search .'%')->get() as $pin){
            array_push($pins,$pin);
        }

        // sort by name
        usort($pins, function($a, $b){
            return strcmp($b->title,$a->title);
        });

        // remove dupes
        $pins = array_filter($pins,function ($obj) {
            static $idList = array();
            if(in_array($obj->id,$idList)) {
                return false;
            }
            $idList []= $obj->id;
            return true;
        });


        return View::make('pins.search')->with('pins', $pins);
    }

}