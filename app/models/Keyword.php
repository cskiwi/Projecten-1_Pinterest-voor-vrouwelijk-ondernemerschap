<?php
/**
 * User: Glenn Latomme
 * Date: 22/05/14
 */

class Keyword extends eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'keywords';
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = array('pin_id', 'keywords', 'occurrences');

    /**
     * @return mixed
     */
    public function Pin() {
        return $this->belongsTo('Pin');
    }

} 