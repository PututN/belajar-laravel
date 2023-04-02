@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5">
    <h2>
    <a href="/blog/{{ $post["slug"] }}"">

        {{$post["title"]}}</h2>
    </a>
    <h5>By : {{$post["author"]}}</h5>
    <h6>{{$post["body"]}}</h6>
</article>
@endforeach
@endsection
