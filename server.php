<?php
// prendo il file json esterno  e salvo come stringa il suo contenuto in una variabile
$stringDisk = file_get_contents('dischi.json');
// ricodifico la stringa trasformandola in un elemento php
$dischi =json_decode($stringDisk, true);


//verifico che esista in POST la variabile newDiscoTitle , se esiste aggiungo un nuovo disco alla lista e poi aggiorno il file json con la lista decodificata
// isset dice che se esiste newDiscoTitle allora ...
if(isset($_POST['newDiscoTitle'])){
  $new_item = [
    'title'=> $_POST['newDiscoTitle'],
    'author'=> $_POST['newDiscoAuthor'],
    'year'=> $_POST['newDiscoYear'],
    'genre'=> $_POST['newDiscoGenre']
  ];
  // ricodifico la stringa trasformandola in un elemento php
  $dischi[] = $new_item;
  file_put_contents('dischi.json',json_encode($dischi)); //la lista è aggiornata e sovrascrive
};

// trasformo il file php come se fosse un file json
header('Content-Type: application/json');

// stampo la lista nuovamente trasformata in stringa.
echo json_encode($dischi);  //qui la lista dischi è aggiornata
?>