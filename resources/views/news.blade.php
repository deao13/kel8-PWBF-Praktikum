@dd($news);

@extends('layouts.main')

@section('container')
  
@foreach ($blog_asips as $news)
<article class="mb-5">
    <h2>
        <a href="/news/{{ $blog_asips["slug"] }}" >{{ $blog_asips ["title"] }}</a>
    </h2>

    <h5>By: {{ $blog_asips ["author"] }}</h5>
    <p>{{ $blog_asips ["body"] }}</p>
</article>
@endforeach
@endsection
    

