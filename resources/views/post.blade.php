<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-5 mx-5 border-bottom col-md-8 offset-md-2">
        <h2 class="fs-2 fw-bold">
            {{ $post['title'] }}
        </h2>
        <div class="link-hover">
            <a href="/authors/{{ $post->author->id }}" class="">{{ $post->author->name }}</a>
            |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 ">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="text-decoration-none">&laquo Back To Post</a>
    </article>
</x-layout>
