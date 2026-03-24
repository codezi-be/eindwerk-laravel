<div class="relative bg-gray-100 p-4 flex justify-between items-center relative">
    <div>
        <h1 class="text-xl font-semibold">Bestelling van {{ $order->created_at->isoFormat('Do MMMM YYYY') }}</h1>
        <p class="text-gray-500 text-lg">{{ $order->products->count() }} producten</p>
    </div>
    <div class="text-4xl">
        <i class="fa-solid fa-angle-right"></i>
    </div>
    <a class="absolute inset-0" href="{{ route('orders.show', $order) }}">
        <span class="hidden">Toon bestelling</span>
    </a>
</div>
