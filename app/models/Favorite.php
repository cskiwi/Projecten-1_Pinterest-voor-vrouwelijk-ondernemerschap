<?php

class Favorite extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'favorites';
    protected $fillable = array('user_id', 'pin_id');
    public $timestamps = false;

    public function post() {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}