<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $p)
        <article class="py-5 mx-5 border-bottom col-md-8 offset-md-2">
            <h2 class="fs-2 fw-bold">
                <a href="/posts/{{ $p['slug'] }}" class="text-decoration-none text-reset">{{ $p['title'] }}</a>
            </h2>
            <div class="link-hover">
                <a href="/authors/{{ $p->author->id }}" class="">{{ $p->author->name }}</a>
                |
                {{ $p->created_at->diffForHumans() }}
            </div>
            <p class="my-4 ">
                {{ Str::limit($p['body'], '250') }}
            </p>
            <a href="/posts/{{ $p['slug'] }}" class="text-decoration-none">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
