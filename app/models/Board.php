<?php

/**
 * Class Board
 */
class Board extends Eloquent  {

    protected $table = 'boards';
    protected $fillable = array('user_id', 'title');
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function Pins() {
        return $this->hasMany('Pin', 'board_id');
    }

    /**
     * @return mixed
     */
    public function User()
    {
        return $this->belongsTo('User');
    }

    /**
     * @return mixed
     */
    public function Followers(){
        return $this->hasMany('User', 'follows', 'board_id'); //->withPivot('user_id');
    }

    /**
     * @return mixed
     */
    public function Tags() {
        return $this->hasMany('Tag', 'board_tag');
    }

    public function getType($type, $amount = 10){
        return $this->pins()->where('type', '=', $type)->take($amount)->get();
    }

    public function MostLiked($type){
        $pins = $this->pins()->where('type', '=', $type)->get();
        $highestID = -1;
        $highestCount = -1;
        // var_dump($pins);

        if(sizeof($pins) == 0) {
            return false;
        }

        foreach( $pins as $i => $thisPost){
            $currentCount = count($thisPost->favorites);
            if ($highestCount <= $currentCount){
                $highestCount = $currentCount;
                $highestID = $i;
            }
        }
        return $pins[$highestID];

    }

}