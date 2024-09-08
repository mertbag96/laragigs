<?php

namespace App\Http\Controllers;

use App\Http\Requests\Listing\ListingStoreRequest;
use App\Http\Requests\Listing\ListingUpdateRequest;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ListingController extends Controller
{
    /**
     * Apply the 'auth' middleware to all methods except 'index' and 'show'.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('listings.index', [
            'listings' => Listing::latest()
            ->filter(request(['tag', 'search']))
            ->simplePaginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListingStoreRequest $request): RedirectResponse
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('logos', 'public');
        }

        Listing::create(array_merge(
            $request->validated(),
            ['logo' => $logo ?? null]
        ));

        return redirect()->route('index')->with('message', 'Gig was successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing): View
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing): View
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListingUpdateRequest $request, Listing $listing): RedirectResponse
    {
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('logos', 'public');
        }

        $listing->update(array_merge(
            $request->validated(),
            ['logo' => $logo ?? null]
        ));

        return back()->with('message', 'Gig was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing): RedirectResponse
    {
        $listing->delete();

        return redirect()->route('index')->with('message', 'Gig was successfully deleted!');
    }
}
