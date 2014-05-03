<?php

/**
 * Class Comment
 */
class Comment extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';
    /**
     * @var array
     */
    protected $fillable = array('user_id', 'pin_id', 'content');
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function Pins() {
        return $this->belongsTo('Pin');
    }

    /**
     * @return mixed
     */
    public function User()
    {
        return $this->belongsTo('User');
    }
}