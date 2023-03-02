<x-layout>
    <div class="page-content">
        <div class="container">
<div class="pp-section pp-container-readable">
  <div class="pp-post"><a class="h3" >{{ $post->title }}</a>
    <div class="pp-post-meta mt-2">
      <ul>
        <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
          <span>{{ $post->created_at->diffForHumans() }}</span></li>

        <li><i class="fa fa-tags" aria-hidden="true"></i>
          <span><a href="/postTags/{{ $post->postTags->slug }}"><span>{{ $post->postTags->name }}</span></a>
          </span></li>

        <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#pp-comment">Comments</a></li>

        {{-- User Info Later --}}

        <li><i class="fa fa-user-circle" aria-hidden="true"></i><a href="#">{{ $post->user->name }}</a></li>
      </ul>
    </div><img class="img-fluid mt-3" src="/images/blog-4.jpg" alt="Blog Image"/>
  </div>
  <div class="pp-blog-details">
    <p>{{ $post->body }}</p>
    <div class="pp-tags">
      <div class="h6">Tags</div><a class="badge badge-primary" href="/postTags/{{ $post->postTags->slug }}">{{ $post->postTags->name }}</a>
    </div>
    {{-- Comment Section --}}


     @include('posts._add-comment-form')


    <div class="pp-comments bg-gray-100 border-gray-800 p-3 pp-comments " style="border-radius: 20px" id="pp-comment">
      <div class="h2">Comments</div>
      @foreach ($post->comments as $comment )
      <x-comments.post-comment :comment="$comment"/>
      @endforeach

    </div>
  </div>

</div>
<div class="pp-section"></div></div>
      </div>
</x-layout>