<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>404 페이지를 찾을 수 없습니다</title>
    <style type="text/css">
        a:visited, a, a:hover, a:active {
            color: #333;
        }
    </style>
</head>
<body style="background: url('/static/img/main2.jpg') no-repeat center center fixed; -webkit-background-size: cover; background-size: cover; -moz-background-size: cover;">
    <script>
    function goback() {
        history.back();
    }
    </script>

    <div style="text-align: center; position: absolute; left: 50%; top: 25%;-webkit-transform: translate(-50%);-moz-transform: translate(-50%);-ms-transform: translate(-50%);-o-transform: translate(-50%);transform: translate(-50%);">
        <img src="/static/img/cactus404.png" width="100px">
        <h1><?php echo $heading; ?></h1>
        <?php echo $message; ?>
        <a href="" onclick="goback()">이전페이지로</a>
    </div>
</body>
</html>