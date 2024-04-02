<template>
	<div id="recientes">
		<p class="fs-5 fw-semibold">Lo más reciente</p>
		
		<div v-for="reciente in recientes" class="card my-2" >
			<img :src="retornaFoto(reciente.contenido.fotos[0])" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"> <span class="icono"><i class="bi bi-luggage"></i></span> {{reciente.contenido.nombre}}</h5>
				
				<p class="text-end"><a href="#" class="btn btn-sm border-0 btn-outline-primary "><i class="bi bi-arrow-right-short"></i> Ver más detalles</a></p>
			</div>
		</div>
	</div>
</template>
<script>
export default{
	name: 'Populares',
	data() {
		return {
			recientes:[]
		}
	},
	methods: {
		cargarDatos(){
			let datos = new FormData()
			datos.append('pedir', 'verRecientes')
			fetch(this.servidor+'Aplicativo.php', {
				method: 'POST', body:datos
			})
			.then(resp => resp.json())
			.then(data => this.recientes = data )
		},
		retornaFoto(foto){
			if(foto)
				return 'https://grupoeuroandino.com/app/render/images/subidas/'+foto.nombreRuta
			else
				return 'https://grupoeuroandino.com/app/render/images/gea.png'
		}
	},
	mounted() {
		this.cargarDatos()
	},
}
</script>
<style scoped>
.icono i{
	font-size:1.5rem;
	/* display: inline-block;transform: rotate(45deg)!important; */
}
.card-title{
	color:rgb(42, 42, 42)
}
</style>
