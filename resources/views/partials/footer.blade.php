<footer class="footer">
    @if(Setting::get('show_support'))
    <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}</p>
    @endif
    <p><a href="/rss"><i class="ion-social-rss"></i> {{ trans('cachet.rss-feed') }}</a>&nbsp;-&nbsp;<a href="/atom"><i class="ion-social-rss"></i> {{ trans('cachet.atom-feed') }}</a></p>
    <p>
        <a href="/dashboard">{{ trans('dashboard.dashboard') }}</a>
        @if($loggedUser)
        &ndash;
        <a href="/auth/logout">{{ trans('dashboard.logout') }}</a>
        @endif
    </p>
</footer>

@include("partials.analytics")
