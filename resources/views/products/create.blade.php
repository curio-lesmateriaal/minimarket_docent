<x-layouts.app :title="__('Product aanmaken')">
    <h1 class="text-2xl font-bold mb-4">{{ __('Product aanmaken') }}</h1>

    @if (session('success'))
        <div class="mb-4 text-green-700">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('products.store') }}" class="space-y-6">
        @csrf
        @include('products._form')

        <div class="flex items-center gap-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Opslaan</button>
            <a href="{{ route('products.index') }}" class="px-4 py-2">Annuleer</a>
        </div>
    </form>
</x-layouts.app>

