@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block object-cover"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="Logo"
            @if ($listing->company === 'Computer Cool') style="object-fit: cover;" @endif />
        <!-- Condition above was added for a personal purpose. You can ignore it. -->
        <div>
            <h3 class="text-2xl">
                <a href="{{ route('listings.show', $listing->id) }}">
                    {{ $listing->title }}
                </a>
            </h3>

            <div class="text-xl font-bold mb-4">
                {{ $listing->company }}
            </div>

            <x-listing-tags :tags="$listing->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
