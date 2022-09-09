<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="padding: 50px;" class="container">
    <div class="col">
    <marquee behavior="" direction=""><h1>Silahkan Login Rumah Sakit Jiwa Bahagia</h></marquee>
    <form action="session.php" method="post">
        <div>
            Username : 
            <br>
            <input type="text" name="username">
        </div>
        <div>
            Password : 
            <br>
            <input type="password" name="password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <marquee behavior="" direction=""><h1>Silahkan Login Rumah Sakit Jiwa Bahagia</h></marquee>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://avatars.githubusercontent.com/u/109265532?v=4" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" name="username" 
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button></div>
            </div>
</form>
  </form>
</body>
</html>