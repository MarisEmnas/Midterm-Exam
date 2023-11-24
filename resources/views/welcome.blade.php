!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
    body{
	margin: 0;
	padding: 0;
	background: url(https://wallpaperaccess.com/full/661793.jpg);
	background-size: 100%;
	font-family: sans-serif;
	background-repeat: no-repeat;
}
.loginbox{
	width: 320px;
	height: 420px;
	background: #333333;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top:-50px;
	left: calc(50% - 50px);

}
h1{
	margin:0;
	padding: 0;
	text-align: center;
	font-family: sans-serif;
	font-size: 30px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]{
	border:none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px
}
.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background:#005C66;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: #8E8C7F;
	text-align: center;
}
</style>
<body>
	<div class="loginbox">
		<img src="https://cdn-icons-png.flaticon.com/512/6596/6596121.png" class="avatar">
		<h1>Login</h1>
		<form>
			<p>User Name</p>
			<input type="text" name="" placeholder="Enter username">
			<p>Password</p>
			<input type="password" name="" placeholder="Enter password">
			<input type="Submit" name="" value="login">
			<a href="a">Lost your password?</a>
		</form>
		
	</div>

</body>
</html>