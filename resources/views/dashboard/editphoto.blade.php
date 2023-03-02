<x-dashboard.dashboardlayout>
    <x-slot name="header">
        {{ __('Edit Photo: ').$photo->title }}
    </x-slot>


    <section class="m-auto w-75">

    {{-- Validation errors --}}
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    {{-- Form --}}
    <form method="POST" action="/admin/photo/{{ $photo->id }}"  enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        {{-- Photo title --}}
        <div class="mt-4">
            <x-label for="title" :value="__('Title')"></x-label>
            <x-input type="text" class="block mt-1 w-full" name='title' id="title" :value="old('title',$photo->title)" required autofocus></x-input>
        </div>
          {{-- Photo Tags --}}
        <div class="mt-4">
            <x-label for="photo_tags_id" :value="__('Tags')"></x-label>
            <select name="photo_tags_id" id="photo_tags_id">
                @php
                    $tags = \App\Models\photoTags::all();
                @endphp
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ old('photo_tags_id',$photo->photo_tags_id) == $tag->id ? 'selected':'' }}>{{ $tag->name }}</option>
                @endforeach

            </select>
        </div>

        {{-- Photo thumbnail --}}
        <div class="mt-4 ">
            <x-label for="thumbnail" :value="__('Thumbnail')"></x-label>
            <x-input type="file" class="block mt-2 w-full" name='thumbnail' id="thumbnail" :value="old('thumbnail')"></x-input>
            <img class="img-fluid ml-2 mt-3 w-25" src="{{ asset('storage/'. $photo->thumbnail) }}" alt="Blog Image"/>
        </div>

        {{-- Button --}}

        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-4">
                {{ __('Update photo') }}
            </x-button>
        </div>

    </form>
</section>
</x-dashboard.dashboardlayout>