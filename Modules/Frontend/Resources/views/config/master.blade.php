<?php 
    $title = 'Company Name';
    $author = 'Company Author';
    $keywords = array('Keyword 1','Keyword 2');
    $description = 'Company Description';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="favicon.png" rel="icon">
        <meta name="theme-color" content="#fff">
        <meta name="author" content="{{$author}}">
        <meta name="keywords" content="<?php foreach ($keywords as $value) {echo $value.', ';}?>">
        <meta name="description" content="{{$description}}">
        <title>@yield('title', $title)</title>
        @include('frontend::config.stylesheet')
    </head>
    <body>
        @include('frontend::layouts._assets.header.Header01Basic')
        @yield('content')
        
        @include('frontend::layouts._assets.footer.Footer01Basic')

        <x-frontend::backtotop.BackToTop></x-frontend>
        @include('frontend::config.script')
    </body>
</html>
