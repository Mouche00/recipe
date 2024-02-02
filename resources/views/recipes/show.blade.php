<x-layout>
    <div class="mx-auto px-4 py-8 max-w-6xl">
        <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide md:flex" >
            <div class="rounded-t-lg md:rounded-l-lg bg-black md:w-[50px] flex justify-center items-center">
                <p class="text-white text-3xl md:rotate-[-90deg]">Recipe</p>
            </div>
            <div class="md:w-[50%] ">
                <img src="/images/hero-1.jpg" alt="mountains" class="md:h-full overflow-hidden rounded-b-none">
            </div>
            <div class="px-4 py-2 mt-2 md:w-[50%]">
                <h2 class="font-bold text-4xl text-gray-800 tracking-normal">{{ $recipe->title }}</h2>
                <p class="text-sm text-gray-700 px-2 mr-1 mt-4">
                    {{ $recipe->body }}
                </p>
                <div class="author flex items-center -ml-3 my-8">
                    <div class="user-logo">
                        <img class="w-12 h-12 object-cover rounded-full mx-4 shadow" src="/images/author.jpg" alt="avatar">
                    </div>
                    <h2 class="text-sm tracking-tighter text-gray-900">
                        <a href="#">By Leo Verga</a> <span class="text-gray-600">{{ $recipe->created_at->diffForHumans() }}</span>
                    </h2>
                </div>
                <div class="author flex flex-col items-center justify-between px-8 w-full -ml-3 my-8 text-center">
                    <h2 class="text-lg tracking-tighter text-gray-900 p-2 px-8 border-2 border-black rounded-lg w-full">
                        TAGS
                    </h2>
                    <div class="flex flex-wrap">
{{--                        <?php foreach($data['tags'] as $tag): ?>--}}
{{--                            <h2 class="text-lg tracking-tighter text-gray-900 m-4 text-white p-2 px-4 bg-black rounded-lg"><?= $tag->name ?></h2>--}}
{{--                        <?php endforeach; ?>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
