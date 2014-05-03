<?php

class Pin extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pins';
    protected $fillable = array('user_id','title', 'description', 'imgLocation', 'price', 'type');

    public $timestamps = true;
    public function Boards() {
        return $this->belongsToMany('Board', 'board_pin');
    }
    public function User() {
        return $this->belongsTo('User', 'user_id');
    }
    public function Comments(){
        return $this->hasMany('Comment');
    }
    public function Favorites(){
        return $this->hasMany('Favorite');
    }
    public function FavoriteUser(){
        return Auth::user()->favorites()->where('pin_id', '=', $this->id)->get()->first() == true;
    }

}