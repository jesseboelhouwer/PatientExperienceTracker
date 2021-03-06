<!DOCTYPE html>
<html>
<head>
    <title>Question Deletion Confirmation</title>

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/question_deletion_confirmation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-reset_password.css')}}">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<section class="container-fluid">

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Default</a>
            <form class="d-flex">
                <button class="btn btn-success btn-rounded w-100 btn-lg dropdown-toggle drop" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> Mystery Admin
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </form>
        </div>
    </nav>


    <p class="text-center fs-2">Question Deletion Information</p>

    <div class="cc">
        <!-- UT ANYTHING HERE-->
    </div>


    <!--class="text-center h6" style="text-align:right; padding-right: 500px"-->
    <!-- part to save the file-->
    <div class="aa">
        <p class="text-center h6">To prevent loss of data, please save report reflecting deleted
        <p class="text-center h6"> question at this moment to local disk</p>
        <div class="cent">
            <button class="greenbutton" type="submit"> <i class='fas fa-save'></i> Save to file</button>
        </div>





        <br>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br> <br> <br> <br>
        <!-- part to delet the file-->
        <p class="text-center h6" > After saving local copy of the report, click
            submit below</p>
        <p class="text-center h6" > to confirm deletion of survey question</p>
        <div class="cent" style="top: 65%;">
            <button class="redbutton"> Confirm Delet</button>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- The dashborad which has all the options for the admin. This dashboard is located in the side of the page-->
    <div class="msb" id="msb">
        <p class="text-center fs-2">PSS</p>

        <nav class="navbar navbar-default" role="navigation">
            <div class="btn-group-vertical" style=" margin-top:15%; width:100%">
                <ul class="nav flex-column" style="width:100%">
                <li class="nav-item">
                        <!-- the Dashboard options-->
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/')}}">
                                <img src="{{asset('assets/images/Home.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Dashboard</a></p>
                    </li>
                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/accept/create')}}">
                                <img src="{{asset('assets/images/request.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Patient Registration</a></p>
                    </li>
                    <li class="nav-item">

                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/resetreview/create')}}">
                                <img src="{{asset('assets/images/request.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Password Reset</a></p>

                    </li>
                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/profilesearch')}}">
                                <img src="{{asset('assets/images/pen.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Patient Summary</a></p>
                    </li>
                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/report/create')}}">
                                <img src="{{asset('assets/images/pen.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Generate Report</a></p>
                    </li>

                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{url('/passwordchangeadmin')}}">
                                <img src="{{asset('assets/images/key.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Change Password</a></p>
                    </li>


                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/addsurvey/create')}}"><img src="{{asset('assets/images/survey.png')}}"
                                                                        width="25" height="25"
                                                                        class="d-inline-block align-right"> Create New
                                Survey</a></p>
                    </li>


                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/editSurveySelect')}}">
                                <img src="{{asset('assets/images/survey.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Modify a Survey</a></p>
                    </li>

                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/adminsurveyselection')}}">
                                <img src="{{asset('assets/images/survey.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Fill Out Survey</a></p>
                    </li>

                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/medication')}}">
                                <img src="{{asset('assets/images/medication.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Add Medication</a></p>
                    </li>

                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/condition')}}">
                                <img src="{{asset('assets/images/clinic.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Add Clinic</a></p>
                    </li>

                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/adminhelp')}}">
                                <img src="{{asset('assets/images/questionmark.png')}}" width="25" height="25"
                                     class="d-inline-block align-right"> Admin Help</a></p>
                    </li>


                    <!--Logout Option-->
                    <li class="nav-item">
                        <p><a class="text-dark nav-link active" aria-current="page"
                              href="{{ url('/logout')}}"><img
                                    src="{{asset('assets/images/key.png')}}" width="25" height="25"
                                    class="d-inline-block align-right"> Logout</a></p>
                    </li>
                </ul>
            </div>
        </nav>
    </div>








    <div style="left:700px; position:absolute; top:300px">

    </div>



</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
