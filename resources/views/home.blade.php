@extends("layouts.app")
@section('title', "Sistem Rekomendasi - Home")

@push("css")
<style>
	#map {
		min-height: 500px;
	}
</style>
@endpush

@section("content")
<div class="container py-5 mb-4">
	<div class="row">
		<!-- Blog entries-->
		<div class="col-lg-8">
			<!-- Featured blog post-->
			<div class="card mb-4" id="map">
			</div>
		</div>
		<!-- Side widgets-->
		<div class="col-lg-4">
			<div class="card mb-4">
				<div class="card-header">Kriteria Wisata yang diinginkan</div>
				<div class="card-body">
					<select class="form-select mb-4" aria-label="Default select example">
						<option selected disabled>Kriteria 1</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					<select class="form-select mb-4" aria-label="Default select example">
						<option selected disabled>Kriteria 2</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					<select class="form-select mb-4" aria-label="Default select example">
						<option selected disabled>Kriteria 3</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					
					<div class="d-flex text-warning mb-4 rating rating-user" style="font-size: 2em">
						<div class="bi-star"></div>
						<div class="bi-star"></div>
						<div class="bi-star"></div>
						<div class="bi-star"></div>
						<div class="bi-star"></div>
					</div>

					<button class="btn btn-primary"type="button" onclick="return window.location.href='{{ route('rekomendasi') }}'">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push("script")
<script>
	var map = L.map('map', {doubleClickZoom: false}).setView([0.7893, 113.9213], 4);
	L.control.locate({
		icon: "fa fa-map-marker"
	}).addTo(map).start();

	L.tileLayer(
	'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 15,
		id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'pk.eyJ1IjoibGVzdHlvMjQiLCJhIjoiY2wyeTljdWxwMTBnOTNkbzVkc3hrbHZyOCJ9.6ln84V1h8RpNAxOsqRj9Lw'
	}).addTo(map);
</script>
@endpush