<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <title>@yield('title')</title>
        {!! Html::style('assets/frontend/style.css') !!}
        <style type="text/css">.post-tags {display: none;}</style>
        {!! Html::style('assets/frontend/plugins/contact-form-7/css/styles.css') !!}
        {!! Html::style('assets/frontend/plugins/recent-tweets-widget/tp_twitter_plugin.css') !!}
        {!! Html::style('assets/frontend/css/superfish.css') !!}
        {!! Html::style('assets/frontend/css/prettyPhoto.css') !!}
        {!! Html::style('assets/frontend/css/responsive.css') !!}
        {!! Html::style('assets/frontend/css/colour.css') !!}
        {!! Html::script('assets/frontend/js/jquery.js') !!}
        {!! Html::script('assets/frontend/js/jquery-migrate.min.js') !!}

    </head>

    <!-- BEGIN body -->
    <body id="top" class="home page page-id-8 page-template page-template-page-templatestemplate-homepage-php loading">
        <!-- BEGIN .center-content -->
        @include('frontend.header');
        @yield('content');
        <!-- END .content-wrapper-inner -->
    </div>

    <!-- END .content-wrapper -->
</div>
@include('frontend.footer');
<!-- END body -->
</body>
</html>