<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-auth-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ trans('global.auth.just_let_us_know_your_email_address') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="trans('global.auth.email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ trans('global.auth.email_password_reset_link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
