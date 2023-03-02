@auth
<div class="row mb-4 " sty id="pp-drop-comment">
  <div class="col">
      {{-- Add Comment --}}
    <div class="h4 mb-3">Drop a Comment</div>
    <form action="/posts/{{ $post->post_slug }}/comments" method="POST" >
      @csrf

      <div class="row mb-3">
        <div class="col">
          @error('body')
            <span class="text-danger">{{ $message }}</span>
          @enderror
          <textarea class="form-control" name="body" placeholder="Comment"
          required
          ></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary" type="submit">Post Comment</button>
        </div>
      </div>
    </form>
  </div>
</div>
@else
<div class="mb-3 font-weight-bold">
  <a href="/register">Rigester</a> OR <a href="/login">Login</a> to Add a comment
</div>

@endauth