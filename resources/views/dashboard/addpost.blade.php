<x-dashboard.dashboardlayout>
    <x-slot name="header">
        {{ __('Add New Post') }}
    </x-slot>

        <section class="m-auto w-75">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('storepost') }}" enctype="multipart/form-data">
            @csrf

            <!-- Post Title -->
            <div class="mt-4">
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            {{-- Post Slug --}}
            <div class="mt-4">
                <x-label for="post_slug" :value="__('Slug')" />

                <x-input id="post_slug" class="block mt-1 w-full" type="text" name="post_slug" :value="old('post_slug')" required  />
            </div>

            <!-- Post Excerpt -->
            <div class="mt-4">
                <x-label for="excerpt" :value="__('Excerpt')" />


                <textarea id="excerpt" class="block mt-1 w-full rounded-md shadow-sm border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text"
                name="excerpt"
                required>{{ old('excerpt') }}</textarea>
            </div>
            <div class="mt-4">
                <x-label for="post_tags_id" :value="__('Tags')" />
                <select name="post_tags_id" id="post_tags_id">
                    @php
                       $Tags = \App\Models\postTags::all();
                    @endphp
                    @foreach ($Tags as $Tag)
                    <option value="{{ $Tag->id }}" {{ old('post_tags_id')== $Tag->id ? 'selected' :''}}>{{ $Tag->name }}</option>
                    @endforeach

                </select>

            </div>

            <!-- Post Body -->
            <div class="mt-4">
                <x-label for="body" :value="__('Body')" />

                <textarea id="body" class="block mt-1 w-full rounded-md shadow-sm border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"

                name="body"
                required>{{ old('body') }}</textarea>

            </div>

            <!-- post Thumbnail -->
            <div class="mt-4">
                <x-label for="post_thumbnail" :value="__('Add Photo')" />

                <x-input id="post_thumbnail" class="block mt-1 w-full"
                                type="file"
                                name="post_thumbnail" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Post') }}
                </x-button>
            </div>
        </form>
    </section>

</x-dashboard.dashboardlayout>