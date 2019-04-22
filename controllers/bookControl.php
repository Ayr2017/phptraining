<?php
  include_once "../model/database.php";
  class Books extends DB 
  {
    function get()
    {
      return $this->select("SELECT DISTINCT 
      A.book_id, A.book_name, GROUP_CONCAT(gen_id), GROUP_CONCAT(gen_name), book_img, book_desc, GROUP_CONCAT(aut_id), GROUP_CONCAT(aut_name) 
      FROM (SELECT DISTINCT books.id AS book_id, books.name AS book_name, books.image AS book_img, books.description AS book_desc, GROUP_CONCAT(author.id) AS aut_id, GROUP_CONCAT(CONCAT_WS(' ', author.name,  author.surname)) AS aut_name 
      FROM (author JOIN author_has_books ON author_has_books.author_id = author.id) JOIN books ON books.id=author_has_books.books_id GROUP BY book_id) AS A 
      JOIN (SELECT DISTINCT books.id AS book_id, books.name AS book_name, GROUP_CONCAT(genre.id) AS gen_id, GROUP_CONCAT(genre.name) AS gen_name 
      FROM (genre JOIN books_has_genre ON books_has_genre.genre_id = genre.id) 
      JOIN books ON books.id=books_has_genre.books_id GROUP BY book_id ) AS B ON A.book_id = B.book_id 
      GROUP BY A.book_id");
    }
  }
  
  $books = new Books();
  $allBooks = json_encode($books->get(), JSON_UNESCAPED_UNICODE);
  echo $allBooks;
?>
