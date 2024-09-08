<x-layout>
    <x-card class="max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Sign up
            </h2>
            <p class="mb-4">
                Create an account to post gigs
            </p>
        </header>

        <form method="POST" action="{{ route('auth.register') }}" autocomplete="off">
            @csrf

            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Name
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('name') border-laravel @enderror"
                    name="name" placeholder="Please enter your name..." value="{{ old('name') }}" required />
                @error('name')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

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

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirm Password
                    <span class="text-laravel">*</span>
                </label>
                <input type="password"
                    class="border border-gray-200 rounded p-2 w-full @error('password_confirmation') border-laravel @enderror"
                    name="password_confirmation" placeholder="Please confirm your password..." />
                @error('password_confirmation')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="{{ route('auth.signin') }}" class="text-laravel">
                        Sign In
                    </a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
