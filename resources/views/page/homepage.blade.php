<x-default-layout>
    <livewire:hero-section />
    @foreach ($categories as $category)
        {{-- Testing json in blade --}}
        {{-- @if ($category->input_variant != null)
            @php
                $input_variant = json_decode($category->input_variant);
                
            @endphp

            @foreach ($input_variant->requirement as $input => $value)
                <div>

                    <label for="">{{ $input }}</label>
                    <input type="text" value="{{ $value }}">
                </div>
            @endforeach
        @endif --}}

        @if ($category->products->count() > 0)
            <livewire:category-product :category="$category">
        @endif
    @endforeach

</x-default-layout>
