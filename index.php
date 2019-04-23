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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header>
      <h1>Title of this website </h1>
    </header>

    <main class="exp">
      <div class="showingblock exp">
        <ul class="showingblock__list">
          <li class="showingblock__item" v-for = "getBook in booksArray">
            <div class="showingblock__image"></div>
            <div class="showingblock__info">
              <h3 class="showingblock__title">{{getBook.book_name}}</h3>
              <div class="showingblock__additional">
                <div class="showingblock__button" onclick="toggleInfo(this)">+</div>
                <div class="showingblock__wrapper ">
                  <div class="showingblock__author">Автор: {{getBook["GROUP_CONCAT(aut_name)"]}} </div>
                  <div class="showingblock__genre">Жанр: {{getBook["GROUP_CONCAT(gen_name)"]}}</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="searchingblock ">
        <form action="#" method="getGenre" class="searchingblock__form">
          <input v-model="bookName" type="text" name="bookname" id="bookname__input" class="searchingblock__textfield">
          
          <div class="h-space"></div>

          <input type="button" value="Поиск" class="searchingblock__button" @click="getBooksArray()" >

          <div class="h-space"></div>

          <div class="checks">
            <h3 class="checks__title">Авторы</h3>
            <hr>
            <ul class="checks__list">
              <li class="checks__element" v-for='getAuthor in authorsArray'>
              <label class="cheks__label" >
                <input class="cheks__input" type="checkbox" name="author" :value="getAuthor.id" class="checks__elem"> 
                {{getAuthor.name}} {{getAuthor.surname}}</label>
              </li>
            </ul>
          </div>
          <div class="checks">
            <h3 class="checks__title">Жанры</h3>
            <hr>
            <ul class="checks__list">
              <li class="checks__element" v-for='getGenre in genresArray'>
              <label class="cheks__label">
                <input class="cheks__input" type="checkbox" name="genre" :value="getGenre.id" class="checks__elem" > {{getGenre.name}}
              </label>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </main>

    <footer></footer>
    <script>
    
    
     function toggleInfo(element){
      if(element.vis) {
        element.nextElementSibling.style.display = 'none';
        element.vis = false; }
      else {
        element.nextElementSibling.style.display = 'flex';
        element.vis = true; }
     }
    
    </script>
  
    <script>
    new Vue({
      el: '.exp',
      data() {
        return {
          genresArray: null,
          authorsArray: null,
          booksArray:null,
          bookName: '',
          toggle:null
        };
      },
      methods: {
        getBooksArray() {
          console.log(this.bookName);
          axios
          .get(`controllers/bookControl.php?q="${this.bookName}"`)
          .then(response =>{
            (this.booksArray = response.data);
          });
        },
        getGenresArray(){
          axios
          .get('controllers/genreControl.php')
          .then(response =>{
            (this.genresArray = response.data)
          });
        },
        getAuthorsArray(){
          axios
          .get('controllers/authorControl.php')
          .then(response =>{
            (this.authorsArray = response.data);
          });
        }
      },
      mounted() {
        this.getGenresArray();
        this.getAuthorsArray();
        this.getBooksArray();
      }
});
  </script>
</body>
</html>