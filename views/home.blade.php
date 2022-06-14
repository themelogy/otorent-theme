@extends('layouts.master')

@section('content')

    @themeSlide('anasayfa')

    @include('block::widgets.slogans')

    @carFindByOptions('settings.show_home', 'home')

@endsection