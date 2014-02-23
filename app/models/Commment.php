<?php

class Comment extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';
    protected $fillable = array('user_id', 'post_id', 'content');
    public $timestamps = true;

    public function posts() {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}