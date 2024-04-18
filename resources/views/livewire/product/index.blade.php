<div>
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="/posts" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          @if(!Auth::user())
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
          @else
          <a href="/logout" class="text-sm font-semibold leading-6 text-gray-900">{{Auth::user()->name}} <span aria-hidden="true">&rarr;</span></a>
          @endif
        </div>
      </nav>
<div class="relative overflow-x-auto">
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
                    Image
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
                    {{$produk->image}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    {{ $products->links() }} 
</div>
