<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
  <div class="card">
    <div class="card-body">
        <form method="post" action="register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name"/>
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Your Email"/>
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" placeholder="Enter Your Password"/><br>
        <input type="submit" name="submit" value="Register" class="btn btn-success">
      </form>
    </div>
  </div>
       



</body>
</html>