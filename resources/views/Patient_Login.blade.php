<!DOCTYPE html>
<html>

<head>
    <title>Patinet Login</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/cssFile.css')}}">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>

<section class="container-fluid">
    <div>
        <p class="text-center h1">Welcome to Patient Experience Tracker</p>
        <p class="text-center h3">Enter your Email and Password to Login</p>
    </div>
    <div class="msb" id="msb">
        <p class="text-center fs-2">PET</p>

        <nav class="navbar navbar-default" role="navigation">
            <div class="btn-group-vertical" style=" margin-top:15%; width:100%">
                <ul class="nav flex-column" style="width:100%">
                    <li class="nav-item">
                        <p class="text-center"><a class="text-center text-dark nav-link active" aria-current="page"
                                                  href="#">
                                                  <img src = "signup.png" width="25" height="25" class="d-inline-block align-right"> Sign Up
                                                </a></p>
                    </li>
                    <li class="nav-item">
                        <p class="text-center"><a class="text-dark nav-link active" aria-current="page"
                                                  href="#">
                                                  <img src = "key.png" width="25" height="25" class="d-inline-block align-right">Patient Login
                                                </a></p>
                    </li>
                </ul>
            </div>

        </nav>
    </div>


    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-group form-inline">Email address</label>
                    <input type="email" class="form-control shadow-lg p-3 mb-5 bg-white rounded"
                           id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-group form-inline">Password</label>
                    <input type="password" class="form-control shadow-lg p-3 mb-5 bg-white rounded"
                           id="exampleInputPassword1">
                    <p class=" text-center h6">Having trouble remeber your password?</p>
                    <p class="text-center h6">Enter your email and click <a href="#">here</a> to reset your password
                    </p>


                    <button class="btn btn-success btn-rounded w-100 btn-lg" type="submit">Login</button>

                </div>
            </form>

        </section>
    </section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>

</html>