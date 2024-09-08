<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')">
    </div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Lara<span class="text-black">Gigs</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find or post Laravel gigs
        </p>
        <div>
            @auth
                <a href="{{ route('listings.create') }}"
                    class="inline-block bg-white rounded-xl py-2 px-4 mt-2 uppercase font-medium text-black hover:bg-black hover:text-white">
                    Post a Gig to find a developer
                </a>
            @else
                <a href="{{ route('auth.signup') }}"
                    class="inline-block bg-white rounded-xl py-2 px-4 mt-2 uppercase font-medium text-black hover:bg-black hover:text-white">
                    Sign Up to List a Gig
                </a>
            @endauth
        </div>
    </div>
</section>
