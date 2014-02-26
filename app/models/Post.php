<?php

class Post extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
    protected $fillable = array('user_id','title', 'body');

    public $timestamps = true;
    public function Boards() {
        return $this->belongsToMany('Board', 'board_post');
    }
    public function User() {
        return $this->belongsTo('User');
    }
    public function Comments(){
        return $this->hasMany('Comment');
    }
    public function Favorites(){
        return $this->hasMany('Favorite');
    }

}