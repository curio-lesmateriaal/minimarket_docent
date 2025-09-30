<x-layouts.app :title="__('Product bewerken')">
    <h1 class="text-2xl font-bold mb-4">{{ __('Product bewerken') }}</h1>

    @if (session('success'))
        <div class="mb-4 text-green-700">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-6">
        @csrf
        @method('PUT')
        @include('products._form', ['product' => $product])

        <div class="flex items-center gap-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Bijwerken</button>
            <a href="{{ route('products.show', $product) }}" class="px-4 py-2">Annuleer</a>
        </div>
    </form>

    <form method="POST" action="{{ route('products.destroy', $product) }}" class="mt-6" onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded">Verwijderen</button>
    </form>
</x-layouts.app>

