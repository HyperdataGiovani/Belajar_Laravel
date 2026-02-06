<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request){
        $data = new User;

    if($request->get('search')){
        $data = $data->where('username', 'LIKE', '%'. $request->get('search') .'%')
        ->orWhere('name', 'LIKE', '%'. $request->get('search') .'%')
        ->orWhere('email', 'LIKE', '%'. $request->get('search') .'%');
    }

    $data = $data->get();

        return view('home', ['title' => 'Home'], compact('data', 'request')); 
    }

    public function create(){
        return view('CRUD/create', ['title' => 'Add New User']);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10240'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $image = $request->file('image');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = '/image/photo_user/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($image));

        $data['username'] = $request->username;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['email_verified_at'] = now();
        $data['password'] = Hash::make($request->password);
        $data['remember_token'] = Str::random(10);
        $data['image'] = $filename;

        User::create($data);

        return redirect()->route('admin.index');
    }

    public function edit(Request $request, $id){
        $data = User::find($id);

        return view('CRUD/edit', ['title' => 'Edit'], compact('data'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['username'] = $request->username;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['email_verified_at'] = now();
        if($request->password){
        $data['password'] = Hash::make($request->password);
        }
        $data['remember_token'] = Str::random(10);
        $data['image'] = 

        User::whereId($id)->update($data);

        return redirect()->route('admin.index');
    }

    public function delete(Request $request, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index');
    }
}
