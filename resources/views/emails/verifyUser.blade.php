<!DOCTYPE html>
<html>
<head>
	<title>Xplortechs | Email Confirmation</title>
</head>

<body>
	<h2>Welcome {{$user['name']}}</h2>
	<br/>
	Name : {{$user['name']}} <br/>
	Username : {{$user['username']}}<br/>
	Email Address : {{$user['email']}}<br/>
	

	Please click on the below link to verify your email account <a href="{{url('user/verify', $user->verifyUser->token)}}">Confirmation Link</a>
</body>

</html>