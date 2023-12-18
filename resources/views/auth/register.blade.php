<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" style="max-width: 400px; margin: auto; padding: 20px; background-color: white; border-radius: 45px; box-shadow: 4px 7px 9px rgba(0, 0, 0, 0.615);">
        @csrf

        <!-- Name -->
        <div>
            <center><b><h1 style="color: #16a085; font-size:30px">REGISTRO DE USUARIO</h1></b></center> <hr style="margin-bottom: 30px;">
            <x-input-label style="font-size: 20px; color:#16a085" for="name" :value="__('Nombre')" />
            <x-text-input style="margin-bottom: 20px" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label style="font-size: 20px; color:#16a085" for="email" :value="__('Correo')" />
            <x-text-input style="margin-bottom: 20px" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label style="font-size: 20px; color:#16a085" for="address" :value="__('Dirección')" />
            <x-text-input style="margin-bottom: 20px" id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label style="font-size: 20px; color:#16a085" for="phone" :value="__('Número de teléfono')" />
            <x-text-input style="margin-bottom: 20px" id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label style="font-size: 20px; color:#16a085" for="dni" :value="__('Número de DNI')" />
            <x-text-input style="margin-bottom: 20px" id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
            <x-input-error :messages="$errors->get('dni')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label style="font-size: 20px; color:#16a085" for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label style="font-size: 15px; color:#16a085" for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya tienes una cuenta?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: #16a085">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
