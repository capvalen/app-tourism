<template>
	<div class="container home">
		<img alt="Vue logo" src="../assets/8009103.jpg" class="img-fluid">
		<div class="">
			<p class=" fs-2 text-center mb-0">Encuentra un lugar perfecto para vacacionar</p>
			<p class="fw-light text-center p-3">Explora el encanto sin igual de Perú: desde las místicas ruinas de Machu Picchu hasta las profundidades de la selva amazónica. <br> ¡Tu pŕoxima gran aventura te espera aquí!</p>
		</div>
		<Populares></Populares>
	</div>
</template>

<script>
// @ is an alias to /src
import Populares from '@/components/Populares.vue'

export default {
	name: 'HomeView',
	components: {
		Populares
	}
}
</script>
