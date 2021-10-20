@extends('layouts.main')

@section('container')
  
@foreach ($news as $blog_asip)
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/news/{{ $blog_asip["slug"] }}" 
        class="text-decoration-none">{{ $blog_asip["title"] }}</a>
    </h2>

    <h5>By: {{ $blog_asip["author"] }}</h5>
    <p>{{ $blog_asip["body"] }}</p>

    <a href="/news/{{ $blog_asip["slug"] }}">Read more...</a>
</article>
@endforeach
@endsection
    

