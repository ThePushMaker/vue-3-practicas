<html>
    <!-- Vue se puede integrar y utilizar en cualquier lenguaje que utilice HTMl -->
    <div id="app">
      <!-- Tenemos el mismo resultado incluso en un echo de php, porqué cuando llega al navegador llega como html, el código pasa por el interprepte de php y lo convierte a  HTML plano-->
      <?php
      $mostrar=false;
      if($mostrar){
        echo '
        {{frutas}}
        <ul>
          <li v-for="fruta in frutas">{{fruta}}</li>
        </ul>';
    }else{
      echo'{{frutas[1]}}';
    }
    
      ?>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script>
      const app={
        data(){
          return{
            frutas:['Manzana','Pera', 'Platano',]

          }
        },
      }
      const _app=Vue.createApp(app)
      const mountedApp=_app.mount('#app')
    </script>
</html>