<template>
  <div>
    <h1>Hola mundo, otra vez...</h1>
    <button class="btn green" @click="saludar">Botón <i class="material-icons">save</i>
    </button>

<div class="container">
    <div class="row">
      <div class="col m12 card-panel">
        <form>
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
            <option value="">Seleccione</option>
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
        <div class="col m4 card-panel">
          <label for="">Pasatiempo</label>
          <input type="text" v-model="pasatiempo">
          <button class="btn indigo darken-3">AGREGAR PASATIEMPO<i class="material-icons right">send</i></button>
          <br>
          <ul>
            <li v-for="pasatiempo in pasatiempos" v-bind:key="pasatiempo">{{pasatiempo.descripcion}}</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col m4">
          <label>
            <input type="checkbox" v-model="suscribirse" checked/>
            <span>Suscribirse al boletin de noticias.</span>
            </label>
        </div>
      </div>
      

      <div class="row center">
        <button type="submit" class="btn indigo darken-4">Agregar Usuario <i class="material-icons right">add_circle</i></button>
      </div>
      </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col m12">
      <table class="table bordered stripped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Estado Civil</th>
            <th>Correo</th>
            <th>Pasatiempos</th>
            <th>Suscrito</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tbody>
            <tr v-for="usuario in usuarios" v-bind:key="usuario">
              <td>{{usuario.nombre}}</td>
              <td>{{usuario.Apellido}}</td>
              <td>{{usuario.Edad}}</td>
              <td>{{usuario.Estado_civil}}</td>
              <td>{{usuario.correo}}</td>
              <td>
                <ul>
                  <li v-for="pasatiempo in usuario.pasatiempos" v-bind:key="pasatiempo">{{pasatiempo.id}} - {{pasatiempo.descripcion}}</li>
                </ul>
              </td>
              <td><label><input type="checkbox" disabled v-model="usuario.suscrito"><span></span></label></td>
              <td><a href="#!"><i class="material-icons"> create</i></a></td>
              <td><a href="#!"><i class="material-icons">delete</i></a></td>
            </tr>
          </tbody>
        </tbody>
      </table>
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
      pasatiempos:[],
      usuarios:[],
      select_instances:[],

    }
  },
  mounted(){
    var elems = document.querySelectorAll('select');
    this.select__instances = M.FormSelect.init(elems, null);

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

