<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
    </head>
<body>
	<div class="container">
	  <div class="title">Hello {{{ $name or '' }}}</div>
	  <div class="content">
	    <form action="register" method="post">
	      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	      <input type="text" name="name" value="">
	      <input type="submit" value="สมัครสมาชิก">
	    </form>
	  </div>
	</div>
</body>
</html>