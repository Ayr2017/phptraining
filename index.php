<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPTraining</title>
    <link rel="stylesheet" href="public/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header>
      <h1>Title of this website</h1>
    </header>

    <main>
      <div class="showingblock">
        <ul class="showingblock__list">
          <li class="showingblock__item">
            <div class="showingblock__image"></div>
            <div class="showingblock__info">
              <h3 class="showingblock__title">Name of the book</h3>
              <div class="showingblock__additional">
                <div class="showingblock__button">+</div>
                <div class="showingblock__wrapper">
                  <div class="showingblock__author">Автор: Author Name</div>
                  <div class="showingblock__genre">Жанр: Genre Name</div>
                </div>
              </div>
            </div>
          </li>
          <li class="showingblock__item">
            <div class="showingblock__image"></div>
            <div class="showingblock__info">
              <h3 class="showingblock__title">Name of the book</h3>
              <div class="showingblock__additional">
                <div class="showingblock__button">+</div>
                <div class="showingblock__author"></div>
                <div class="showingblock__genre"></div>
              </div>
            </div>
          </li>
          <li class="showingblock__item">
            <div class="showingblock__image"></div>
            <div class="showingblock__info">
              <h3 class="showingblock__title">Name of the book</h3>
              <div class="showingblock__additional">
                <div class="showingblock__button">+</div>
                <div class="showingblock__author"></div>
                <div class="showingblock__genre"></div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="searchingblock">
        <form action="#" method="get" class="searchingblock__form">
          <input type="text" name="bookname" id="bookname__input" class="searchingblock__textfield">
          
          <div class="h-space"></div>

          <input type="button" value="Поиск" class="searchingblock__button">

          <div class="h-space"></div>

          <div class="checks">
            <h3 class="checks__title">Author</h3>
            <hr>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Author<br>
          </div>
          <div class="checks">
            <h3 class="checks__title">Genre</h3>
            <hr>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Genre<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Genre<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Genre<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Genre<br>
            <input type="checkbox" name="genre" value="genre1" class="checks__elem"> Genre<br>
          </div>
        </form>
      </div>
    </main>

    <footer></footer>
</body>
</html>