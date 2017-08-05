<div class="blog-post">

    <h2 class="blog-post-title">{{ $post->title }}</h2>

    <p class="blog-post-meta">
        
        {{ $post->created_at->toFormattedDatesString() }} 
        
        by <a href="#">Kalnynsh D.A.</a>
        
    </p>

    <p>{{ $post->body }}</p>

    <hr>
    
</div>
