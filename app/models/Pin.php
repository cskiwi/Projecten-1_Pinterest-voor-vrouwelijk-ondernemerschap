<?php

class Pin extends Eloquent {
  protected $table = 'pins';
  protected $fillable = array( 'user_id',
                               'board_id',
                               'original_id',
                               'title',
                               'description',
                               'imgLocation',
                               'price',
                               'type' );

  public $timestamps = true;

  public function Board() {
    return $this->belongsTo( 'Board', 'board_id' );
  }

  public function Repins() {
    return $this->hasMany( 'Pin', 'original_id' );
  }

  public function User() {
    return $this->belongsTo( 'User', 'user_id' );
  }

  public function originalUser() {
    return user::find( $this->Base()->user_id );
  }

  public function repinned() {
    return $this->original_id != null;
  }

  public function keywords() {
    return $this->hasMany( 'Keyword' );
  }

  public function Comments() {
    return $this->hasMany( 'Comment' );
  }

  public function Favorites() {
    return $this->hasMany( 'Favorite' );
  }

  public function Base() {
    $pin = $this;
    // var_dump($this->toArray());
    while ($pin->original_id != null) {
      $pin = Pin::find( $pin->original_id );
    }
    return $pin;
  }

  public function FavoriteUser() {
    return Auth::user()->favorites()->where( 'pin_id', '=', $this->id )->get()->first() == true;
  }

  public static function create(array $attributes) {
    $pin = parent::create( $attributes );
    $extractor = new TermExtractor();
    $terms = $extractor->extract($pin->description . $pin->title);

    foreach ($terms as $term_info) {
      list($term, $occurrence, $word_count) = $term_info;
      Keyword::create([
        'keywords' => $term_info[0],
        'pin_id' => $pin->id,
        'occurrences' => $term_info[1],
      ]);
    }
    return $pin;
  }
}