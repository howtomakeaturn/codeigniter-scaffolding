<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">


		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
      <a class="btn btn-lg btn-success" href="#">
        <i class="fa fa-flag fa-2x pull-left"></i> Font Awesome<br>Work well here</a>

      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="fa fa-caret-down"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
          <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
          <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Bootstrap js work well here</a></li>
        </ul>
      </div>    

      <div class='alert alert-info'><p><i class="fa fa-camera-retro fa-3x"></i> Bootstrap css work well here</p></div>
      <div id='message' class='alert alert-success'>jquery work well here!</div>
      <button id='jq' class='btn btn-warning'>Click Me!</button>
      <script>
          $('#message').hide();
          $('#jq').click(function(){
              $('#message').fadeIn();
          })
      </script>

</body>
</html>
