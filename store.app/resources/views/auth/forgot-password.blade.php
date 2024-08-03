{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

 --}}


 @extends('hometemplate')
 @section('logincontent')


	<!-- Start Banner Area -->
	{{-- <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				{{-- <div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{ asset ('homeassets/img/login.jpg ') }}" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="/register">Create an Account</a>
						</div>
					</div>
				</div> --}}
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Reset Your Password</h3>
                        
                     
						<form method="POST" action="{{ route('password.email') }}" class="row login_form" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession



                            <div class="col-md-12 form-group"  value="{{ __('Email') }}">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'":value="old('email')" required autofocus autocomplete="username" >
							</div>
							{{-- <div class="block">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="col-md-12 form-group" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div> --}}
                            {{-- <div class="col-md-12 form-group">
                                <x-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-button>
                            </div> --}}
                            <div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">     {{ __('  Reset Password') }}</button>
								{{-- <a href="#">Forgot Password?</a> --}}
							</div>
							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

@endsection 
