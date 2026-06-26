<div class="flex flex-col mb-4 p-4 lg:p-8">
    <h2 class="text-3xl lg:text-4xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->description !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
