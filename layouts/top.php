<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpblog - <?= isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '' ?></title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans+KR:400,500&display=swap&subset=korean">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<div id="app" class="uk-container-expand">
    <nav id="nav" role="navigation"
         class="uk-navbar-container uk-navbar-transparent uk-padding uk-padding-remove-vertical uk-margin-bottom"
         uk-navbar>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/user/register">Register</a></li>
                <!--세션의 'user'라는 key에 'user'의 로그인 정보를 담아준다.-->
                <!--로그인을 했을 때-->
                <?php if (array_key_exists('user', $_SESSION)) : ?>
                    <li><a href="/user/update">My page</a></li>
                    <li><a href="/post/write">Write</a></li>
                    <li><a href="/auth/logout">Sign out</a></li>
                <?php else : ?>
                    <!--로그인을 안했을 때-->
                    <li><a href="/auth/login">Sign in</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <main id="main" role="main">