<x-layouts.page>
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-2xl p-6 space-y-6">
        <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>

        <div class="space-y-2 text-gray-700">
            <p class="text-lg">{{ $product->description }}</p>
            <p><span class="font-semibold">Startprijs:</span> €{{ $product->start_price }}</p>
            <p><span class="font-semibold">Status:</span> {{ $product->status }}</p>
            <p><span class="font-semibold">Verkocht aan:</span> {{ $product->sold_to ?? '—' }}</p>
            <p class="text-sm text-gray-500">Created: {{ $product->created_at->format('d M Y, H:i') }}</p>
            <p class="text-sm text-gray-500">Updated: {{ $product->updated_at->format('d M Y, H:i') }}</p>
        </div>


            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Jouw bod</label>
                <input
                    type="number"
                    name="amount"
                    id="amount"
                    placeholder="Voer je bod in"
                    class="w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2"
                >
            </div>
            <button
                type="submit"
                class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
            >
                Plaats bieding
            </button>

</x-layouts.page>
