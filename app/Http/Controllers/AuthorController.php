<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('dashboard');
    }
    public function delete($id){
        dd($id);
        Product::where('id',$id)->delete();
        return redirect()->route('posts');
    }
}
