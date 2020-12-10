<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="auth-card w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

        <div class="auth-container">
        {{ $slot }}
        </div>
        <div class="division">
            <hr class="w-1/3">
            ó
            <hr class="w-1/3">
        </div>
        <div class="flex flex-col justify-content-center mb-4">
            <a href="{{ url('auth/google') }}" class=" text-center rounded-lg border-2 border-gray-100 p-1 my-1 mx-1 inline-block font-bold font-medium w-full flex items-center hover:bg-gray-100">
                <img class="w-10 mx-4 my-1" src="{{ asset("images/google_icon.jpg") }}" alt="Google icon">
                <span>{{ __('Ingresar con Google') }}</span>
            </a>
            <a href="{{ url('auth/facebook') }}" class="text-center rounded-lg border-2 border-gray-100 p-1 my-1 mx-1 inline-block font-bold font-medium w-full flex items-center hover:bg-gray-100">
                <img class="w-8 mx-5 my-2" src="{{ asset("images/facebook_icon.png") }}" alt="Facebook icon">
                <span>{{ __('Ingresar con Facebook') }}</span>
            </a>
        </div>
    </div>
</div>
