<x-dashboard.dashboardlayout>
    <x-slot name="header">
        {{ __('Manage Photos') }}
    </x-slot>

    <section class="m-auto">


        <table class="rounded-t-lg m-5 w-100 mx-auto bg-gray-200 text-gray-800">

            @foreach ($photos as $photo)
                <tr class="bg-gray-100 border-b border-gray-200">

                    <td class="px-4 py-3"><a href="/"> {{ $photo->title }} </a></td>

                    <td class="px-4 py-3">published</td>
                    <td class="px-4 py-3 "><a href="/admin/photo/{{ $photo->id }}/edit" class="text-primary">Edit</a></td>
                    <td class="px-4 py-3 ">

                        <form action="/admin/photo/{{ $photo->id }}" method="post">
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