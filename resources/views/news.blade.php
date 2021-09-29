<<<<<<< HEAD
@dd($news);

=======
>>>>>>> 2d2f4108e1d90098511734399cc6658e37842759
@extends('layouts.main')

@section('container')
  
<<<<<<< HEAD
@foreach ($blog_asips as $news)
=======
@foreach ($news as $blog_asip)
>>>>>>> 2d2f4108e1d90098511734399cc6658e37842759
<article class="mb-5">
    <h2>
        <a href="/news/{{ $blog_asip["slug"] }}" >{{ $blog_asip["title"] }}</a>
    </h2>

    <h5>By: {{ $blog_asip["author"] }}</h5>
    <p>{{ $blog_asip["body"] }}</p>
</article>
@endforeach
@endsection
    

