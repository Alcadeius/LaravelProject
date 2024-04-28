<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search;

        public function deleteproduk($id){
            $produk=Product::find($id);
            if($produk->image){
                Storage::disk('local')->delete($produk->image);
            }
            $produk->delete();
            return redirect()->route('posts');
        }
        public function render()
        {
        return view('livewire.product.index',[

            'products' => $this->search===null ? Product::first()->paginate($this->paginate) : Product::latest()->where('title','like','%'.$this->search.'%')->paginate($this->paginate)
            
        ]);
        
    }
}
