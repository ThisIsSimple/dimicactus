<!DOCTYPE html>
<html>
<head>
    <title>선인장, 세상을 하나로</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="세상을 하나로 만드는 발판, 디미고 꿈나무들의 선인장입니다!">
    <meta name="author" content="cordelia273">

    <link rel="image_src" href="/static/img/logo.png">
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64 128x128" href="/ico/favicon.ico?v=2">

    <link rel="stylesheet" href="/static/css/bulma.css">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="/static/js/jquery.js"></script>
    <script src="/static/js/common.js"></script>
</head>
<body>
    <nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item is-home" href="/index.php/home">
                    선인장
                </a>
                <a class="nav-item is-tab is-hidden-mobile is-home <?php if($menu == 0) echo "is-active"; ?>" href="/index.php/home/main">홈</a>
                <a class="nav-item is-tab is-hidden-mobile is-home <?php if($menu == 1) echo "is-active"; ?>" href="/index.php/home/about">소개</a>
                <a class="nav-item is-tab is-hidden-mobile is-home <?php if($menu == 2) echo "is-active"; ?>" href="/index.php/home/new2017">2017년 신입생 모집</a>
                <a class="nav-item is-tab is-hidden-mobile is-home" href="/index.php/edu">카투스에듀</a>
            </div>
            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <div class="nav-right nav-menu is-hidden-tablet">
                <a class="nav-item is-tab is-hidden-tablet <?php if($menu == 0) echo "is-active"; ?>" href="/index.php/home/main">홈</a>
                <a class="nav-item is-tab is-hidden-tablet <?php if($menu == 1) echo "is-active"; ?>" href="/index.php/home/about">소개</a>
                <a class="nav-item is-tab is-hidden-tablet <?php if($menu == 2) echo "is-active"; ?>" href="/index.php/home/new2017">2017년 신입생 모집</a>
                <a class="nav-item is-tab is-hidden-tablet" href="/index.php/edu">카투스에듀</a>
                <a class="nav-item is-tab">
                    <figure class="image is-16x16" style="margin-right: 8px;">
                        <img src="http://bulma.io/images/jgthms.png">
                    </figure>
                    Profile
                </a>
                <a class="nav-item is-tab">Log out</a>
            </div>
            <div class="nav-right is-hidden-mobile">
                <a class="nav-item is-tab is-home">
                    <figure class="image is-16x16" style="margin-right: 8px;">
                        <img src="http://bulma.io/images/jgthms.png">
                    </figure>
                    Profile
                </a>
                <a class="nav-item is-tab is-home">Log out</a>
            </div>
        </div>
    </nav>