<div class="blog-post">
	
	<h2 class="blog-post">

		<a href="/posts/{{ $post->id }}">

			{{ $post->title}}

		</a>

	</h2>

	<p class="blogpost-meta">

		{{ $post->user->name }} on

		{{ $post->created_at->toFormattedDateString() }}

	</p>

	{{ $post->body }}

</div>