@extends('layouts.blank')

@php
seo_helper()->setTitle('404 - Sayfa bulunamadı');
@endphp

@section('content')
    <div class="full-page">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url({!! Theme::url('img/slider/slide-1.jpg') !!});"></div>
            <div class="bg-holder-content full text-white">
                <a class="logo-holder" href="{{ url(locale()) }}">
                    <img src="{{ Theme::url('img/logo/logo-rw.svg') }}" alt="@setting('theme::company-name')" title="Image Title" />
                </a>
                <div class="full-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="text-hero">400</p>
                                <h1>Sayfa bulunamadı.</h1>
                                <p>Aramış olduğunuz sayfayı bulamadık.</p><a class="btn btn-white btn-ghost btn-lg mt5" href="{!! LaravelLocalization::getLocalizedURL(locale(), route('homepage')) !!}"><i class="fa fa-long-arrow-left"></i> Anasayfa'ya dön</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Menu::render('footer', \Themes\Autorent\Presenter\FooterMenuErrorPresenter::class) !!}
            </div>
        </div>
    </div>
@endsection