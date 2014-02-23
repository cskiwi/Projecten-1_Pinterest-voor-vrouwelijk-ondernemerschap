<?php

class Favorite extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'favorites';
    protected $fillable = array('user_id', 'post_id');
    public $timestamps = true;

    public function posts() {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}