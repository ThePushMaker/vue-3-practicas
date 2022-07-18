const app={
    data(){
        return{
            usuario:'codeStack',
            correo:'', 
            clave:'',
            nombre:'josé',
        }
    },
    methods:{
        llamarSaludoDesdeHijo(){
            this.$refs.menuComponent.saludarDesdeHijo(this.nombre);
            this.$refs.menuComponent.miUsuario=this.nombre
        }
    }
}
const _app=Vue.createApp(app);