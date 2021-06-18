<x-app-layout><div class="container m-auto pt-3">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <article class="w-full h-60 bg-cover bg-center @if($loop->first and $loop->last) md:col-span-2 @endif @if($loop->first) lg:col-span-2 @endif " style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}}) @else https://th.bing.com/th/id/R36ce3abf7db30b110bf129ab7af9f0bd?rik=MN4%2f3HHp9TqbqQ&riu=http%3a%2f%2fthewowstyle.com%2fwp-content%2fuploads%2f2015%2f04%2f6881315-desktop-backgrounds.jpg&ehk=qWsTPhEenVV1I1XCla%2beYdDX3MR%2fBwLYWfPelzdd9RM%3d&risl=&pid=ImgRaw @endif ">
                <div class="w-full h-full px-8 flex flex-col justify-center">

                    <h1 class="text-2xl text-white leading-8 font-bold mt-2 mb-2">
                        <a href="">
                            {{$product->name}}
                        </a>
                    </h1>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-4">
        {{$products->links()}}
    </div>
</div>
</x-app-layout>
