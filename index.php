<?php
include __DIR__ . '/partials/head.php'

?>

<body>
  <div id="app" class="sc-container">
    <h1 class="text-center">{{ title }}</h1>

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

    <div class="cont_new_card text-center ">
    <h4>Aggiungi un disco</h4>
    <div class="input-group my-3">
      <input
      v-model.trim="newDisco.title"
      class="form-control" 
      type="text" 
      placeholder="Titolo">

      <input 
      v-model.trim="newDisco.author"
      class="form-control" 
      type="text" 
      placeholder="Autore">

      <input 
      v-model.trim="newDisco.year"
      class="form-control" 
      type="text" 
      placeholder="Anno">

      <input 
      v-model.trim="newDisco.genre"
      class="form-control" 
      type="text" 
      placeholder="Genere">

<!-- @click.stop="" serve ad impedire all'evento di propagarsi oltre l'elemento in cui è applicato -->
      <button 
      @click.stop="addNewDisco"  
      class="btn btn-outline-primary" 
      type="button"
      >Aggiungi</button>

    </div>
  </div>

  </div>
    
  <script src="./script.js" ></script>
</body>
</html>