<x-authLayout title="login">
    
	
		<div class="fxt-content">
			<div class="fxt-header">
				<a class="fxt-logo"><img src="{{asset('img/logo.png')}}"  width="250" alt="Logo"></a>
			<div class="fxt-form">
				<h3>Login Admin!</h3>
				<form class="auth-login-form mt-2" id="login-form">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="text" id="username" class="form-control" name="username" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input id="password" type="password" class="form-control" name="password" placeholder="********">
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<button type="submit" class="fxt-btn-fill" id="login-button" onclick="authAdmin('#login-button','#login-form','{{route('admin.auth.login')}}','Login');">Log in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	
</x-authLayout>