<?php
  include_once "../model/database.php";
  class Author extends DB 
  {
    function get()
    {
      return $this->select("SELECT * FROM `author`");
    }
  }
  
  $author = new Author();
  $allAuthors = json_encode($author->get(), JSON_UNESCAPED_UNICODE);
  echo $allAuthors;
?>