<x-dashboard.dashboardlayout>
    <x-slot name="header">
        {{ __('Manage Posts') }}
    </x-slot>

    <section class="m-auto">


        <table class="rounded-t-lg m-5 w-100 mx-auto bg-gray-200 text-gray-800">

            @foreach ($posts as $post)
                <tr class="bg-gray-100 border-b border-gray-200">

                    <td class="px-4 py-3"><a href="/blog-post/{{ $post->post_slug }}"> {{ $post->title }} </a></td>

                    <td class="px-4 py-3">published</td>
                    <td class="px-4 py-3 "><a href="/admin/post/{{ $post->post_slug }}/edit" class="text-primary">Edit</a></td>
                    <td class="px-4 py-3 ">

                        <form action="/admin/post/{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')

                            <x-button class="btn btn-secondary" >
                                {{ __('Delete') }}
                            </x-button>
                        </form>
                        </td>


              </tr>
            @endforeach

        </table>

        <!-- classic design -->


    </section>

</x-dashboard.dashboardlayout>