<x-layout>
    {{-- @dd($posts); --}}
            <div class="page-content">
                <div class="container">
        <div class="pp-section pp-container-readable">
            {{-- @dd($tags) --}}
            @foreach ($posts as $post )


            {{-- Image --}}
        <article class="pp-post"><a href="/blog-post/{{ $post->post_slug }}">
            <img class="img-fluid" src="images/blog-1.jpg" alt="Blog Image"/></a>
            <header class="pp-post-header">
            <div class="pp-post-title">
                {{-- Title --}}
                <a class="h4" href="/blog-post/{{ $post->post_slug }}">{{ $post->title }}</a></div>
            <div class="pp-post-meta">
                {{-- Later --}}
                <ul>
                    <li><i class="fa fa-user-circle" aria-hidden="true"></i><a href="#">{{ $post->user->name }}</a></li>
                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>{{ $post->created_at->diffForHumans() }}</span></li>
                <li><i class="fa fa-tags" aria-hidden="true"></i><span><a href="/postTags/{{ $post->postTags->slug }}"><span>{{ $post->postTags->name }}</span></a></span></li>

                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Comments</a></li>
                </ul>
            </div>
            </header>
            {{-- Content Of Post --}}
            <div class="pp-post-content">
            <p>{{ $post->excerpt }}</p>
            </div>
            <div class="pp-post-read-more">
                {{-- Go To Post --}}
                <a href="/blog-post/{{ $post->post_slug }}">Read More</a>
            </div>
        </article>
        @endforeach

        <div class="pp-pagination">
            {{$posts->links() ? $posts->links() : ''}}

        </div>
        </div>
        <div class="pp-section"></div></div>
            </div>
            </div>
</x-layout>