<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPTraining</title>
    <link rel="stylesheet" href="public/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
</head>
<body>
    <header>
      <h1>Title of this website </h1>
    </header>

    <main class="exp">
      <div class="showingblock exp">
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
      <div class="searchingblock ">
        <form action="#" method="getGenre" class="searchingblock__form">
          <input v-model="bookName" type="text" name="bookname" id="bookname__input" class="searchingblock__textfield">
          
          <div class="h-space"></div>

          <input type="button" value="Поиск" class="searchingblock__button" @click="booksArray()" >

          <div class="h-space"></div>

          <div class="checks">
            <h3 class="checks__title">Author</h3>
            <hr><ul class="checks__list">
              <li class="checks__element" v-for='getGenre in genresArray'>
              <label class="cheks__label" ><input class="cheks__input" type="checkbox" name="genre" :value="getGenre.id" class="checks__elem"> {{getGenre.name}}</label>
              </li>
            </ul>
          </div>
          <div class="checks">
            <h3 class="checks__title">Genre</h3>
            <hr>
            <ul class="checks__list">
              <li class="checks__element" v-for='getGenre in genresArray'>
              <label class="cheks__label" ><input class="cheks__input" type="checkbox" name="genre" :value="getGenre.id" class="checks__elem"> {{getGenre.name}}</label>
              </li>
            </ul>
            
          </div>
        </form>
      </div>
      
    </main>

    <footer></footer>
  
    <script>
    new Vue({
      el: '.exp',
      data() {
        return {
          genresArray: null,
          bookName: ''
        };
      },
      methods: {
        booksArray() {
          alert(this.bookName)
          // axios
          // .get('testPage.php?name='+this.bookName)
          // .then(response =>{
          //   (this.booksArray = response.data)
          // });
        }
      },
      mounted() {
        axios
          .get('controllers/booksControl.php')
          .then(response =>{
            (this.genresArray = response.data)
          });
      }
});
  </script>
</body>
</html>