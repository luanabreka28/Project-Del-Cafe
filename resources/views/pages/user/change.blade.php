<x-userLayout>

    <main>
        <div class="hero_single inner_pages background-image" data-background="url({{ asset('img/header.png') }})">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Menu Alternatif</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame white"></div>
        </div>

    	<div class="call_section lazy pattern_2" data-bg="url(img/bg_call_section.jpg)" data-was-processed="true" style="">
		    <div class="container clearfix">
		    	<div class="row justify-content-center">
					@php
						$items = \App\Models\ListChange::where('id_users',Auth::user()->id)->whereDate('created_at',date('Y-m-d'))->count();
					@endphp
					@foreach ($collection as $item)
						<div class="col-lg-6 col-md-6 text-center mt-3">
							<form id="simpan">
								<div class="box_1" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
									<h2>Menu Alternatif<span>{{ $item->alt->name_food }} <br> {{ $item->alt->food->day }} | {{ $item->alt->food->date }}</span></h2>
									<p>{{ $item->description }}</p>
									<input type="text" name="food" hidden value="{{ $item->description }}">
									<input type="text" name="list_food" hidden value="{{ $item->id_list_food }}">
									@if($items>=1)
									<p id="kirim" class="menu-link px-3">anda sudah memesan</p></div>										
									@else
									<a href="javascript:;" id="kirim"  onclick="handle_save('#kirim','#simpan','{{route('user.change.change',$item->id)}}','POST');" class="menu-link px-3">Pilih Menu</a></div>										
									@endif		
							</form>
						</div>
					@endforeach
			    </div>
    		</div>
    	</div>
        
    </main>



</x-userLayout>