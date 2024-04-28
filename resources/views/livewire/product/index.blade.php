<div>
    @livewire('header')
<div class="relative overflow-x-auto">
    <div class="bg-blue-400 w-full p-2">
        <select name="" wire:model.live="paginate" id="" class="w-auto">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        <a href="{{route('create')}}" class="bg-red-400 rounded-md p-1 hover:bg-red-600">Create</a>
        <input type="text" wire:model.live="search" placeholder="search" name="" class="float-end p-1" id="">
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $produk)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" wire:key="{{$produk->id}}" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$produk->id}}
                </th>
                <td class="px-6 py-4">
                    {{$produk->title}}
                </td>
                <td class="px-6 py-4">
                    {{$produk->desc}}
                </td>
                <td class="px-6 py-4">
                    ${{$produk->price}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{url("update/$produk->id")}}" class="bg-blue-400 rounded-md p-1 hover:bg-blue-500-600 text-black">Edit</a>
                    <button wire:click="deleteproduk({{$produk->id}})" class="bg-red-400 rounded-md p-1 hover:bg-red-600 text-black" >Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    {{ $products->links() }} 
</div>
