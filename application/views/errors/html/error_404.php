<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>404 페이지를 찾을 수 없습니다</title>
</head>
<body>
    <div style="text-align: center; position: absolute; left: 50%; top: 25%;-webkit-transform: translate(-50%);-moz-transform: translate(-50%);-ms-transform: translate(-50%);-o-transform: translate(-50%);transform: translate(-50%);">
        <img src="/static/img/logo.png" width="150px">
        <h1><?php echo $heading; ?></h1>
        <?php echo $message; ?>
    </div>
</body>
</html>