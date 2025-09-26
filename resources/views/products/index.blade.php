<x-layouts.app :title="__('Producten')">
    <h1 class="text-2xl font-bold mb-4">{{ __('Producten') }}</h1>
    <table class="w-full table-auto border-collapse border border-neutral-200 dark:border-neutral-700">
        <thead>
            <tr class="bg-neutral100 text-left dark:bg-neutral-800">
                <th class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">ID</th>
                <th class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">Naam</th>
                <th class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">Minimale biedingsprijs</th>
                <th class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">Verkocht aan</th>

                <th class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="hover:bg-neutral-100 dark:hover:bg-neutral-700">
                    <td class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">{{ $product->id }}</td>
                    <td class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">{{ $product->name }}</td>
                    <td class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">€ {{ number_format($product->start_price, 2) }}</td>
                    <td class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">
                        @if ($product->sold_to)
                            {{ \App\Models\User::find($product->sold_to)->name }}
                        @else
                            <span class="text-gray-500 italic">Niet verkocht</span>
                        @endif
                    </td>
                    <td class="border border-neutral-300 px-4 py-2 dark:border-neutral-600">
                        <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">Bekijk</a>
                        <a href="{{ route('products.edit', $product) }}" class="text-green-600 hover:underline ms-2">Bewerk</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{-- pagination --}}
        <tfoot>
            <tr>
                <td colspan="5" class="border-t border-neutral-300 px-4 py-2 dark:border-neutral-600">
                    {{ $products->links() }}
                </td>
            </tr>
        </tfoot>
    </table>
</x-layouts.app>
