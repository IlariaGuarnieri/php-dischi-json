<?php
include __DIR__ . '/partials/head.php'

?>

<body>
  <div id="app" class="sc-container">
    
    <h1 class="text-center">{{ title }}</h1>
    <div class="container-fluid my-5 d-flex">

      <div v-for="(disco, index) in dischi"
      :key="`array${index}`"
      class="card m-4" style="width: 18rem;">
        <img :src="disco.poster" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{disco.title}}</h5>
          <h4>{{disco.author}}</h4>
          <p class="card-text">{{disco.year}}</p>
          <p>{{disco.genre}}</p>
        </div>
      </div>

    </div>
  </div>
  <script src="./script.js" ></script>
</body>
</html>