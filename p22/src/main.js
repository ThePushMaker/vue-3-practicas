import { createApp } from 'vue'
import App from './App.vue'
import 'materialize-css/dist/css/materialize.min.css'
import 'material-design-icons/iconfont/material-icons.css'
import 'vue-material-design-icons/styles.css';
import axios from 'axios'
import VueAxios from 'vue-axios'

//hay que llamarlo desde aquí para que axios forme parte de la instancia de vue
createApp(App).use(VueAxios, axios).mount('#app')
