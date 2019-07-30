<?php

class Actor
{
  private $id;
  private $first_name;
  private $last_name;
  private $rating;
  private $favorite_movie_id;
  private $movie_name;

  function __construct($first_name,$last_name,$rating)
  {
    $this->setFirstName($first_name);
    $this->setLastName($last_name);
    $this->setRating($rating);
  }
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }
  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
  }

  public function getLastName()
  {
    return $this->last_name;
  }
  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function getRating()
  {
    return $this->rating;
  }
  public function setMovieName($movie_name)
  {
    $this->movie_name = $movie_name;
  }

  public function getMovieName()
  {
    if ($this->movie_name) {
      return $this->movie_name;
    }
    return 'No hay pelicula';
  }
  public function setFavoriteMovieId($favorite_movie_id)
  {
    $this->favorite_movie_id = $favorite_movie_id;
  }

  public function getFavoriteMovieId()
  {
    return $this->favorite_movie_id;
  }
}

 ?>
