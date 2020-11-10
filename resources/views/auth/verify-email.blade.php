<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-auth-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ trans('global.auth.thanks_for_signing_up') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ trans('global.auth.a_new_verification_link') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ trans('global.auth.resend_verification_email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ trans('global.auth.logout') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
