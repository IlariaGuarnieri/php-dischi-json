const { createApp } = Vue;

createApp ({
//qui siamo dentro al componente
  data() {
    return {
      title : 'To do list',
      apiUrl : 'server.php'
    }
  },

  methods:{
    getApi(apiUrl){
      axios.get(apiUrl).then(result=>{
        console.log(result.data)
      })
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  },
}).mount('#app')