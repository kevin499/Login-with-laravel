<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />

        <div class="login" >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-3xl font-black mb-4">Ingresá tu email</h1>

            <div class=" sm:p-10 bg-white max-w-xl rounded">
                <div class="mb-4 relative">
                    <input id="email" placeholder=" " class="input border border-gray-400 appearance-none rounded-lg w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-600 focus:outline-none active:outline-none active:border-gray-600" type="email" name="email" value="{{old('email')}}" required>
                    <label for="email" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Email</label>
                </div>
                <div class="mb-4 relative">
                    <input  id="password" placeholder=" " class="input border border-gray-400 appearance-none rounded-lg w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-600 focus:outline-none active:outline-none active:border-gray-600" type="password" name="password" required autocomplete="current-password" >
                    <label for="password" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">{{ __('Contraseña') }}</label>
                </div>
                <button class="w-full bg-green-400 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg">{{ __('Continuar') }}</button>
            </div>


            <p class="mt-8 text-center"> {{ __('¿No tenés una cuenta?') }}<a class="px-1 text-blue-500 underline" href="{{ route("register") }}">{{ __('Registrate') }}</a></p>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Me olvide mi contraseña') }}
                    </a>
            @endif
            </div>
        </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>


{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}


{{--                <x-jet-button class="ml-4 bg-gradient-to-tr from-green-500 to-green-400">--}}
{{--                    {{ __('Login') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
