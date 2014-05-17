<?php

/**
 * Class PostController
 */
class CommentController extends BaseController {

    public function addComment($pin_id){
        // validate the info, create rules for the inputs
        $rules = array(
            'content'    => 'required|min:3', // make sure the username is an actual username
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        $findPin = Pin::find($pin_id) !=null;
        // if the validator fails, redirect back to the form
        if ($validator->fails() || $findPin == false) {
            $messages = $validator->errors();
            if ($findPin == false){
                $messages->add('Pin not found', 'The system couldn\'t find the pin you\'re trying to comment on');
            }
            return \Redirect::back()->withInput(Input::all())->withErrors($messages);

        } else {
            $data = Input::only(array('content'));
            $data['pin_id'] = $pin_id;
            $data['user_id'] = Auth::user()->id;
            Comment::create($data);

            return Redirect::to('pins/detail/' . $pin_id);
        }
    }
    public function deleteComment($comment_id, $pin_id){
        $pin = Pin::find($pin_id);
        $comment = Comment::find($comment_id);
        $user = Auth::User();

        if ($pin == null || $comment == null ) return \Redirect::back()->withInput()->withErrors(['can\'t find the stuff you\'re looking for']);

        if ($pin->user->id = $user->id || $comment->user->id == $user ){

            $comment->delete();
        }
        return Redirect::to('pins/detail/' . $pin_id);

    }

    public function updateComment($commentId){
        // validate the info, create rules for the inputs
        $rules = array(
            'content'    => 'required|min:3', // make sure the username is an actual username
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        $findComment = Comment::find($commentId) !=null;
        // if the validator fails, redirect back to the form
        if ($validator->fails() || $findComment == false) {
            $messages = $validator->errors();
            if ($findComment == false){
                $messages->add('Pin not found', 'The system couldn\'t find the pin you\'re trying to comment on');
            }
            return \Redirect::back()->withInput(Input::all())->withErrors($messages);

        } else {
            $data = Input::only(array('content'));

            $findComment->update($data, $commentId);

            return Redirect::to('pins/detail/' . $commentId->pin_id);
        }
    }

}