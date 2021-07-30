<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header();

$branch_name = 'Mestre (VE)';

?>

<main class="page-wrapper">
	<header class="container-fluid section bg-transparent section-padding header-page">
		<div class="row justify-content-center">
			<div class="col-12 col-xxl-10">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6 text-center text-sm-start">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center justify-content-sm-start mb-3 mb-sm-0">
								<li class="breadcrumb-item">Home</li>
								<li class="breadcrumb-item active" aria-current="page">Contatti</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="container-fluid section section-padding-sm">
		<div class="row justify-content-center">
			<div class="col-12 col-xxl-10">
				<div class="row">
					<div class="col-12">
						<div class="title-1">
							<?php the_title(); ?>
						</div>
					</div>
					<div class="col-12 col-lg-5 col-xl-4">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="title-4">Indirizzo</div>
								<p>
									Via Linghindal, 10<br>
									30172, Mestre (VE)
								</p>
							</div>
							<div class="col-12 col-sm-6 mt-5 mt-sm-0">
								<div class="title-4">Contatti</div>
								<p>
									info@automarca.it<br>
									+39 0418 628632
								</p>
							</div>
							<div class="col-12 mt-5">
								<div class="title-4">Servizi</div>
								<ul>
									<li>Vendita</li>
									<li>Assistenza</li>
									<li>Ricambi e accessori</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-7 offset-xl-1 mt-4 mt-lg-0">
						<img src="<?= get_template_directory_uri(); ?>/assets/images/contatti/automarca-mestre-int.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid section">
		<div class="row justify-content-center">
			<div class="col-12 map-container" id="map" data-branch-office-data='{"name":"Automarca Spa","branch":"Mestre","address":"Via Linghindal, 10<br>30172, Mestre (VE)","contact":"info@automarca.it<br>+39 0418 628632","link":"https://goo.gl/maps/eAuSbMgyK5shXQSL8","center":{"lat":45.48090553412552,"lng":12.244663321151114}}'>

			</div>
		</div>
	</section>
	<section class="container-fluid section section-padding-sm">
		<div class="row justify-content-center">
			<div class="col-12 col-xxl-10">
				<div class="title-4">Orari</div>
				<div class="row gx-3 gx-xxl-5">
					<div class="col-12 col-md-6 col-xl-4 timetable">
						<div class="title-6 sector-title">VENDITE</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									0415319660
								</p>
							</div>
						</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									info@automarca.it
								</p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-sm timetable-table border-top border-bottom">
								<tbody>
									<tr>
										<td>LUNED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>MARTED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>MERCOLED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>GIOVED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>VENERD&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>SABATO</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 19.00</td>
									</tr>
									<tr>
										<td>DOMENICA</td>
										<td class="text-center" colspan="2">Chiuso</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-12 col-md-6 col-xl-4 timetable">
						<div class="title-6 sector-title">ASSISTENZA</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									0418628593
								</p>
							</div>
						</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									info@automarca.it
								</p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-sm timetable-table border-top border-bottom">
								<tbody>
									<tr>
										<td>LUNED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>MARTED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>MERCOLED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>GIOVED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>VENERD&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>SABATO</td>
										<td class="text-center" colspan="2">Chiuso</td>
									</tr>
									<tr>
										<td>DOMENICA</td>
										<td class="text-center" colspan="2">Chiuso</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-12 col-md-6 col-xl-4 timetable">
						<div class="title-6 sector-title">RICAMBI E ACCESSORI</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									04221830663
								</p>
							</div>
						</div>
						<div class="d-flex align-items-center info">
							<div class="flex-shrink-0">
								<img src="https://via.placeholder.com/15" alt="...">
							</div>
							<div class="flex-grow-1 ms-3">
								<p class="text-small">
									info@automarca.it
								</p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-sm timetable-table border-top border-bottom">
								<tbody>
									<tr>
										<td>LUNED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>MARTED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>MERCOLED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>GIOVED&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>VENERD&Iacute;</td>
										<td>08.30 - 12.30</td>
										<td>14.30 - 18.30</td>
									</tr>
									<tr>
										<td>SABATO</td>
										<td class="text-center" colspan="2">Chiuso</td>
									</tr>
									<tr>
										<td>DOMENICA</td>
										<td class="text-center" colspan="2">Chiuso</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include_once 'partials/contact-form.php'; ?>
</main>

<?php get_footer(); ?>