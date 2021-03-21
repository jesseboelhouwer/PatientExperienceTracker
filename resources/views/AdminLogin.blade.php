<!-- this page is for the admin to login where they are going to put their email and password -->
<!DOCTYPE html>
<html>
<!-- the head has the title of the page and the link for Bootstrap Framework and the link for the css file  -->
<head>
    <title>Admin Login Form</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/cssFile.css')}}">
</head>

<!-- the body has the content of the page  -->
<body>

<section class="container-fluid">
    <!-- the title in the top middle of the page -->
    <div>
        <p class="text-center h1">Welcome to the Patient Survey System</p>
        <p class="text-center h3">Enter your Email and Password below</p>
    </div>
    <!-- the Dashboard of the page that has different options-->
    <div class="msb" id="msb">
        <p class="text-center fs-2">PET</p>

        <nav class="navbar navbar-default" role="naviga
        tion">
            <div class="btn-group-vertical" style=" margin-top:15%; width:100%">
                <ul class="nav flex-column" style="width:100%">
                    <!-- the Dashboard options-->
                    <!-- Sign Up option-->
                    <li class="nav-item">
                        <p class="text-center"><a class="text-center text-dark nav-link active" aria-current="page"
                                                  href="{{ url('/patientregistration')}}"><img src="{{asset('assets/images/signup.png')}}" width="25" height="25" class="d-inline-block align-right">Sign Up</a></p>
                    </li>
                    <!-- Patient Login option-->
                    <li class="nav-item">
                        <p class="text-center"><a class="text-dark nav-link active" aria-current="page"
                                                  href="{{ url('/patientlogin')}}"><img src="{{asset('assets/images/key.png')}}" width="25" height="25" class="d-inline-block align-right">Patient Login</a></p>
                    </li>
                    <!-- Administrator Login option-->
                    <li class="nav-item">
                        <p class="text-center"><a class="text-dark nav-link active" aria-current="page"
                                                  href= "{{ url('/adminlogin')}}" ><img src="{{asset('assets/images/key.png')}}" width="25" height="25" class="d-inline-block align-right">Administrator Login</a></p>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    <!-- the form where you have to put admin email the password-->
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method = "POST" action = "{{ url('/adminloginpage')}}">
                @csrf
                <!-- box for email-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-group form-inline">Email address</label>
                    <input type="email" class="form-control shadow-lg p-3 mb-5 bg-white rounded"
                           id="email" aria-describedby="emailHelp" name = "email">
                </div>
                    <!-- box for password-->
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-group form-inline">Password</label>
                    <input type="password" class="form-control shadow-lg p-3 mb-5 bg-white rounded"
                           id="password" name = "password">
                        <!-- the paragraph under password if the admin forgot their passwords-->
                        <p class=" text-center h6">Having trouble remembering your password?</p>
                    <p class="text-center h6">Enter your email and click <a href="#">here</a> to reset your password.
                    </p>

                        <!-- sign in button-->
                    <button class="btn btn-success btn-rounded w-100 btn-lg ">Sign in</button>

                </div>
            </form>

        </section>
    </section>
</section>
</body>

</html>
