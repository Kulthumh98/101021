<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Register Student </title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
     
      <style>
      .form-submission{
      max-width:50px
      margin:50;
    }
      </style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    
    <body style="background-color:#fafafa grey lighten-5;">
    
      <div class = "#f5f5f5 grey lighten-3" >
          <nav class="#f57c00 orange darken-2" role="navigation">
            <div class="nav-wrapper">
               <a href="/home" class="brand-logo" >Homepage</a>
               <ul class="right hide-on-med-and-down">
                
                <li class="tab"><a href ="/search">Search Student</a></li>
                <li class="tab"> <a href ="/viewstudents">View Students</a></li>
              </ul>
            </div>
          </nav>
        </div> 

        <div style="border-radius: 5px; background-color: #fafafa grey lighten-5;padding: 20px;">
        <div class="row">
        <form method="post" class=" .form-submission"action ='/studentregistration'>  
        <legend><h3>Register Students..<h3></legend>
        @csrf
        <div class="row">
        <div class="input-field col s6">
        Student Number<input class="form-control" type = "text" required name="studentnumber">
        </div>
        <div class="input-field col s6">
        Full Name<input class="form-control" type = "text" required name="fullname">
        </div>
        </div>
        <div class="row">
        <div class="input-field col s6">
        Date Of Birth<input class="form-control" type = "date" required name="dob">
        </div>
        </div>
        <div class="row">
        <div class="input-field col s6">
        Address<input class="form-control" type ="text" required name="address">
        </div>
        </div>
        
       <input class="btn waves-effect waves-light"type ="submit" name="savebtn" value="Save Details" >
       </form>
       </div>
       </div>
      
     
    <script type="text/javascript" src="{{asset('css/materialize.min.css')}}"></script>  
  </body>
</html>
