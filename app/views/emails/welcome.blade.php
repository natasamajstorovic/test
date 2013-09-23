
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>Welcome to my site</h2>

<div>
Your sign up details are below:
</div>
<div>{{$data['username']}}</div>
<div>{{$data['password']}} </div>
<div>{{$key}} </div>
<a href={{"http://projekatSajt.dev/activation?email=$email&key=$key"}}>Kliknite ovde za aktivaciju</a>

</body>
</html>