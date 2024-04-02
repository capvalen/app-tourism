<template>
	<!-- <nav>
		<router-link to="/">Inicio</router-link> |
		<router-link to="/about">About</router-link>
	</nav> -->
	<router-view id="routerView"/>

	<nav class="navbar  fixed-bottom bg-body-tertiary">
		<div class="container-fluid">
			<div class=" navbar-collapse" id="navbarSupportedContent">
				<div class="row ">
					<div class="col text-center">
						<i class="bi bi-house"></i>
						<p class="mb-0">Inicio</p>
					</div>
					<div class="col text-center">
						<i class="bi bi-search"></i>
						<p class="mb-0">Buscar</p>
					</div>
					<div class="col text-center">
						<i class="bi bi-star"></i>
						<p class="mb-0">Favoritos</p>
					</div>
					<div class="col text-center">
						<i class="bi bi-cart"></i>
						<p class="mb-0">Pedidos</p>
					</div>
				</div>
			</div>
		</div>
	</nav>
</template>

<style>
nav p{
	font-size:0.7rem;
}
#routerView{
	margin-bottom: 4rem;
}
</style>
