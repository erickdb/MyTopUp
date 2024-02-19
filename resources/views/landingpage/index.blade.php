@extends('landingpage.layout.template')

@section('title', 'MyTopUp')

@section('content')
<main class="container mx-auto">
    <div class="flex justify-center">
        <div class="carousel w-[900px] lg:rounded-box">
            <div id="item1" class="carousel-item w-full">
                <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
            </div> 
            <div id="item2" class="carousel-item w-full">
                <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
            </div> 
            <div id="item3" class="carousel-item w-full">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
            </div> 
            <div id="item4" class="carousel-item w-full">
                <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
            </div>
        </div>
    </div> 
    <div class="flex justify-center w-full py-2 gap-2">
        <a href="#item1" class="btn h-[0.8rem] min-h-[0.8rem] px-[0.35rem] text-[0.7rem] rounded-[99999px] btn-neutral"></a> 
        <a href="#item2" class="btn h-[0.8rem] min-h-[0.8rem] px-[0.35rem] text-[0.7rem] rounded-[99999px] btn-neutral"></a> 
        <a href="#item3" class="btn h-[0.8rem] min-h-[0.8rem] px-[0.35rem] text-[0.7rem] rounded-[99999px] btn-neutral"></a> 
        <a href="#item4" class="btn h-[0.8rem] min-h-[0.8rem] px-[0.35rem] text-[0.7rem] rounded-[99999px] btn-neutral"></a>
    </div>
</main>
@endSection