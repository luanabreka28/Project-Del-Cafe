<!DOCTYPE html>
<html lang="en">
    
@include('theme.user.head')

<body>
    
    <div id="preloader">
		<div data-loader="circle-side"></div>
	</div>

    @include('theme.user.header')

    {{ $slot }}

    <br><br>

    @include('theme.user.footer')
    @include('theme.user.js')
    @yield('custom_js')

</body>

</html>