<x-layout>
        <article>
            <h2>
                {!! $post->title !!}
            </h2>

            <p>
                By <a href="{{ $post->user->name }}">Julien P</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </p>

            <div>
                {!! $post->body !!}
            </div>

        </article>

        <a href="/">Go back</a>
</x-layout>