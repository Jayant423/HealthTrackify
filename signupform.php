<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signupform.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<section  style="background-color:rgb(126, 211, 236);">
  <div class="container py-2 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="Titleimg.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body bg-light p-4 p-lg-5 text-black">

              <form action="insertt.php" method="post">
                  <h1 style="text-shadow:2px 2px pink;">Signup</h1>
                  <div class="form-outline mb-4">
           
                <p>First Name<br> <input type="text" name="first_name" required id="first_name" class="form-control form-control-lg" style="border-radius: 10px;"></p>

                  </div>
                  <div class="form-outline mb-4">
                 <p>Last Name<br> <input type="text" class="form-control form-control-lg" name="last_name" required  id="last_name" style="border-radius: 10px;"></p>

                  </div>
                  <div class="form-outline mb-4">
                      <p>Gender<br> <input type="text" class="form-control form-control-lg" name="gender" required id="gender" style="border-radius: 10px;"></p>
                  </div>

                  <div class="form-outline mb-4">
                                <p>Address<br> <input type="text" class="form-control form-control-lg" name="address" required  id="address" style="border-radius: 10px;"></p>
                  </div>

                  <div class="form-outline mb-4">
                     <p>Email<br> <input type="text" class="form-control form-control-lg" name="email" required  id="email" style="border-radius: 10px;"></p>

                  </div>

                  
                  <button class="btn btn-dark btn-lg btn-block" name="submit" id="submit" type="submit">Submit</button>
            <p>Already have an account? <a href="form.html" style="text-decoration:none; color:darkblue;text-shadow:2px 2px pink;">Login</a></p>
               
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>