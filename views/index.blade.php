@extends('layout')

@section('title', $title)

@section('rss', true)

@section('content')
    <header>
        <h1>{{ $title }}</h1>
    </header>
    <section class="content">
        <ul>
            @foreach ($pages as $page)
                <li>
                    <a href="{{ $baseUrl }}/{{ $page->path }}/">{{ $page->title }}</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
