<x-layout>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto lg:py-16 lg:px-6">
            <div class="bg-[url('/images/hero-1.jpg')] bg-center lg:mb-16 mb-8 mx-auto p-40 rounded-lg relative">
                <div class="w-full h-full top-0 right-0 absolute z-50 flex flex-col items-center justify-center">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-black text-white">Ghibli Recipes</h2>
                    <p class="font-light text-white sm:text-xl">Repository of animated gastronomical goodeness.</p>
                    <form method="GET" action="/" class="w-[50%]">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search something"
                            class="w-full bg-white placeholder-gray font-semibold text-sm mt-4 border-2 border-black rounded py-2 px-4"
                            value="{{ request('search') }}"
                        >
                    </form>
                </div>
                <div class="bg-black bg-opacity-40 bg-center w-full h-full top-0 right-0 rounded-lg absolute z-40"></div>
            </div>
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-3 lg:py-16 lg:px-6 content-start" style="align-items: start;">
                <div id="content-wrapper" class="col-span-3 grid gap-8 lg:grid-cols-2 border-4 border-dashed rounded-lg p-8 border-black">
                    @if ($recipes->count() > 0)
                        @foreach ($recipes as $recipe)
                            <article class="relative bg-white rounded-lg border border-gray-200 shadow-md bg-[url('{{ asset($recipe->picture) }}')] bg-cover bg-center">
                                <div class="p-6 w-full h-full bg-amber-700/30 backdrop-brightness-75">
                                    <div class="flex justify-between items-center mb-5 text-white">
                                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                            Recipe
                                        </span>
                                        <span class="text-sm">{{ $recipe->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-white"><a href="#">{{ $recipe->title }}</a></h2>
                                    <p class="mb-5 font-light text-white">{{ $recipe->excerpt }}</p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-4">
                                            <img class="w-7 h-7 rounded-full" src="{{ asset('/images/author.jpg') }}" alt="Jese Leos avatar" />
                                            <span class="font-medium text-white">
                                                Goro Majima
                                            </span>
                                        </div>
                                        <a href="/recipes/{{ $recipe->id }}" class="inline-flex items-center font-medium text-white hover:underline">
                                            Read more
                                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center text-black absolute top-0 right-[-25px]">
                                    <a href="/recipes/{{ $recipe->id }}/edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form method="POST" action="/recipes/{{ $recipe->id }}/delete">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </button>

                                    </form>
                                </div>
                            </article>
{{--                            let container = $("<div>", { class: `flex flex-col items-center text-black absolute top-[120px] right-[-25px]` });

            let button = $("<button>", { class: "delete-button", type: "button" });
            button.attr("data-id", `${e.id}`);
            let value = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>`;
            button.html(value);
            container.append(button);

            button = $("<button>", { class: "edit-button", type: "button" });
            button.attr("data-id", `${e.id}`);
            value = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
        </svg>`;--}}
                        @endforeach
                    @else
                        <p class="text-center">No posts yet. Please check back later.</p>
                    @endif
                </div>
            </div>
            <div class="px-6">
                {{ $recipes->links() }}
            </div>
        </div>
    </section>
</x-layout>
