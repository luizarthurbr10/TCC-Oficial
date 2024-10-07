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

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <div id="login">
                <div class="row alinhamentoDiv" id="login__titulo">
                    <div class="col-9 mb-2 ms-5">
                        <h5>Escolha uma Opção de Login</h5>
                    </div>
                    <div class="col">
                        <a href="/">
                            <img src="assets/img/icons/x.svg" width="50px" alt="">
                        </a>
                    </div>
                </div>
                <div>
                    <button class="alinhamentoDiv" id="login__google">
                        <img src="assets/img/icons/google.png" width="30px" alt="">
                        <label for="">Entrar com o Google</label>
                    </button>
                </div>
                <div class="alinhamentoDiv mt-2">
                    <label class="login__texto">Ou</label>
                </div>
                <div class="alinhamentoDiv" id="login__conteudo">
                    <p class="login__texto">Continuar com E-mail e Senha:</p>
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input placeholder="Digite seu E-mail..." id="email" class="block mt-1 w-full" type="email"
                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-input placeholder="Digite sua Senha..." id="password" class="block mt-1 w-full" type="password"
                        name="password" required autocomplete="current-password" />
                </div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        style="color: #fbbc05; font-size: 15px" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif

                {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar senha') }}</span>
                </label>
            </div> --}}

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4">
                        {{ __('Entrar') }}
                    </x-button>
                </div>
            </form>
            <div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                style="color: #fbbc05; font-size: 15px" href="{{ route('register') }}">
                    {{ __('Não tem uma conta? Cadastre-se') }}
                </a>
            </div>
        </x-authentication-card>
    </x-guest-layout>
@endsection
