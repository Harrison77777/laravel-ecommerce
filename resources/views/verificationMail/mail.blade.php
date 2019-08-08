<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <img height="50" width="50" src="{{asset('uploads/logo/5cec1b8ebacf0.jpg')}}" alt="">
        <p style="font-size:14px;">Dear {{$user->username}}, <br/> please verify your email address by following this link</p>
        <a href="{{url('/frontend/token')}}/{{$user->remember_token}}">Click Here</a>
    </div>
</body>
</html>