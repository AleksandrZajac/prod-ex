<section>

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" class="register-form outer-top-xs" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" class="register-form outer-top-xs" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="form-group">
            <x-input-label class="info-title" for="name" :value="__('Name')" />
            <x-text-input class="form-control unicase-form-control text-input" id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="form-group">
            <x-input-label class="info-title" for="phone" :value="__('Phone Number')" />
            <x-text-input class="form-control unicase-form-control text-input" id="phone" name="phone" type="text" :value="old('phone', $user->phone)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div class="form-group">
            <x-input-label class="info-title" for="email" :value="__('Email')" />
            <x-text-input class="form-control unicase-form-control text-input" id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="btn-upper btn btn-primary checkout-page-button">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
