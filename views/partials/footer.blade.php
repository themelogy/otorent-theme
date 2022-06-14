
<footer id="main-footer">
    <div class="container">
        <div class="row row-wrap">
            <div class="col-md-3">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo.svg') }}" alt="Image Alternative text" title="Image Title" />
                </a>
                <address>
                    <strong>{{ setting('theme::company-name') }}</strong><br>
                    {{ setting('theme::address') }}<br>
                    <abbr title="Telefon">T:</abbr> <a rel="nofollow" href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a><br/>
                    <abbr title="Mobil">M:</abbr> <a rel="nofollow" href="tel:{{ setting('theme::mobile') }}">{{ setting('theme::mobile') }}</a><br/>
                    @if(setting('theme::phone2'))
                    <abbr title="Mobil">M:</abbr> <a rel="nofollow" href="tel:{{ setting('theme::phone2') }}">{{ setting('theme::phone2') }}</a><br/>
                    @endif
                </address>
                @include('partials.components.socials', ['listClass'=>'list list-horizontal list-space social', 'iconClass'=>'box-icon-normal round animate-icon-bottom-to-top'])
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        {!! Menu::render('corporate', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('services', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('footer', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('footer-link-4', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <div>{{ setting('core::site-name') }} &copy; Tüm hakları saklıdır. <a target="_blank" href="https://www.ugmarackiralama.com.tr">UGM Ankara Araç Kiralama</a> </div>
            </div>
        </div>
    </div>
</footer>

@includeIf('core::cookie-law')