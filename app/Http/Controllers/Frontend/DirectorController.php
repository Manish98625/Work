<?php

namespace App\Http\Controllers\frontend;


use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DirectorController extends Controller
{
     public function data()
    {
        $directors = Director::all();


// dd($products);
        return view('frontend.elements', compact('directors', ));
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

        Director::Create([

            'image' => $imagePath,
        ]);

        return redirect('data');

    }
}
