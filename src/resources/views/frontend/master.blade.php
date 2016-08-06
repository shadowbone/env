<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/style.css" type="text/css"  media="all"  />
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>	
        <link rel="alternate" type="application/rss+xml" title="ParkCollege RSS Feed" href="http://themes.quitenicestuff.com/parkcollegewp/feed/" />
        <link rel="pingback" href="http://themes.quitenicestuff.com/parkcollegewp/xmlrpc.php" />
        <style type="text/css">.post-tags {display: none;}</style>	
        <link rel="alternate" type="application/rss+xml" title="ParkCollege &raquo; Feed" href="http://themes.quitenicestuff.com/parkcollegewp/feed/" />
        <link rel="alternate" type="application/rss+xml" title="ParkCollege &raquo; Comments Feed" href="http://themes.quitenicestuff.com/parkcollegewp/comments/feed/" />
        <link rel="alternate" type="application/rss+xml" title="ParkCollege &raquo; Home Comments Feed" href="http://themes.quitenicestuff.com/parkcollegewp/home/feed/" />
        <link rel='stylesheet' id='contact-form-7-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/plugins/recent-tweets-widget/tp_twitter_plugin.css?ver=1.0' type='text/css' media='screen' />
        <link rel='stylesheet' id='superfish-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/css/superfish.css?ver=4.0.12' type='text/css' media='all' />
        <link rel='stylesheet' id='prettyPhoto-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/css/prettyPhoto.css?ver=4.0.12' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/css/flexslider.css?ver=4.0.12' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/css/responsive.css?ver=4.0.12' type='text/css' media='all' />
        <link rel='stylesheet' id='colour-css'  href='http://themes.quitenicestuff.com/parkcollegewp/wp-content/themes/parkcollege/css/colour.css?ver=4.0.12' type='text/css' media='all' />
        <script type='text/javascript' src='http://themes.quitenicestuff.com/parkcollegewp/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='http://themes.quitenicestuff.com/parkcollegewp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themes.quitenicestuff.com/parkcollegewp/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.quitenicestuff.com/parkcollegewp/wp-includes/wlwmanifest.xml" /> 
        <link rel='canonical' href='http://themes.quitenicestuff.com/parkcollegewp/' />
        <link rel='shortlink' href='http://themes.quitenicestuff.com/parkcollegewp/' />

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