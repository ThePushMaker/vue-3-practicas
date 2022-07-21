<template>
  <div>
    <h1>Hola mundo, otra vez...</h1>
    <button class="btn green" @click="saludar">Botón <i class="material-icons">save</i>

    </button>
<div class="container">
    <div class="row">
      <div class="col m12 card-panel">
        <div class="row">
        <div class="col m4">
          <label for="">Nombre</label>
          <input type="text" v-model="nombre">
        </div>
        <div class="col m4">
            <label for="">Apellido</label>
            <input type="text" v-model="apellido">
        </div>
      </div>

      <div class="row">
        <div class="col m4">
          <label for="">Edad</label>
          <input type="number" name="" id="" v-model="edad">
        </div>
        <div class="col m4">
          <label for="">Estado civil</label>
          <select v-model="estado_civil">
            <option value="C">Casado</option>
            <option value="S">Soltero</option>
            <option value="D">Divorciado</option>
            <option value="V">Viudo</option>
          </select>
        </div>
        <div class="col m4">
          <label for="">Correo</label>
          <input type="email" name="" id="" v-model="correo">
        </div>
      </div>

      <div class="row">
        <div class="col m4">
          <label for="">Pasatiempo</label>
          <input type="text" v-model="pasatiempo">
          <br>
          <ul>
            <li v-for="pasatiempo in pasatiempos" v-bind:key="pasatiempo">{{pasatiempo.descripcion}}</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col m4">
          <label for=""><input type="checkbox" name="" id="" v-model="suscribirse"><span>Suscribirse al boletin de noticias.</span></label>
        </div>
      </div>

      <div class="row">
        <button type="submit" class="btn indigo darken-4">Agregar Usuario <i class="material-icons">add_circle</i></button>
      </div>
      </div>

    </div>
  </div>
  </div>
</template>

<script>
import M from 'materialize-css'


export default {
  name: 'App',
  data(){
    return{
      nombre:'',
      apellido:'',
      edad:0,
      estado_civil:'',
      correo:'',
      suscribirse:false,
      pasatiempo:'',
      pasatiempos:[
   
      ],
      select__instances:[]

    }
  },
  created(){
    var elems = document.querySelectorAll('select');
    this.select__instances = M.FormSelect.init(elems, null);
  },
  mounted(){
    this.axios.get('https://prueba.com')
    .then(() => {

    })
  },
  methods:{
    saludar(){
      M.toast({html:'Hola Mundo again'});
    }
  }

}
</script>

