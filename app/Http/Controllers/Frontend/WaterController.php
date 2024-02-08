<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Purifier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WaterController extends Controller
{
    public function index()
    {
        $waters = Purifier::orderBy('id')->get();

        return view('sidebar.water', compact('waters'));
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

        Purifier::Create([

            'image' => $imagePath,
        ]);

        return redirect('place');
    }
}
