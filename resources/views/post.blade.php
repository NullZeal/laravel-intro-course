<x-layout>
        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <div>
                {!! $post->body !!}
            </div>

        </article>

        <p>That was the article.</p>
        <a href="/">Go back</a>
</x-layout>