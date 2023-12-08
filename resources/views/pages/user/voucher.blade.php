<x-userLayout>
    <main class="pattern_2">
		<div class="hero_single inner_pages background-image" data-background="url({{ asset('img/header.png') }})">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Voucher Kamu</h1>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="frame white"></div>
        </div>

		<div class="container margin_60_40">
		    <div class="row justify-content-center">
				@foreach ($collection as $item )
		        <div class="col-lg-4">
		        	<div class="box_booking_2">
		                <div class="head">
		                    <div class="title">
		                    <h3>Del Cafe</h3>
		                    Institut Teknologi Del 
		                </div>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<div id="confirm">
								@if($item->status == 'Sudah Digunakan')
									{!! DNS2D::getBarcodeHTML("Voucher Sudah Digunakan", 'QRCODE') !!}
								@else
									{!! DNS2D::getBarcodeHTML("$item->barcode", 'QRCODE') !!}
								@endif
								<h5><br>Rp. {{ $item->price }}</h5>
								<p>Vocuher {{ $item->status }}</p>
							</div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>
				@endforeach
		    </div>
		</div>
		
	</main>

</x-userLayout>