<!DOCTYPE html>
<html>
<head>
    <title>Admin Help</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-reset_password.css')}}">

<!--
    <script src="{{ URL::asset('https://kit.fontawesome.com/a076d05399.js') }}" crossorigin='anonymous'></script>
    -->

    <style>
        [type=radio] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        [type=radio] + img {
            cursor: pointer;
        }

        [type=radio]:checked + img {
            outline: 2px solid #f00;
        }

        li {
            list-style-type: circle;
            display: list-item
        }

        #wrapper {
            margin-left: auto;
            margin-right: auto;
            width: 1519px;
        }

        body {
            overflow: initial;
        }
    </style>

</head>

<div id="wrapper">
    <body style="margin-top: 1cm">
    <div style="margin-left:8.5%">
        <h2 style="text-align:center; color:seagreen">Admin Help Information</h2>
        <br>

        <div>
            <ul class="list-group" style="margin-left: 100px">
                <li><a href="#create">Create a New Survey</a></li>
                <li><a href="#modify">Modify a Survey</a></li>
                <li><a href="#delete">Delete a Question</a></li>
                <li><a href="#add">Add a Question</a></li>
                <li><a href="#survey">Fill Out a Survey</a></li>
                <li><a href="#generate">Generate a Report of the Responses</a></li>
                <li><a href="#profile">View a Patient's Profile</a></li>                
                <li><a href="#accept">Accept New Patients</a></li>
                <li><a href="#password">Accept Password Reset Requests</a></li>
            </ul>

            <br>
            <hr>

            <div style="margin-left: 100px">

                <h4 style="margin-top: 30px; color:seagreen" id="create">Create a New Survey</h4><br>
                <h6>
                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) To create a new survey a logged in Adminstrator must select the option Create New Survey 
                    from either either the right-hand sidebar or the dashboard options in the middle of the Administrator
                    Dashboard.   <br><br>

                    Step 2) The Administrator is then served a page that will allow them to fill in infomration regarding
                    the new survey. The Administrator must choose a name for this new survey as well as the condition it serves and
                    a survey type from either PREM or PROM. If a Survey is a PHysician only survey select Phyisician Survey from the dropdown.
                    This will create a survey that is only completealbe by an Administrator.                
                    <br><br>

                    Step 3) Once details are filled in the Administrator can click on the Create button under the form to send the request to
                    the database. Once complete the user will be returned to the Dashboard with the message "New survey has been created successfully."
                    br><br>

                    Step 4) To populate the newly created survey with questions you may use the Modify a Survey Feature explained below.
                    </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="modify">Modify a Survey</h4><br>
                <h6>
                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) To modify a survey a logged in Administrator must select the option Modify a Survey from
                    either the right-hand sidebar or the dashboard options in the middle of the Administrator
                    Dashboard. <br><br>

                    Step 2) The Administrator is then served a page that will allow them to select a survey name
                    from a list of the existing surveys that are served by the application. The administrator can
                    select a survey to modify from this list. <br><br>

                    Step 3) At this step the Administrator will be presented with a page to select the modification
                    they would like to make. They will see the current state of the survey and be able to complete
                    one of two actions at this page.
                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="delete">Delete a Question</h4><br>
                <h6>

                    Step 4A) If the Administrator would like to delete a question the user can look at the current
                    state of the survey. Each question within the survey will have a red ‘X’ that will act as a
                    selection button to delete that question. Selecting to click on one of these buttons will lead
                    to page where the Administrator will need to confirm they would like to delete the question.
                    <br><br>

                    Step 5A) On the Question Deletion Confirmation page the user will see a warning that the action
                    they are about to complete cannot be undone and they will need to confirm that they would like
                    to continue. After checking a confirmation checkbox the Administrator can click to submit the
                    deletion. This will delete the selected question and redirect the Administrator to their
                    respective dashboard with a success message.
                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="add">Add a Question</h4><br>
                <h6>

                    Step 4B) Underneath the current status of the selected survey the user will see a small form
                    where they can select to add a question. These are the fields and how to use them to add a
                    question. <br><br>

                    New Question #: this is the position the question in the survey. For example, if you would like
                    to create a new question that appears as the new first question enter 1 into this field. The
                    questions after this question will shift one position down in the question order.<br><br>

                    Question Type: This is the type of the question. There are currently 4 Question Types supported
                    by the application: Freetext, CheckBox, RadioButtons. And DropDown <br><br>
                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="survey">Fill Out a Survey</h4><br>
                <h6>
                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) To fill out a survey a logged in Administrator must select the option Fill Out Survey from
                    either the right-hand sidebar or the dashboard options in the middle of the Administrator
                    Dashboard.<br><br>

                    Step 2) The Administrator is then served a page that will allow them to select a survey name
                    from a list of the existing surveys that are served by the application. The administrator can
                    select a survey to complete from this page.
                    <br><br>
                    Note: Surveys listed with "(Physician)" at the end of the survey name are surveys that are to be completed by
                    Administrators only and cannot be seen by logged in patients to complete. These would be the type of surveys that
                    are to be completed with the Administrator. Surveys without this in their names are viewable by logged in patients
                    with the condition served by the survey and can be either completed themselves or by the Administaror.
                    <br><br>

                    Step 3) At this step the Administrator will be presented with the questions in the survey starting with needing to
                    identify the patients email that the survey is being completed for. After entering resonses to questions the Adminstrator can hit
                    the Submit button to Submit the survey responses to the database. At this point the Adminstrator will be redirected back to the dashboard
                    with a message: "Responses have been saved successfully.""
                    <br><br>
                    Note: Surveys can only be completed by a given patient once per day. If there is already a response for a given survey name on that day
                    you will be redirected to the dashboard with the error message: "Responses were not saved. Patients cannot resubmit the survey on the same day."
                    Also if there is not a registered patient with the provided email you will be redirected to the dashboard with the error message:
                    "Survey was not saved. The provided email address does not match any patients."                    
                    
                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="generate">Generate a Report of the Responses</h4><br>
                <h6>
                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) To generate a report of survey responses a logged in Administrator must select the option Generate Report from
                    either the right-hand sidebar or the dashboard options in the middle of the Administrator
                    Dashboard. <br><br>

                    Step 2) The Administrator is then served a page that will allow them to select a survey name
                    from a list of the existing surveys that are served by the application. There are also options to customize
                    the contents of the report. THey will be able to narrow down the reports scope by factors upon the patients profile.
                    They will be able to select to customize the report based on: Gender, Age, Weight, Height, and any medications. <br><br>

                    Step 3) After selected the desired options the Adminisrator will confirm their report request by hitting the submit button.
                    The application will poll the responses for the survey name in question and generate a table as well as a CSV file that the Administrator can download
                    to their local system. <br><br>

                    Note: If there is no patients that match the specified criteria the page will refresh with the message. "No records match the specified data."
                    If the Administrator selects to not save a generated report locally generated reports are also saved in the applications storage located.
                    in .\PatientExperienceTracker\Storage\app. These reports will be timestamped with their creation time.

                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="profile">View a Patient's Profile</h4><br>
                <h6>
                    Feature Prerequisites: A logged in Administrator <br><br>

                    Step 1) To view a profile summary for a patient a logged in Administrator must select the option View Patient Prorfile/Summary from
                    either the right-hand sidebar or the dashboard options in the middle of the Administrator
                    Dashboard. <br><br>

                    Step 2) The Administrator is then served a page that will allow them to search for a patient in one of two ways.
                    If they know the email they can search by email which will load the patients profile if one exists for the supplied email If one does not
                    the page will reload with the message "No records match the specified data." A Administrator may also choose to serach by first and/or
                    last name. If they search by name and there exists patients that match the criteria the Administrator will be directed to a page containing
                    a table with the list of profiles with the combination of first and last name specified On this page selecting view profile for the profile they
                    wish to view will direct to the summary page for the selected patient. <br><br>

                    Step 3) On the Sumary page the Administrator may view the summary of the paitent data as well as view any completed surveys. If the Administrator would
                    like to view reponses to a survey they may click on the View Survey button supplied within each row of the repsonses table. This will load a page to view
                    the responses for that survey.
                </h6>
                <br><br>                

                <h4 style="margin-top: 30px; color:seagreen" id="accept">Accept New Patients</h4><br>
                <h6>

                    <!--Accepting new patient instruction-->
                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) If you would like to check if there is any New Patient Registrations or Password Reset
                    Requests to review select “Patient Registrations” or “Patient Password Reset Requests” from
                    either the left-hand sidebar or options in the center of the Dashboard. <br> <br>

                    Step 2) A page is presented that will list patients that have registered to the application.
                    After reviewing a request for registration or a password reset there will be a green checkmark
                    or red ‘X’ to select. After choosing your option for each hit the submit button. NOTE: At this
                    step if you do not recognize a new patient Selecting the red ‘X’ beside their information will
                    delete their tentative profile and deny the registration request. <br><br>

                    Step 3) After reviewing all requests and selecting to either approve or deny each request click
                    on the submit button at the bottom of the list of requests. Any accepted requests in the New
                    Patient Registration Page will receive an email that their registration request has been
                    accepted and they may login with credentials that they supplied. On the Patient Password Reset
                    Request Page when you click submit the application will create a temporary random password for
                    the patient and will send it to them in a brief email. Any denied registration requests will
                    have the profile deleted.
                </h6>
                <br><br>

                <h4 style="margin-top: 30px; color:seagreen" id="password">Accept Password Reset Requests</h4><br>
                <h6>

                    Feature Prerequisites: A logged in Administrator. <br><br>

                    Step 1) If you would like to check if there is any Password Reset
                    Requests to review, select “Patient Password Reset Requests” from
                    either the left-hand sidebar or options in the center of the Dashboard. <br> <br>

                    Step 2) A page is presented that will list patients that requested to change their password at the
                    login page.
                    After reviewing a request for password reset there will be a green checkmark
                    or red ‘X’ to select. After choosing your option for each hit the submit button. NOTE: Selecting the
                    red
                    ‘X’ beside their information will ignore the password reset request,
                    so the patient might not be able to login later. <br><br>

                    Step 3) After reviewing all requests and selecting to either approve or deny each request click
                    on the submit button at the bottom of the list of requests. On the Patient Password Reset
                    Request Page, when you click submit the application will create a temporary random password for
                    the patient and will send it to them in a brief email.
                </h6>
                <br>
            </div>
        </div>
    </div>

    <div class="msb" id="msb">
        <p class="text-center fs-2">PET</p>

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
                              href="{{ url('/addsurvey/create')}}"><img
                                    src="{{asset('assets/images/survey.png')}}" width="25" height="25"
                                    class="d-inline-block align-right"> Create New Survey</a></p>
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
    <div style="margin-left: 300px; position:absolute; top:205px">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
                crossorigin="anonymous"></script>

    </div>
    </body>

</div></html>
