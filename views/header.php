<!DOCTYPE html>
<html>
  <head>
    <title>ESN Forum</title>
    <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"> </script>
    <link rel="stylesheet" href="/esnforum/public/css/header.css" type="text/css" />
    <link rel="stylesheet" href="/esnforum/public/css/table.css" type="text/css" />
    <link rel="stylesheet" href="/esnforum/public/css/form.css" type="text/css" />
    <!--<meta name="viewport" content="width=device-width">-->
  </head>
  <body>
    <div id="header">
      <a href='/esnforum/index'>Home</a>
      <a href='/esnforum/dashboard'>Dashboard</a>
      <?php if (Session::logged() ): ?>
      <a href='/esnforum/login/logout'>Logout</a>
      <?php else: ?>
      <a href='/esnforum/login'>Login</a>
      <?php endif; ?>
    </div>
    <div id="subheader"></div>
    <div id="main">