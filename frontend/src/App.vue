<template>
  <div id="app">
    <p>{{ resp }}</p>
    <p>{{text}}</p>
    <button @click = "fetchData">data</button>
  </div>
</template>

<script>
export default {
  name: 'App',
  data(){
    return{
      resp: '',
      text:'tex'
    }
  },

  methods: {
    fetchData: function(){
      let data = fetch('http://localhost:8080/posts',{
        method:'GET'
      });
      data.then(
        response => {
          return response.text();
        }
      ).then(
        text => {
          this.resp = text;
        }
      )
    },


  }

}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin-top: 60px;
}
</style>
