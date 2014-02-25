<?php

class Follow extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'follows';
    protected $fillable = array('user_id', 'board_id');
    public $timestamps = true;

    public function board() {
        return $this->belongsTo('Board');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}