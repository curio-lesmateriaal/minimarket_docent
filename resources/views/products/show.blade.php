<x-layouts.app :title="__('Product bekijken')">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold">{{ $product->name }}</h1>
        <div class="space-x-2">
            <a href="{{ route('products.edit', $product) }}" class="px-3 py-2 bg-neutral-200 rounded">Bewerk</a>
            <a href="{{ route('products.index') }}" class="px-3 py-2">Terug</a>
        </div>
    </div>

    @if (session('success'))
        <div class="mb-4 text-green-700">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-1">
            @if ($product->image_url)
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full rounded border">
            @else
                <div class="w-full aspect-video bg-neutral-100 flex items-center justify-center rounded border">
                    <span class="text-neutral-500">Geen afbeelding</span>
                </div>
            @endif
        </div>
        <div class="md:col-span-2 space-y-3">
            <div><strong>Naam:</strong> {{ $product->name }}</div>
            <div><strong>Startprijs:</strong> € {{ number_format($product->start_price, 2) }}</div>
            <div><strong>Status:</strong> {{ $product->status }}</div>
            <div>
                <strong>Verkocht aan:</strong>
                @if ($product->sold_to)
                    ID {{ $product->sold_to }}
                @else
                    <span class="text-gray-500 italic">Niet verkocht</span>
                @endif
            </div>
            <div>
                <strong>Beschrijving:</strong>
                <p class="mt-1 whitespace-pre-wrap">{{ $product->description }}</p>
            </div>
        </div>
    </div>
</x-layouts.app>

