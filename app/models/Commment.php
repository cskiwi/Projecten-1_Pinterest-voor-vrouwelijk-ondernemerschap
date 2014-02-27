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
    protected $fillable = array('user_id', 'post_id', 'content');
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function posts() {
        return $this->belongsTo('Post');
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}