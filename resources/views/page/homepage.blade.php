<x-default-layout>
    <livewire:hero-section />
    @foreach ($categories as $category)
        @if ($category->products->count() > 0)
            <livewire:category-product :category="$category">
        @endif
    @endforeach

</x-default-layout>
