<!DOCTYPE html>
<html lang="en">
@include('theme.auth.head')
<body>
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    
    <section class=" fxt-template-layout8" data-bg-image="{{ asset('img/logoo.jpeg') }}">
        {{ $slot }}
    </section>

    @include('theme.auth.js')
    
</body>
</html>