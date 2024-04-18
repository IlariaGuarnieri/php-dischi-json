const { createApp } = Vue;

createApp ({
//qui siamo dentro al componente
  data() {
    return {
      title : 'BEST SELLER MUSIC',
      apiUrl : 'server.php',
      dischi : [],
      newDisco:{
        title:'',
        author: '',
        year: '',
        genre: '',
      }
    }
  },

  methods:{
    getApi(apiUrl){
      axios.get(apiUrl).then(result=>{
        this.dischi=result.data
        console.log(this.dischi);
      })
    },
    addNewDisco(){
      /*
      -strutturo i dati per inviarli in post a server
      -invio con axios in post i dati
      -con i dati che ricevo aggiorno la lista dei dischi
      */
      console.log(this.newDisco);
      // FormData(); trasforma un dato che php legge come venisse da un form
      // data.append appende a questo data il mio input, si fa cosi.
      const data = new FormData();
      data.append('newDiscoTitle' ,this.newDisco.title)
      data.append('newDiscoAuthor' ,this.newDisco.author)
      data.append('newDiscoYear' ,this.newDisco.year)
      data.append('newDiscoGenre' ,this.newDisco.genre)
      console.log(data)

      axios.post(this.apiUrl, data)
      .then(result =>{
        console.log(result.data);
        this.dischi = result.data
      })
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  },
}).mount('#app')