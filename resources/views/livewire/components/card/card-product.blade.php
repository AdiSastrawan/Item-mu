<div class="max-w-sm w-56  bg-white border flex-shrink-0 shadow-md my-2 drop-shadow-sm border-gray-200 rounded-lg  ">
    <a href="#">
        <img class="rounded-t-lg h-40 w-full object-cover"
            src={{ $product->img != null ? $product->img : 'https://source.unsplash.com/random' }} alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $product->name }}</h5>
        </a>
        <p>{{ $product->category->name }}</p>
        <p class="mb-3 font-normal text-gray-700 ">{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</p>
        <a href="#"
            class="inline-flex space-x-2 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add to cart
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                </path>
            </svg>
        </a>
    </div>
</div>
