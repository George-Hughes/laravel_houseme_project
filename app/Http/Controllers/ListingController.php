<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;

class ListingController extends Controller
{
    // View Index page
    public function index(Request $request)
    {
        $allCategory = Category::all();
        $listings = Listing::latest()->filter(request(['search','category']))->paginate(6);
        return view('main.index', compact('listings', 'allCategory'));
    }
    

    // View create page
    public function create()
    {
        $allCategory = Category::all();
        return view('main.create', compact('allCategory'));
    }
    

    // Store data in database
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required | integer',
            'location' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }
        
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Created Successfully');
    }
    

    // Show single page 
    public function show(Listing $listing)
    {
        $allUsers = User::all();
        $allCategory = Category::all();
        $relatedListings = Listing::where('category','=', $listing->category)->latest()->take(4)->get();
        
        return view('/main.show', compact('listing', 'relatedListings', 'allCategory', 'allUsers'));
    }
    

    // Edit listing
    public function edit(Listing $listing)
    {
        // Make sure logged in user is owner
         
        
        $allCategory = Category::all();
        return view('/main.edit', compact('listing','allCategory'));
    }
    
    
    // Update previous listing
    public function update(Request $request, Listing $listing)
    {
        // Make sure logged in user is owner
        if($listing->user_id !== auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required | integer',
            'location' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Updated Successfully');
    }
    

    // Manage Listings
    public function manage(){
        $bookings = Booking::all();
        $listings = auth()->user()->listings()->get();
       return view('main.manage', compact('listings','bookings'));
    }
    
    
    // Delete listings
    public function destroy(Listing $listing)
    {
        $listing->delete();
        
        return back()->with('message', 'Deleted Successfully');
    }
}