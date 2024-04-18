<?php
include __DIR__ . '/partials/head.php'

?>

<body>
  <div id="app" class="sc-container">
  <h1 class="text-center">{{ title }}</h1>
  <div class="cont_new_card text-center ">
    <h4>Aggiungi un disco</h4>
    <div class="input-group my-3">
      <input class="form-control" type="text" placeholder="Titolo">
      <input class="form-control" type="text" placeholder="Autore">
      <input class="form-control" type="text" placeholder="Anno">
      <input class="form-control" type="text" placeholder="Poster">
      <input class="form-control" type="text" placeholder="Descrizione">
      <button class="btn btn-outline-primary" type="button">Aggiungi</button>

    </div>
  </div>

    <div class="container-fluid my-5 d-flex flex-wrap ">

      <div v-for="(disco, index) in dischi"
      :key="`array${index}`"
      class="card m-4" style="width: 240px; height: 450px;">
        <img :src="disco.poster" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Titolo: {{disco.title}}</h5>
          <h4>Autore: {{disco.author}}</h4>
          <p class="card-text">Anno: {{disco.year}}</p>
          <p>Genere: {{disco.genre}}</p>
        </div>
      </div>

    </div>
  </div>
  <script src="./script.js" ></script>
</body>
</html>