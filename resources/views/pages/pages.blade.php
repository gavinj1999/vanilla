@extends('main')

@section('content')
<div class="row">
@foreach($pagecontents as $pagecontent)
    <div class="col-md-4">
        <img class="img-responsive" src="storage/{{ $pagecontent->image }}" />
    </div>

    <div class="col-md-8">
        {{ $pagecontent->title }}
        {!!  $pagecontent->excerpt   !!}

    </div>

    @endforeach
</div>
@endsection
