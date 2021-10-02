@extends('layouts.main')

@section('container')
  
@foreach ($news as $blog_asip)
<article class="mb-5">
    <h2>
        <a href="/news/{{ $blog_asip["slug"] }}" >{{ $blog_asip["title"] }}</a>
    </h2>

    <h5>By: {{ $blog_asip["author"] }}</h5>
    <p>{{ $blog_asip["body"] }}</p>
</article>
@endforeach
@endsection
    

