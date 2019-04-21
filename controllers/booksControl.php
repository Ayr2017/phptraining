<?php
  include_once "../model/database.php";
  class Genre extends DB 
  {
    function get()
    {
      return $this->select("SELECT * FROM `genre`");
    }
  }
  
  $genre = new Genre();;
  $allGenres = json_encode($genre->get(), JSON_UNESCAPED_UNICODE);
  echo $allGenres;
?>
