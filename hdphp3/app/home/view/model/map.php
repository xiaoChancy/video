<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>表单验证</title>
	<link href="resource/hdjs/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<if value="$errors">
	<div class="alert alert-danger">
		<foreach from="$errors" value="$v">
			{{$v}}<br/>
		</foreach>
	</div>
</if>
<form action="" method="post">
	帐号: <input type="text" name="name"><br/>
	年龄: <input type="text" name="mail">
	<button>提交</button>
</form>
</body>
</html>