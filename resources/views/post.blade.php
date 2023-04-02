@extends('layouts.main')

@section('container')

<article>
    <h2>{{$post["title"]}}</h2>
    <h5>{{$post["author"]}}</h5>
    <h6>{{$post["body"]}}</h6>
</article>
<a href="/blog">back to post</a>
@endsection
