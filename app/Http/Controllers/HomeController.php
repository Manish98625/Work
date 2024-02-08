<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function home(){
        return view('home.form');
    }
  

    public function store(Request $request){
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

      
          Home::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'national' => $request->input('national'),
            'phonenumber'=> $request->input('phonenumber'),
            'address'=> $request->input('address'),
            'gender' => $request->input('gender'),
            'skill' => implode(',', $request->input('skill')),
            'image' => $imagePath,
        ]);

        return redirect('index')->with('success', 'Record created successfully');
    }

    public function index(){
        $data = Home:: all();

        return view ('home.index', compact('data'));
    }


    public function delete($id){
        home::destroy($id);

           return redirect('index');
    }

    public function edit($id){
        $data = home::find($id);

           return view('home.edit',compact('data'));
    }

  public function update(Request $request, $id){

    $data = Home::findOrFail($id);
    $data->name = $request->input('name');
    $data->email = $request->input('email');
    $data->date = $request->input('date');
    $data->national = $request->input('national');
    $data->phonenumber = $request->input('phonenumber');
    $data->address = $request->input('address');
    $data->gender = $request->input('gender');
    $data->skill = implode(',', $request->input('skill'));

    // Handle image upload if provided in the request
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads/', 'public');
        $data->image = $imagePath;
    }

    // Save the updated data
    $data->save();

    return redirect('index');
  }


}




