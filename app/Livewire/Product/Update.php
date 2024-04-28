<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $id;
    public $title;
    public $desc;
    public $price;
    public $image;
    public $imgold;

    public function mount($id){
        $produk=Product::find($id);
        $this->title = $produk->title;
        $this->desc = $produk->desc;
        $this->price = $produk->price;
        $this->imgold = $produk->image;
    }
    public function update(){
        if($this->id){
            $produk=Product::find($this->id);
        $this->validate([
            "title"=> "required|min:4",
            "desc"=> "required|max:100",
            "price"=> "required|numeric",
            "image"=> "image|max:1024",
        ]);
            if($this->image){
                Storage::disk('local')->delete($produk->image);
                $img=uniqid().'.'.$this->image->getClientOriginalExtension();
                $this->image->storeAs('storage',name:$img);
                $this->image= $img;
            }
            else{
                $this->image = $produk->image;
            }
            $produk->update([
                'title'=> $this->title,
                'desc'=> $this->desc,
                'price'=> $this->price,
                'image'=> $this->image,
            ]);
            return redirect()->route("posts");
        }
    }
    public function render()
    {
        return view('livewire.product.update');
    }
}
