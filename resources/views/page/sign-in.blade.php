<x-main-layout>
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Sign in</h4>
                        <p class="">Hello, Welcome to your account.</p>
                        <div class="social-sign-in outer-top-xs">
                            <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with
                                Facebook</a>
                            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                        </div>
                        <x-guest-layout>
                            <x-auth-card>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="email" :value="__('Email Address *')" />
                                        <x-text-input id="email" class="form-control unicase-form-control text-input" type="email"
                                                      name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="password" :value="__('Password *')" />

                                        <x-text-input id="password" class="form-control unicase-form-control text-input" type="password"
                                                      name="password" required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="radio outer-xs">
                                        <label>
                                            <input type="radio" name="remember" id="optionsRadios2" value="1">
                                            <span>{{ __('Remember me!') }}</span>
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a class="forgot-password pull-right" href="{{ route('password.request') }}">
                                                {{ __('Forgot your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="btn-upper btn btn-primary checkout-page-button">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </x-auth-card>
                        </x-guest-layout>
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">Create a new account</h4>
                        <p class="text title-tag-line">Create your new account.</p>

                        <x-guest-layout>
                            <x-auth-card>
                                <form class="register-form outer-top-xs" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Email Address -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="email" :value="__('Email Address *')" />
                                        <x-text-input id="email" class="form-control unicase-form-control text-input" type="email"
                                                      name="email" :value="old('email')" required />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                <!-- Name -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="name" :value="__('Name *')" />
                                        <x-text-input id="name" class="form-control unicase-form-control text-input" type="text" name="name" :value="old('name')" required autofocus />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <div class="form-group">
                                        <x-input-label class="info-title" for="phone" class="form-label" :value="__('Phone Number *')" />
                                        <x-text-input id="phone" class="form-control unicase-form-control text-input" type="text" name="phone" placeholder="+70000000000" :value="old('phone')" required autofocus />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="password" :value="__('Password *')" />

                                        <x-text-input id="password" class="form-control unicase-form-control text-input"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group">
                                        <x-input-label class="info-title" for="password_confirmation" :value="__('Confirm Password *')" />

                                        <x-text-input id="password_confirmation" class="form-control unicase-form-control text-input"
                                                      type="password"
                                                      name="password_confirmation" required />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="btn-upper btn btn-primary checkout-page-button">
                                            {{ __('Sign up') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </x-auth-card>
                        </x-guest-layout>

                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp logo-slider-inner"></div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
</x-main-layout>
