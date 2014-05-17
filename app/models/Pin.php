<?php

class Pin extends Eloquent {
    protected $table = 'pins';
    protected $fillable = array('user_id', 'board_id', 'original_id' ,'title', 'description', 'imgLocation', 'price', 'type');

    public $timestamps = true;

    /*public function Boards() {
        return $this->belongsToMany('Board', 'board_pin');
    }//*/

    public function Board() {
        return $this->belongsTo('Board', 'board_id');
    }//*/

    public function Repins(){
        return $this->hasMany('Pin', 'original_id');
    }
    public function User() {
        return $this->belongsTo('User', 'user_id');
    }
    public function originalUser(){
        return user::find($this->Base()->user_id);
    }
    public function repinned(){
        return $this->original_id != null;
    }

    public function Comments(){
        return $this->hasMany('Comment');
    }
    public function Favorites(){
        return $this->hasMany('Favorite');
    }

    public function Base(){
        $pin = $this;
        // var_dump($this->toArray());
        while($pin->original_id != null){
            $pin = Pin::find($pin->original_id);
        }
        return $pin;
    }
    public function FavoriteUser(){
        return Auth::user()->favorites()->where('pin_id', '=', $this->id)->get()->first() == true;
    }
}