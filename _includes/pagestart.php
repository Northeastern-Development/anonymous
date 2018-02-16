<?php require_once("_config/config.php"); ?>
    <!doctype html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="title" content="<?=(isset($page_title) && $page_title != ""?$page_title:$default["title"])?>">
                <title><?=(isset($page_title) && $page_title != ""?$page_title:$default['title'])?></title>
                <meta name="description" content="<?=(isset($page_description) && $page_description != ""?$page_description:$default['description'])?>">
                <meta name="author" content="Northeastern, http://www.northeastern.edu/marcom/">
                <meta name="copyright" content="<?=date("Y")?>">
                <meta name="language" content="english">
                <meta name="zipcode" content="02120">
                <meta name="city" content="Boston">
                <meta name="state" content="MA">
                <meta property="og:locale" content="en_US">
                <meta property="og:type" content="article">
                <meta property="og:title" content="<?=(isset($page_title) && $page_title != ""?$page_title:$default['title'])?>">
                <meta property="og:description" content="<?=(isset($page_description) && $page_description != ""?$page_description:$default['description'])?>">
                <meta property="og:url" content="http://www.northeastern.edu/marcom/">
                <meta property="og:site_name" content="<?=(isset($page_title) && $page_title != ""?$page_title:$default['title'])?>">
                <meta property="article:publisher" content="Northeastern Marketing &amp; Communications">
                <meta name="viewport" content="width=device-width,initial-scale = 1,user-scalable=no">
                <meta name="apple-mobile-web-app-capable" content="yes">
                <meta name="apple-mobile-web-app-status-bar-style" content="black">
                <meta name="robots" content="noindex, nofollow"/>
                <meta name="distribution" content="iu">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link rel="apple-touch-icon" sizes="180x180" href="_ui/favicon/apple-touch-icon.png">
                <link rel="icon" type="image/png" href="_ui/favicon/favicon-32x32.png" sizes="32x32">
                <link rel="icon" type="image/png" href="_ui/favicon/favicon-16x16.png" sizes="16x16">
                <link rel="manifest" href="_ui/favicon/manifest.json">
                <link rel="mask-icon" href="_ui/favicon/safari-pinned-tab.svg" color="#E21A23">
                <link rel="shortcut icon" href="_ui/favicon/favicon.ico">
                <meta name="msapplication-config" content="_ui/favicon/browserconfig.xml">
                <meta name="theme-color" content="#ffffff">
                <link href="https://fonts.googleapis.com/css?family=Itim|Rubik:400,700" rel="stylesheet" type='text/css'>
                <link type="text/css" rel="stylesheet" href="_css/screen.css">
