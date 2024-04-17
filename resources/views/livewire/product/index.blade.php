<div class="mt-5">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
