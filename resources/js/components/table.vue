<template>
  <div>
    <div class="row justify-content-center">
      <div class="col-md-2" v-for="name in colsName">
        {{name}}
      </div>
    </div>
    <div class="row justify-content-center" v-for="row in table">
      <div class="col-md-2" v-for="value in row">
        {{value}}
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      tableName: ""
    },
    data() {
      return {
        tableData: {},
        colsName: [],
        table: {},
      }
    },
    function getSrc() {
      return axios.post("/read", {type:'alumno'});
    },
    mounted() {
      if (this.tableName == "alumno") {
        this.colsName = ['id', 'Nombre', 'Apellidos', 'Genero', 'Fecha Nacimiento'];
        this.table = getSrc.then(function(response){
          return response.data;
        }).catch(function(error){
          console.log("Error ocurre.");
        })
      }

      if (this.tableName == "profesor") {
        this.colsName = ['id', 'Nombre', 'Apellidos', 'Genero'];
      }

      if (this.tableName == "grado") {
        this.colsName = ['id', 'Nombre', 'ProfesorID'];
      }

      if (this.tableName == "seccion") {
        this.colsName = ['id', 'AlumnoID', 'GradoID', 'Seccion'];
      }
      console.log("component mounted.");
    },
    watch: {
      'table': function(newVal, oldVal) {

        this.$forceUpdate();
      }
    }
  }
</script>
