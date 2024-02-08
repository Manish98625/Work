<?php

namespace  App\Http\Controllers\Frontend;


use App\Models\Place;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $WaterPurifiers = Place::all();

        return view('place.place', compact('WaterPurifiers'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([

            'name' => 'required|string',

        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Specify the path within the public storage directory
            $image->storeAs('uploads', $imageName, 'public');

            // The $imagePath will now contain the path relative to the 'public' disk
            $imagePath = 'uploads/' . $imageName;
        }

        Place::Create([

            'image' => $imagePath,
        ]);

        return redirect('place');
    }
}
