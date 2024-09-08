@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="fixed z-10 top-2 left-1/2 transform -translate-x-1/2 px-8 py-3 bg-white shadow-md rounded border border-gray-300 font-medium text-sm text-laravel">
        <p class="m-0">
            {{ session('message') }}
        </p>
    </div>
@endif
