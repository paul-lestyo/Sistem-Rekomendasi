@extends("layouts.app")
@section('title', "Sistem Rekomendasi - Rekomendasi")

@push('css')
<style>
	.shadow-5 {
		box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .07), 0 10px 10px -5px rgba(0, 0, 0, .05) !important;
	}

	.lightbox {
		height: 500px;
		overflow: hidden;
		background-size: cover;
	}

	.lightbox img {
		height: 100%;
		object-fit: cover;
		object-position: center;
	}

	.gallery img {
		border: 1px solid rgba(0, 0, 0, 0.125);
		border-radius: 0.25rem;
		cursor: zoom-in;
	}

	.gallery .lightbox img:hover {
		transform: scale(2, 2)
	}

	.gallery .thumbnail.active img {
		border-bottom: 2px solid orange;
	}

	#info {
		min-height: 400px;
	}

	.list-menu {
		font-size: 1.1em;
	}

	.list-menu span {
		transition: all 300ms ease;
	}

	.list-menu span:hover:not(.active) {
		cursor: pointer;
	}

	.list-menu .active, .list-menu span:hover {
		color: #675af5;
		border-bottom: 2px solid #675af5;
	}

	.collapse .card, .collapsing .card {
		border: none;
	} 

	.collapsing {
		transition: none;
	}

	#map {
		min-height: 500px;
	}
</style>
@endpush

@section("content")
<div class="container mt-5">
	<div class="mb-5">
		<h1>Wisata X</h1>
	</div>
	<div class="row mb-4">
		<div class="col-md-8">
			<div class="gallery py-2 pb-4" data-mdb-zoom-effect="true" data-mdb-auto-height="true" >
				<div class="row shadow-5">
					<div class="col-12 mb-1">
						<div class="lightbox" id="lightbox">
							<img
								src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
								alt="Gallery image 1"
								class="gallery-main-img active w-100"
							/>
						</div>
					</div>
					<div class="col-3 my-2 thumbnail active">
						<img
							src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
							alt="Gallery image 1"
							class="active w-100"
						/>
					</div>
					<div class="col-3 my-2 thumbnail">
						<img
							src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
							alt="Gallery image 2"
							class="w-100"
						/>
					</div>
					<div class="col-3 my-2 thumbnail">
						<img
							src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
							alt="Gallery image 3"
							class="w-100"
						/>
					</div>
					<div class="col-3 my-2 thumbnail">
						<img
							src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
							alt="Gallery image 4"
							class="w-100"
						/>
					</div>
				</div>
			</div>

			<div id="info" class="my-4 gx-5">
				<div class="row justify-content-center fw-bolder list-menu mb-2">
					<div class="col text-end">
						<span class="active" data-collapse="deskripsi">Deskripsi</span>
					</div>
					<div class="col" >
						<span class="" data-collapse="lokasi">Lokasi</span>
					</div>
				</div>

				<div class="collapse collapse-horizontal show" id="deskripsi">
					<div class="card card-body">
						<div class="d-flex text-warning mb-4 rating-place" style="font-size: 2em">
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum explicabo, qui dicta saepe iusto quos cupiditate dolore magnam enim facilis corrupti at atque omnis esse inventore! Fuga enim velit quia!</p>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum explicabo, qui dicta saepe iusto quos cupiditate dolore magnam enim facilis corrupti at atque omnis esse inventore! Fuga enim velit quia!</p>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum explicabo, qui dicta saepe iusto quos cupiditate dolore magnam enim facilis corrupti at atque omnis esse inventore! Fuga enim velit quia!</p>
					</div>
				</div>
				<div class="collapse collapse-horizontal" id="lokasi">
					<div class="card card-body">
						<div class="card mb-4" id="map">
						</div>
						
					</div>
				</div>
			</div>

			<div class="my-4">
				<div class="form-row">
					<div class="col">
						<h5>BERI ULASAN</h5>
						<div class="d-flex text-warning mb-4 rating" style="font-size: 2em">
							<div class="bi-star"></div>
							<div class="bi-star"></div>
							<div class="bi-star"></div>
							<div class="bi-star"></div>
							<div class="bi-star"></div>
						</div>
						<div class="form-group mb-4">
							<textarea class="form-control" rows="10" style="width: 100%"></textarea>
						</div>
						<div class="form-group"><input class="btn btn-primary" type="submit" value="Kirim"></div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-4 py-2">
			<div class="card shadow-5">
				<div class="card-body">
					<ul>
						<li>Detail 1</li>
						<li>Detail 2</li>
						<li>Detail 3</li>
						<li>Detail 4</li>
						<li>Detail 5</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="my-4 py-2 font-weight-bold">
		<h5>WISATA TERKAIT</h5>
	</div>
	<div class="row gx-4 gx-lg-5 row-cols-3 row-cols-md-4 row-cols-xl-3 justify-content-center">
		<div class="col mb-5">
			<div class="card h-100">
				<!-- Product image-->
				<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
				<!-- Product details-->
				<div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<!-- Product name-->
						<h5 class="fw-bolder">Wisata 1</h5>
						<!-- Product reviews-->
						<div class="d-flex justify-content-center small text-warning mb-2">
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
						</div>
						<!-- Product price-->
					</div>
					<div class="small text-muted">
						Detail Product
						<p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto cum accusamus, temporibus aliquid quam est repellendus id eius quibusdam, eaque aspernatur recusandae voluptas. Et reprehenderit, officiis accusantium earum alias iusto?</p>
					</div>
				</div>
				<!-- Product actions-->
				<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
					<div class="text-center"><a class="btn btn-primary mt-auto" href="{{ route('detail-wisata') }}">Detail</a></div>
				</div>
			</div>
		</div>
		<div class="col mb-5">
			<div class="card h-100">
				<!-- Product image-->
				<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
				<!-- Product details-->
				<div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<!-- Product name-->
						<h5 class="fw-bolder">Wisata 2</h5>
						<!-- Product reviews-->
						<div class="d-flex justify-content-center small text-warning mb-2">
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
						</div>
						<!-- Product price-->
					</div>
					<div class="small text-muted">
						Detail Product
						<p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto cum accusamus, temporibus aliquid quam est repellendus id eius quibusdam, eaque aspernatur recusandae voluptas. Et reprehenderit, officiis accusantium earum alias iusto?</p>
					</div>
				</div>
				<!-- Product actions-->
				<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
					<div class="text-center"><a class="btn btn-primary mt-auto" href="{{ route('detail-wisata') }}">Detail</a></div>
				</div>
			</div>
		</div>
		<div class="col mb-5">
			<div class="card h-100">
				<!-- Product image-->
				<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
				<!-- Product details-->
				<div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<!-- Product name-->
						<h5 class="fw-bolder">Wisata 3</h5>
						<!-- Product reviews-->
						<div class="d-flex justify-content-center small text-warning mb-2">
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
							<div class="bi-star-fill"></div>
						</div>
						<!-- Product price-->
					</div>
					<div class="small text-muted">
						Detail Product
						<p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto cum accusamus, temporibus aliquid quam est repellendus id eius quibusdam, eaque aspernatur recusandae voluptas. Et reprehenderit, officiis accusantium earum alias iusto?</p>
					</div>
				</div>
				<!-- Product actions-->
				<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
					<div class="text-center"><a class="btn btn-primary mt-auto" href="{{ route('detail-wisata') }}">Detail</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.6.1/jquery.zoom.min.js"></script>

<script>
	const map = L.map('map', {doubleClickZoom: false}).setView([0.7893, 113.9213], 4);
	$('.lightbox').zoom({
    	magnify: $('.lightbox img').attr('src')
  	});

	$('.thumbnail').on('click', function () {
		let clicked = $(this);
		console.log(clicked);
		let newSelection = clicked.find('img').attr('src');
		console.log(newSelection);
		let img = $('.gallery-main-img').attr("src", newSelection);
		clicked.parent().find('.thumbnail').removeClass('active');
		clicked.addClass('active');
		$('.gallery-main-img').empty().append(img.hide().fadeIn('slow'));
		$('.lightbox').trigger('zoom.destroy');
		$('.lightbox').zoom();
	});

	$('.list-menu span').click(function() {
		if(!$(this).hasClass("active")) {
			let menu = $(this).data('collapse');
			let active = $('.list-menu .active');
			active.removeClass('active');
			$(this).addClass('active');
			$('#' + active.data('collapse')).fadeOut('fast', function() {
				$('#' + menu).fadeIn('slow');
				if(menu == "lokasi") {
					L.control.locate({
						icon: "fa fa-map-marker",
						keepCurrentZoomLevel: true
					}).addTo(map).start();
					map.invalidateSize(true);
					L.marker([0.7893, 113.9213]).addTo(map);
			}
			});
			
		}
	});

	

	L.tileLayer(
	'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 15,
		id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'pk.eyJ1IjoibGVzdHlvMjQiLCJhIjoiY2wyeTljdWxwMTBnOTNkbzVkc3hrbHZyOCJ9.6ln84V1h8RpNAxOsqRj9Lw'
	}).addTo(map);

	const myCollapsible = document.getElementById('lokasi')
	myCollapsible.addEventListener('hidden.bs.collapse', event => {
		console.log('akwoakow');
		
	})
	// $('#lokasi').on('show.bs.collapse', function (e) {	
	// 	console.log('akwoakow');
	// 	map.invalidateSize(true);
	// })
</script>

@endpush