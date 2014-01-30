<!DOCTYPE html>
<html>
  <head>
    <title>ESN Forum</title>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="/esnforum/public/css/header.css" type="text/css" />
     <link rel="stylesheet" href="/esnforum/public/css/table.css" type="text/css" />
    <!--<meta name="viewport" content="width=device-width">-->
  </head>
  <body>
    <div id="header">
      <a href='/esnforum/index'>Home</a>
      <?php if (Session::get("dummy") ): ?>
      <a href='/esnforum/login/logout'>Logout</a>
      <?php else: ?>
      <a href='/esnforum/login'>Login</a>
      <?php endif; ?>
    </div>
    <div id="main">