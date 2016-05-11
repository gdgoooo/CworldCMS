<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="{{$publicpath}}/public/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='{{$publicpath}}/public/css/family.css' rel='stylesheet' type='text/css'>
<link href='{{$publicpath}}/public/css/family2.css' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="{{$publicpath}}/public/js/jq.js"></script>
</head>
<body>
 <!--SIGN UP-->
 <h1>登录后台</h1>
<div class="login-form">
	<div class="close"> </div>
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
			<div class="clear"> </div>
	<div class="avtar">
		<img src="{{$publicpath}}/public/images/avtar.png" />
	</div>
			<form>
					<input type="text" class="text" value="">
						<div class="key">
							<input type="password" value="">
						</div>
			</form>
	<div class="signin">
		<input type="submit" value="Login" >
	</div>
</div>
</body>
<script type="text/javascript">
	$(".close").click(function(){
		var userAgent = navigator.userAgent;
		if (userAgent.indexOf("Firefox") != -1 || userAgent.indexOf("Presto") != -1) {
		    window.location.replace("about:blank");
		} else {
		    window.opener = null;
		    window.open("", "_self");
		    window.close();
		}
	});
</script>
</html>
