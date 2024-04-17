const { createApp } = Vue;

createApp ({
//qui siamo dentro al componente
  data() {
    return {
      title : 'PHP DISCHI JSON',
      apiUrl : 'server.php',
      dischi : []
    }
  },

  methods:{
    getApi(apiUrl){
      axios.get(apiUrl).then(result=>{
        this.dischi=result.data
        console.log(this.dischi);
      })
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  },
}).mount('#app')