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

            if(\Request::ajax()){
                return \Response::json(['success' => false, 'errors' => $messages->toArray()]);
            } else {
                return \Redirect::back()->withInput(Input::all())->withErrors($messages);
            }
        } else {
            $data = Input::only(array('content'));
            $data['pin_id'] = $pin_id;
            $data['user_id'] = Auth::user()->id;
            Comment::create($data);
            if(\Request::ajax()){
                return \Response::json(['success' => true], 200);
            } else {
                return Redirect::to('pins/detail/' . $pin_id);
            }
        }
    }

}