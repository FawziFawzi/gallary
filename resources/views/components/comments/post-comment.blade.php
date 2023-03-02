@props(['comment'])
<div class="media"><img class="img-fluid mr-3 rounded-circle" src="https://i.pravatar.cc/60?u={{ $comment->user->id }}" alt="Image"/>
    <div class="media-body">
      <div class="h5 mt-0 font-weight-bolder" >{{ $comment->user->username }}</div>
      <p class="text-muted">Posted <time>{{ $comment->created_at->format("F j, Y, g:i a") }}</time></p>
      <p>{{ $comment->body }}</p>
    </div><a href="#pp-drop-comment"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
</div>


{{-- Reply --}}
{{-- <x-comments.comment-reply></x-comments.comment-reply> --}}