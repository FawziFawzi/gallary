   <x-layout>

           <div class="page-content">
               <div class="container">
                   <div class="container pp-section">
                       <div class="row">
                           <div class="col-md-9 col-sm-12 px-0">
                               <h1 class="h3"> We are Photo Perfect, A Digital Photography Studio.</h1>
                           </div>
                       </div>
                   </div>

{{--                    //Category section--}}
                   <div class="container px-0 py-4">
                       <div class="pp-category-filter">
                           <div class="row">
                               <div class="col-sm-12">
                                   <x-catLink classes="btn-primary" href="/" datafilter="all">All</x-catLink>
                                   @foreach($photos as $photo)

                                       <x-catLink classes="btn-outline-primary" href="/?tags={{ $photo->photoTags->slug }}" datafilter="{{$photo->photoTags->name}}"

                                       >{{$photo->photoTags->name}}</x-catLink>
                                    @endforeach
                               </div>
                           </div>
                       </div>
                   </div>



{{--                   Photo Section--}}
                   <div class="container px-0">
                       <div class="pp-gallery">
                           <div class="card-columns  photos">

                               @foreach($photos as $photo)
                               {{-- @dd($loop) --}}

                               <div class="card item" data-groups="[&quot;{{$photo->photoTags->name}}&quot;]">
                                    <a href="/" data-lightbox="photos">
                                        <figure class="pp-effect"><img class="img-fluid" src="/storage/{{$photo->thumbnail}}" alt="{{$photo->photoTags->name}}"/>
                                            <figcaption>
                                                {{--tag slug one word--}} <div class="h4">{{$photo->title}}</div>
                                                {{--Tag name--}}<p>{{$photo->photoTags->name}}</p>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
                   <div class="pp-section"></div></div>
           </div>
       </div>

   </x-layout>
