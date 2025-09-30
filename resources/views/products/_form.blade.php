<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium">Naam</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="w-full border rounded px-3 py-2">
        @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Startprijs</label>
        <input type="number" step="0.01" name="start_price" value="{{ old('start_price', $product->start_price ?? '') }}" class="w-full border rounded px-3 py-2">
        @error('start_price')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Beschrijving</label>
        <textarea name="description" rows="4" class="w-full border rounded px-3 py-2">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Afbeelding URL</label>
        <input type="url" name="image_url" value="{{ old('image_url', $product->image_url ?? '') }}" class="w-full border rounded px-3 py-2">
        @error('image_url')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Status</label>
        <select name="status" class="w-full border rounded px-3 py-2">
            @php($current = old('status', $product->status ?? 'Nieuwstaat'))
            <option value="Nieuwstaat" {{ $current === 'Nieuwstaat' ? 'selected' : '' }}>Nieuwstaat</option>
            <option value="Tweedehands" {{ $current === 'Tweedehands' ? 'selected' : '' }}>Tweedehands</option>
        </select>
        @error('status')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium">Verkocht aan (user ID)</label>
        <input type="number" name="sold_to" value="{{ old('sold_to', $product->sold_to ?? '') }}" class="w-full border rounded px-3 py-2">
        @error('sold_to')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
    </div>
</div>

