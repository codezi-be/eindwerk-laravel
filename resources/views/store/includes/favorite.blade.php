<a href="{{ route('favorites.toggle', $product) }}" class="group text-2xl bg-white px-4 py-1">
    @auth
    @if (!Auth::user()->favorites()->where('id', $product->id)->count())
        {{-- Als not favorite --}}
        <i class="group-hover:hidden fa-solid fa-heart"></i>
        <i class="hidden group-hover:inline fa-solid fa-heart"></i>
    @else
        {{-- Als favorite --}}
        <i class="group-hover:hidden text-red-500 fa-solid fa-heart"></i>
        <i class="hidden group-hover:inline text-red-500 fa-solid fa-heart"></i>
    @endif
    @endauth
</a>