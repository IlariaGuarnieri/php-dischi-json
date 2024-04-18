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
      console.log(this.newDisco);
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  },
}).mount('#app')