<?php

/**
 * Class Board
 */
class Board extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boards';
    /**
     * @var array
     */
    protected $fillable = array('user_id', 'title');

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function Pins() {
        return $this->belongsToMany('Pin', 'board_pin');
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
        return $this->belongsToMany('User', 'follows', 'board_id'); //->withPivot('user_id');
    }



    /**
     * @return mixed
     */
    public function Tags() {
        return $this->belongsToMany('Tag', 'board_tag');
    }


    public function MostLiked($type){
        $posts = $this->pins()->where('type', '=', $type)->get();
        $highestID = -1;
        $highestCount = -1;
        // var_dump($posts);
        if (sizeof($posts) > 0){
        foreach( $posts as $i => $thisPost){
            $currentCount = count($thisPost->favorites);
            if ($highestCount <= $currentCount){
                $highestCount = $currentCount;
                $highestID = $i;
            }
        }
        return $posts[$highestID];
        } else return null;
    }

}