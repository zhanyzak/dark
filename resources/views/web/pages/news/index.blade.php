@extends('web.layouts.app')
@section('title', '')
    
@section('content')
    <section id="news">
        @forelse ($news as $news_item)
            <h1>{{ $news_item->title }}</h1>
        @empty
            
        @endforelse
    </section>
@endsection