<?php

/**
 * Class Board
 */
class Board extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boards';
    /**
     * @var array
     */
    protected $fillable = array('user_id', 'title');

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function Posts() {
        return $this->belongsToMany('Post', 'board_post');
    }

    /**
     * @return mixed
     */
    public function User()
    {
        return $this->belongsTo('User');
    }

    /**
     * @return mixed
     */
    public function Followers(){
        return $this->belongsToMany('User', 'follows', 'board_id'); //->withPivot('user_id');
    }



    /**
     * @return mixed
     */
    public function Tags() {
        return $this->belongsToMany('Tag', 'board_tag');
    }
}