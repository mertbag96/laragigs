<x-layout>
    <x-card class="max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p class="mb-4">
                Post a gig to find a developer
            </p>
        </header>

        <form method="POST" action="{{ route('listings.store') }}" enctype="multipart/form-data" autocomplete="off">
            @csrf

            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">
                    Company Name
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('company') border-laravel @enderror"
                    name="company" placeholder="Example: Sonic Software Inc." value="{{ old('company') }}" required />
                @error('company')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">
                    Job Title
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('title') border-laravel @enderror"
                    name="title" placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}"
                    required />
                @error('title')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">
                    Job Location
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('location') border-laravel @enderror"
                    name="location" placeholder="Example: Remote, Boston MA, etc." value="{{ old('location') }}"
                    required />
                @error('location')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Contact Email
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('email') border-laravel @enderror"
                    name="email" placeholder="Example: example@mail.com" value="{{ old('email') }}" required />
                @error('email')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('website') border-laravel @enderror"
                    name="website" placeholder="Example: https://blartizetechnologies.com" value="{{ old('website') }}"
                    required />
                @error('website')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                    <span class="text-laravel">*</span>
                </label>
                <input type="text"
                    class="border border-gray-200 rounded p-2 w-full @error('tags') border-laravel @enderror"
                    name="tags" placeholder="Example: Laravel, Backend, Postgres, etc." value="{{ old('tags') }}"
                    required />
                @error('tags')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                    <span class="text-laravel">*</span>
                </label>
                <input type="file"
                    class="border border-gray-200 rounded p-2 w-full @error('logo') border-laravel @enderror"
                    name="logo" accept=".png, .jpg, .jpeg" required />
                @error('logo')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                    <span class="text-laravel">*</span>
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full @error('description') border-laravel @enderror"
                    name="description" rows="5" maxlength="240" placeholder="Include tasks, requirements, salary, etc." required
                    style="resize: none;">{{ old('company') }}</textarea>
                @error('description')
                    <p class="mt-1 mb-0 pl-2 font-medium text-xs text-laravel">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Gig
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
