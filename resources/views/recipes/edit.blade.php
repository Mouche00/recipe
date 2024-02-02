<x-layout class="pt-20">
    <div class="m-auto md:w-[40%] max-h-full flex flex-col justify-center">
        <div class="w-full h-18 bg-amber-700 rounded-t-lg text-center">
            <h1>Add Recipe</h1>
        </div>
        <form action="/recipes/{{ $recipe->id }}/edit" method="POST" class="relative bg-gray-200 rounded-b-lg shadow" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title" id="title" value="{{ $recipe->title }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="History" >
                        @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="excerpt" class="block mb-2 text-sm font-medium text-gray-900">Excerpt</label>
                        <input type="text" name="excerpt" id="excerpt" value="{{ $recipe->excerpt }}"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="History" >
                        @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Body</label>
                        <textarea id="body" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Quantum mechanics are...">{{ $recipe->body }}</textarea>
                        @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        {{--                    <div class="col-span-6 sm:col-span-3">--}}
                        {{--                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>--}}
                        {{--                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
                        {{--                            <!-- Options fetched by AJAX -->--}}
                        {{--                        </select>--}}
                        {{--                        <span class="error-message text-xs text-red-500"></span>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-span-6 sm:col-span-3">--}}
                        {{--                        <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Tags</label>--}}
                        {{--                        <select id="tags" name="tags[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" multiple>--}}
                        {{--                            <!-- Options fetched by AJAX -->--}}
                        {{--                        </select>--}}
                        {{--                        <span class="error-message text-xs text-red-500"></span>--}}

                        {{--                    </div>--}}
                        {{--                    <div id="selected-tags" class="col-span-6 sm:col-span-3">--}}


                        {{--                    </div>--}}
                        <div class="col-span-6 sm:col-span-3">
                            <label class="mb-2 block text-xs">Picture</label>
                            <div class="h-[8rem] border-2 border-dashed border-black flex justify-center items-center relative">
                                <input name="picture" id="picture" type="file" value="{{ $recipe->picture }}"  class="absolute w-full h-full outline-none opacity-0">
                                <p class="text-xs">Click to upload your picture</p>
                            </div>
                            @error('picture')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                    <button id="submit" type="submit" class="text-white bg-amber-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">SUBMIT</button>
                </div>
        </form>
    </div>
</x-layout>
