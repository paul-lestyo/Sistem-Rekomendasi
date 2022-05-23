@extends("layouts.app")
@section('title', "Sistem Rekomendasi - Rekomendasi")

@section("content")
<div class="container mt-5">
	<div class="mb-5">
		<h1>Daftar Tempat Wisata yang Direkomendasikan</h1>
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