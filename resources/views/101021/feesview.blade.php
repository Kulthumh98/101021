<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Fees Payment </title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
    .form-submission{
      max-width:50px
      margin:50;
    }
    </style>
    </head>
    <body>
       <div class = "#f5f5f5 grey lighten-3" >
          <nav class="#f57c00 orange darken-2" role="navigation">
            <div class="nav-wrapper container">
              <a href="/home" class="brand-logo">Homepage</a>
              <ul class="right hide-on-med-and-down">
                
                <li><a href ="/search" class="tab">Search Student</a></li>
                <li> <a href ="/viewstudents" class="tab">View Students</a></li>
              </ul>
            </div>
          </nav>
        </div>
        
      <div style="border-radius: 5px; background-color: #fafafa grey lighten-5;padding: 20px;">
      <div class="row">
      <form class='form-submission' method="post" action ="/feepayment">
      <legend><h3>Update Student Payment<h3></legend><br>
      @csrf
      <div class="row">
      <div class="input-field col s6">
       Student Number<input   type = "text" required name="studentnumber">
       </div>
       <div class="input-field col s6">
      
       Date Of Payment<input  type = "date" required name="dop">
        </div>
       </div>
        <div class="row">
      <div class="input-field col s6">
       
       Amount paid <input   type="number" required name="amountpaid">
        </div>
       </div>
       
       <input  type ="submit" class="btn waves-effect waves-light" name="savebtn" value="Save Payment Details">
      </form>
      <script type="text/javascript" src="{{asset('css/materialize.min.css')}}"></script>  
    </body>
</html>
