<?php

class Board extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boards';
    protected $fillable = array('user_id', 'title');

    public $timestamps = true;

    public function posts() {
        return $this->belongsToMany('Post', 'board_post');
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
    public function Followers(){
        return $this->belongsToMany('User', 'follows', 'board_id'); //->withPivot('user_id');
    }

}