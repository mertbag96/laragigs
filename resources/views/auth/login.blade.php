<x-layout>
    <x-card class="max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Sign in
            </h2>
            <p class="mb-4">
                Sign in to post gigs
            </p>
        </header>

        <form method="POST" action="{{ route('auth.login') }}" autocomplete="off">
            @csrf

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email
                    <span class="text-laravel">*</span>
                </label>
                <input type="email"
                    class="border border-gray-200 rounded p-2 w-full @error('email') border-laravel @enderror"
                    name="email" placeholder="Please enter your email..." value="{{ old('email') }}" required />
                @error('email')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                    <span class="text-laravel">*</span>
                </label>
                <input type="password"
                    class="border border-gray-200 rounded p-2 w-full @error('password') border-laravel @enderror"
                    name="password" placeholder="Please enter your password..." required />
                @error('password')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            @error('credentials')
                <div class="mb-6">
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">
                        <i class="fa-solid fa-circle-exclamation me-1"></i>
                        {{ $message }}
                    </p>
                </div>
            @enderror

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="{{ route('auth.signup') }}" class="text-laravel">
                        Sign Up
                    </a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
