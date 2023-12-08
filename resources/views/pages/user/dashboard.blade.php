<x-userLayout title="Dashboard">

    <main>
        <div class="hero_single inner_pages background-image" data-background="url({{ asset('img/header.png') }})">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Menu Del Cafe</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame white"></div>
        </div>

        <br><br>
		<div id="carousel-home-2">
			<div class="owl-carousel owl-theme">
				@foreach ($collection as $item)
				@if($item->date>=date('Y-m-d') )
				<div class="owl-slide cover lazy" data-bg="url({{ asset('images/products/'.$item->image_product) }})">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">{{ $item->day }}<br>{{ $item->date }}</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											{{ $item->description }}
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{ route('user.home.show',$item->id) }}" role="button">Lihat Menu</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div id="icon_drag_mobile"></div>
			<div class="frame white"></div>
		</div>
		

	</main>
	@section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-userLayout>