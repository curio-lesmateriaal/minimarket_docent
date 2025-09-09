<x-layouts.page>
    <h1 class="text-3xl py-4">home</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-xl shadow-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Starting Price</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Sold To</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Created At</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $product->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">$ {{ $product->start_price }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600"> {{ $product->sold_to }} </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $product->created_at }} </td>
                    <td class="px-6 py-4">
                        <span
                            class="px-3 py-1 text-xs font-semibold rounded-full @if($product->status == 'Nieuwstaat') bg-green-100 text-green-700 @else bg-red-100 text-red-700 @endif">{{ $product->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.page>
