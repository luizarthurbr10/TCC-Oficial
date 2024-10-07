@extends('layouts.masterpage')
@section('conteudo')
    @php
        $carousel = 0;
        $navBar = 0;
        $footer = 0;
    @endphp

    <x-guest-layout>
        <x-authentication-card>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-input placeholder="Nome..." id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-input placeholder="E-mail..." id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-input placeholder="Senha..." id="password" class="block mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-input placeholder="Confirme sua Senha..." id="password_confirmation" class="block mt-1 w-full"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-3 mb-2">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    style="color: #fbbc05; font-size: 15px" href="{{ route('login') }}">
                        {{ __('Já tem um cadastro? Faça Login') }}
                    </a>
                </div>
                <x-button>
                    {{ __('Cadastrar') }}
                </x-button>
            </form>
        </x-authentication-card>
    </x-guest-layout>
@endsection
