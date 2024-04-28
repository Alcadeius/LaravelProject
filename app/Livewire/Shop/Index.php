<?php

namespace App\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    public function mount(){
        $this->search = request()->query("search",$this->search);
    }
    public function render()
    {
        return view('livewire.shop.index',[
            'products'=>$this->search===null ? Product::latest()->paginate(8) : Product::latest()->where('title','like','%'.$this->search.'%')->paginate(8),
        ]);
    }
}
