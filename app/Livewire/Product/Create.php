<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $title;
    public $desc;
    public $price;
    public $image;
    public function create(){
        $this->validate([
            "title"=> "required|min:4",
            "desc"=> "required|max:100",
            "price"=> "required|numeric",
            "image"=> "image|max:1024",
        ]);
        $img=uniqid().'.'.$this->image->getClientOriginalExtension();
        $newimg=$this->image->storeAs('storage/posts',name:$img);
        $product=[
            "title"=> $this->title,
            "desc"=> $this->desc,
            "price"=> $this->price,
            "image"=> $newimg,
            ];
            Product::create($product);
            return redirect()->route("posts");
    }
    public function render()
    {
        return view('livewire.product.create');
    }
}
