<!DOCTYPE html>
<html>
    <?php echo
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: text/html');?>
<head>
    <title> Question Deletion Confirmation</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}"
          rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/cssFile.css')}}">
</head>
<style>

    #wrapper {
        margin-left: auto;
        margin-right: auto;
        width: 1519px;
    }

</style>
<div id="wrapper">
<body>
    <!---
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Default</a>
        <form class="d-flex">
            <button class="btn btn-success btn-rounded w-100 btn-lg dropdown-toggle drop" type="button"
                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                John Doe
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li>
                    <button class="dropdown-item" type="button">Action</button>
                </li>
                <li>
                    <button class="dropdown-item" type="button">Another action</button>
                </li>
                <li>
                    <button class="dropdown-item" type="button">Something else here</button>
                </li>
            </ul>
        </form>
    </div>
</nav>
-->

<div style=" margin-top:2%; margin-left:10%">
    <h3 style="font-size:32pt; color:seagreen; text-align:center;">Patient Experience Tracker</h3>
    <p class="text-center h2">{{$name}}</p>
    <p style="text-align:center; color:red" ;>Confirm Question Deletion Below</p>
</div>


<div class="msb" id="msb">
    <p class="text-center fs-2">PET</p>

    <nav class="navbar navbar-default" role="navigation">
        <div class="btn-group-vertical" style=" margin-top:15%; width:100%">
            <ul class="nav flex-column" style="width:100%">
                <!-- the Dashboard options-->
                <li class="nav-item">
                    <!-- the Dashboard options--> 
                    <p><a class="text-dark nav-link active" aria-current="page"  href="{{url('/')}}">
                            <img src="{{asset('assets/images/Home.png')}}" width="25" height="25" class="d-inline-block align-right"> Dashboard</a></p>
                </li>
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{ url('/accept/create')}}" >
                            <img src="{{asset('assets/images/request.png')}}" width="25" height="25" class="d-inline-block align-right"> Patient Registration</a></p>
                </li>
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{ url('/resetreview/create')}}">
                            <img src="{{asset('assets/images/request.png')}}" width="25" height="25" class="d-inline-block align-right"> Password Reset</a></p>
                </li>
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{ url('/profilesearch')}}">
                            <img src="{{asset('assets/images/pen.png')}}" width="25" height="25" class="d-inline-block align-right"> Patient Summary</a></p>
                </li>
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{ url('/report/create')}}">
                            <img src="{{asset('assets/images/pen.png')}}" width="25" height="25" class="d-inline-block align-right"> Generate Report</a></p>
                </li>
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{url('/passwordchangeadmin')}}">
                            <img src="{{asset('assets/images/key.png')}}" width="25" height="25" class="d-inline-block align-right"> Change Password</a></p>
                </li>
                <!-- Cooment out due to not MVP
                <li class="nav-item">
                    <p class="text-center"><a class="text-dark nav-link active" aria-current="page" href="{{url('/passwordchangeadmin')}}">
                            <img src="{{asset('assets/images/questionmark.png')}}" width="25" height="25" class="d-inline-block align-right">Admin Help</a></p>
                </li>
                -->
                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page"
                                              href= "{{ url('/addsurvey/create')}}" ><img src="{{asset('assets/images/survey.png')}}" width="25" height="25" class="d-inline-block align-right"> Create New Survey</a></p>
                </li>

                <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page" href="{{ url('/editSurveySelect')}}">
                            <img src="{{asset('assets/images/survey.png')}}" width="25" height="25" class="d-inline-block align-right"> Modify a Survey</a></p>
                </li>

                  <!--Logout Option-->
                  <li class="nav-item">
                    <p><a class="text-dark nav-link active" aria-current="page"
                                              href= "{{ url('/logout')}}" ><img src="{{asset('assets/images/key.png')}}" width="25" height="25" class="d-inline-block align-right"> Logout</a></p>
                </li>
            </ul>
        </div>
    </nav>
</div>

<form name="surveyForm" method="post" action="{{url('/delete')}}" style="margin-left: 0px">
    <br style="line-height:100;">

    @csrf
    <input type="hidden" id="SurveyName" name="SurveyName" value="{{$name}}">
    <input type="hidden" id="QuestionIndex" name="QuestionIndex" value="{{$questionIndex}}">   
    <div style="width: 1200px; margin-left:15%;" class="shadow-lg p-3 mb-5 bg-white rounded">

        @foreach ($questions as $q)
            <p class="h4"> {{str_replace("|",".",$q["Text"])}}</p> <!--Display the question-->

            @if ( $q["Type"]  == "DropDown")
                <select name="{{$q["Text"]}}">

                    <!--iterate over the options-->
                    @foreach(explode(",",$q['PossibleResponses']) as $option)
                        <div  class="btn btn-secondary dropdown-toggle" style=" margin-left: 310px">
                            <option value="{{$option}}">{{$option}}</option>
                        </div>
                    @endforeach
                    <br>
                </select>
                <br> <br>

            @elseif ($q["Type"]  == "Checkbox")

            <div style="width:60em;overflow-x: auto;white-space: nowrap;">                

                @foreach(explode(",",$q['PossibleResponses']) as $option)
                    <input class="form-check-input" type="checkbox" name="{{$q["Text"]}}[]" value="{{$option}}" checked>
                        <label class="form-check form-check-inline">{{$option}}</label>

                @endforeach
            </div>
                <br>
                <br> <br>

            @elseif ($q["Type"]  == "RadioButtons")

            <div style="width:60em;overflow-x: auto;white-space: nowrap;">                
                @foreach(explode(",",$q['PossibleResponses']) as $option)
                    <input type="radio" name="{{$q["Text"]}}" value="{{$option}}" checked>
                        <label>{{$option}}</label>&nbsp;&nbsp;&nbsp;
                @endforeach
            </div>

                <br>
                <br> <br>

            @elseif ($q["Type"]  == "Text")
                    <input type="text" name="{{$q["Text"]}}"><br>
                <br>
                <br> <br>

            @elseif ($q["Type"]  == "FreeText")
                <div class="mb-3">
                    <div class="form-check form-check-inline" style=" margin-left: -10px">
                        <textarea class="form-control" name="{{$q["Text"]}}" rows="3" cols="300"></textarea>
                    </div>
                </div>
                <br> <br>

            @endif
            <p class="double"></p>

        @endforeach

        <p style="text-align:center; font-size:32pt">Deletion Confirmation</p>
        <p style="text-align:center; color:red; font-size: 24pt">Caution: this cannot be undone</p>


        <input class="form-check-input" type="checkbox" name="Confirmation" value="True">
                        <label class="form-check form-check-inline">I confirm deletion of the above question.</label>

        <div style=" height: 4cm;">
            <button style="width: 5cm; margin-left: 40%; margin-top:2cm; " type="submit"
                    class="btn btn-success btn-rounded">Submit
            </button>
        </div>
    </div>

</form>

</body>
</div>

</html>