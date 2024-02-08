<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    public function data()
    {
        $products = Products::orderBy('id')->get();
      

// dd($products);
        return view('sidebar.rawmaterials', compact('products'));
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

        Products::Create([

            'image' => $imagePath,
        ]);

        return redirect('data');
    }
}
