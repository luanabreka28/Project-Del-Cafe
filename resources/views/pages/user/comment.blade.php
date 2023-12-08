<x-userLayout title="Komentar"> 
    <main class="pattern_2">
        <div class="hero_single inner_pages background-image" data-background="url({{ asset('img/header.png') }})">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Kritik dan Saran</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame white"></div>
        </div>
        
	    <div class="container margin_60_40">
	        <div class="row justify-content-center">
				<div class="col-lg-8">
						<form id="atas">
						<div class="write_review">
							<h1>Tulis Kritik dan Saran</h1>
							<!-- /rating_submit -->
							<div class="form-group">
								<label>Nama: </label>
								<input class="form-control" type="text" value="{{Auth::user()->name}}" readonly>
							</div>
							<div class="form-group">
								<label>Email: </label>
								<input class="form-control" type="text" value="{{ Auth::user()->email}}" readonly>
							</div>
							<div class="form-group mb-5">
								<label>Your review</label>
								<textarea class="form-control" style="height: 280px;" name="comment" placeholder="Saran dan Kritik Kamu"></textarea>
							</div>
							{{-- <a type="submit" class="btn_1" id="bawah" onclick="handle_save('#bawah','#atas','{{ route('user.comment.store')}}','POST');">Kirim</a> --}}
							<button class="btn_1 " type="submit" id="bawah"  onclick="handle_save('#bawah','#atas','{{ route('user.comment.store')}}','POST');">Kirim</button>
						</div>
					</form>
				</div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</main>

</x-userLayout>