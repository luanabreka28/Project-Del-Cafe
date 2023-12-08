<x-authLayout title="register">
    
		<div class="fxt-content">
			<div class="fxt-header">
				<a class="fxt-logo"><img src="{{asset('img/logo.png')}}"  width="250" alt="Logo"></a>
			</div>
			<div class="fxt-form">
				<h3>Register</h3>
				<form class="auth-register-form mt-2" id="register-form">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="text" id="name" class="form-control " name="name" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="text" id="username" class="form-control " name="username" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="email" id="email" class="form-control" name="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<input type="text" id="nohp" class="form-control " name="phone" placeholder="NoHp">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input id="password" type="password" class="form-control" name="password" placeholder="********" >
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<button type="submit" class="fxt-btn-fill" id="register-button" onclick="auth('#register-button','#register-form','{{route('user.auth.register')}}','Register');">Register</button>
						</div>
					</div>
				</form>
			</div>
			<div class="fxt-footer">
				<div class="fxt-transformY-50 fxt-transition-delay-9">
					<p>Have an account?<a href="{{ route('user.auth.index') }}" class="switcher-text2 inline-text">Log in</a></p>
				</div>
			</div>
		</div>
		
</x-authLayout>