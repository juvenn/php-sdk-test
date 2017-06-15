<!DOCTYPE HTML>
<html>
  <head>
    <title>LeanEngine PHP</title>
    <link rel="stylesheet" href="/stylesheets/style.css">
  </head>
  <body>
    <h2>LeanEngine PHP 环境变量</h2>
    <dl>
      <dd><code>PHP_SELF=<?php echo getenv("PHP_SELF"); ?></code></dd>
      <dd><code>PATH_INFO=<?php echo getenv("PATH_INFO"); ?></code></dd>
      <dd><code>QUERY_STRING=<?php echo getenv("QUERY_STRING"); ?></code></dd>
      <dd><code>X_REAL_IP=<?php echo getenv("X_REAL_IP"); ?></code></dd>
    </dl>
    <p>请参考 <a href="https://leancloud.cn/docs/leanstorage_guide-php.html">PHP 数据存储开发指南</a></p>
  </body>
</html>
