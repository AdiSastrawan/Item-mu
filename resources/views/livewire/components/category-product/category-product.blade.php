<div class="mx-20 relative my-5">
    <h1 class="font-bold py-4 text-xl">Paling populer di <span class="capitalize">{{ $category->name }}</span></h1>
    @if ($category->products->count() > 4)
        <button class="absolute pre-btn left-0 bottom-1/2 z-40 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10  w-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd"></path>
            </svg></button>
    @endif
    <div class="flex px-4 w-full relative">

        <div class="flex mx-10 overflow-x-auto scroll-smooth product-container gap-2 relative">

            @foreach ($category->products as $product)
                <livewire:card-product :product="$product">
            @endforeach

        </div>
    </div>
    @if ($category->products->count() > 4)
        <button class="absolute right-0 nxt-btn bottom-1/2 z-40 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    @endif
</div>
