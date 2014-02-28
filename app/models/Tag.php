<?php

class Tag extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tag';
    protected $fillable = array('name');
    public $timestamps = false;

    public function Boards() {
        return $this->belongsToMany('Board', 'board_tag');
    }
}