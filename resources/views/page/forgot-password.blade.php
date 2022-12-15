<x-main-layout>
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Forgot password</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-12 col-sm-12 sign-in">

                        <x-guest-layout>
                            <x-auth-card>

                                <div class="form-group">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form class="register-form outer-top-xs" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->

                                    <div class="form-group">
                                        <x-input-label class="info-title" for="email" :value="__('Email Address *')" />
                                        <x-text-input id="email" class="form-control unicase-form-control text-input" type="email"
                                                      name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="form-group">
                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button class="btn-upper btn btn-primary checkout-page-button">
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </form>
                            </x-auth-card>
                        </x-guest-layout>

                    </div>

                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp logo-slider-inner"></div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
</x-main-layout>
