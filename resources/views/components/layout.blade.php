<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Gigs</title>
</head>

<body class="mb-48">

    <!-- Nav -->
    <nav class="flex justify-between items-center mb-4">
        <a href="{{ route('index') }}">
            <img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" />
        </a>

        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold text-uppercase">
                        Welcome, {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="{{ route('listings.index') }}" class="font-medium hover:text-laravel">
                        <i class="fa-solid fa-gear"></i>
                        Manage Listings
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('auth.logout') }}" autocomplete="off">
                        @csrf
                        <button type="submit" class="font-medium hover:text-laravel">
                            <i class="fa-solid fa-door-closed"></i>
                            Sign Out
                        </button>
                    </form>
                </li>
            @else
                <li>

                    <a href="{{ route('auth.signup') }}" class="font-medium hover:text-laravel">
                        <i class="fa-solid fa-user-plus"></i>
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.signin') }}" class="font-medium hover:text-laravel">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Sign In
                    </a>
                </li>
            @endauth
        </ul>
    </nav>

    <!-- Main -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer
        class="fixed z-10 bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 md:justify-center">
        <p class="ml-2">
            Copyright &copy; {{ date('Y') }}, All Rights Reserved.
        </p>

        <a href="{{ route('listings.create') }}" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">
            Post Gig
        </a>
    </footer>

    <x-flash-message />

</body>

</html>
