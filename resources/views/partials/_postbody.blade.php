@foreach ($posts as $post)
    <h1>{!! $post->title !!}</h1>
    <img class="img-responsive" src="storage/{{ $post->image }}"/>

    {!! $post->body !!}
@endforeach