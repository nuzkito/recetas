@extends('layout')

@section('title', $page->title)

@section('content')
    <header>
        <h1>{{ $page->title }}</h1>
    </header>
    <section class="content">
        {!! $page->content->html() !!}
    </section>
@endsection
