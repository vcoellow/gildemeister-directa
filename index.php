<?php
include 'includes/header.php'
?>
<link rel="stylesheet" href="assets/css/swiper.min.css">
<script src="assets/js/swiper.min.js"></script>
<div class="swiper-container">
	<div class="swiper-wrapper">
		<a href="#" class="swiper-slide">
			<img src="assets/img/slider/01.jpg" width="100%">
		</a>
		<a href="#" class="swiper-slide">
			<img src="assets/img/slider/02.jpg" width="100%">
		</a>
		<a href="#" class="swiper-slide">
			<img src="assets/img/slider/03.jpg" width="100%">
		</a>
	</div>
	<div class="swiper-pagination"></div>
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>
<script>
	var swiper = new Swiper('.swiper-container', {
		autoplay: 5000,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
    });
</script>
<section>
	<div class="grid-100 bg-blanco titulos">
		<div class="grid-container">
			<h3>Seleccione la marca de su interés:</h3>
			<?php
			include 'includes/buscar-marca.php'
			?>
		</div>
	</div>
</section>
<section>
	<div class="grid-100 bg-blanco titulos">
		<div class="grid-container">
			<h3>Seleccione el tipo de auto o moto que busca:</h3>
			<?php
			include 'includes/buscar-tipo.php'
			?>
		</div>
	</div>
</section>
<section>
	<div class="grid-100 bg-gris borde-azul">
		<div class="grid-container titulos">
			<h3>BIENVENIDO A TU NUEVO AUTO</h3>
			<p>A través de su convenio de Venta por Importación Directa, podrás acceder a descuentos en la más amplia gama de vehículos. Este beneficio es válido además para tus familiares directos: padres, hermanos, conyugue e hijos.</p>
			<p>Esta es una gran oportunidad para que puedas comprar los mejores vehículos del mercado, con Descuentos Exclusivos.</p>
		</div>
	</div>
</section>
<?php
include 'includes/footer.php'
?>