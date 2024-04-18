PHP Dischi JSON
===
nome repo: php-dischi-json
**Descrizione**
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
**Stack**
Html, CSS, VueJS (importato tramite CDN), axios, PHP
**Consigli**
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina *index.php* (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

giorno 2
- creo il campo per gli input
- in script.js preparo cio che poi voglio utilizzare (riga 10)
- con v-model "richiamo" gli elementi(da riga 10 a 14)
- inizilizzo la funzione che chiamo addNewDisco per aggioungere il disco
- la collego al bottone usando @click.stop per impedire all'evento di propagarsi oltre l'elemento in cui è applicato
- con console.log mi assicuro che funzioni