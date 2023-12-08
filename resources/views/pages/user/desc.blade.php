<x-userLayout>

    <main>
        <div class="hero_single inner_pages background-image" data-background="url({{ asset('img/header.png') }})">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Menu Harian</h1>
                            <p>Menu harian yang terdapat di Del Cafe</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame white"></div>
        </div>

        <div class="pattern_2">
            <div class="container margin_60_40" data-cues="slideInUp">
                @foreach ($collection as $item)
                <div class="main_title center" data-cue="slideInUp">
                    <span><em></em></span>
                    <h2>{{ $item->name_food }}</h2>
                    <p>{{ $item->start }} ~ {{ $item->end }}</p>
                </div>
                <div class="banner lazy" data-bg="url({{ asset('images/makanan_background/'.$item->image) }})">
                    <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div>
                            <small>{{ $item->food->day }} | {{ $item->food->date }}</small>
                            <h3> Menu {{ $item->name_food }} Rp. {{ $item->price }}  only</h3>
                            <p>{{ $item->description }}</p>
                            <a href="{{ route('user.change.show',$item->id) }}" class="btn_1">Alternatif Menu</a>
                            <br>
                        </div>
                        <figure class="d-none d-lg-block"><img src="{{ asset('images/makanan/'.$item->image) }}" alt="" width="200" height="200" class="img-fluid"></figure>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </main>

    

</x-userLayout>