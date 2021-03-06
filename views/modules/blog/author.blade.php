@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'blog.author'])
        <h1 class="title">{{ trans('themes::blog.author posts', ['author'=>$author->fullname]) }}</h1>
    @endcomponent
    <div class="container mt30">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts->chunk(2) as $chunk)
                    <div class="row">
                        @foreach($chunk as $post)
                            <div class="col-md-6">
                                @include('blog::partials._post')
                            </div>
                        @endforeach
                    </div>
                @endforeach
                @unset($post)
                {!! $posts->links('blog::pagination.default') !!}
            </div>
            <div class="col-md-4">
                @include('blog::partials.sidebar', ['share'=>true])
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection