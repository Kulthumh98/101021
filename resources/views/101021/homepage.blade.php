
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>{{config('app.name','Fee_Payment_Portal')}}</title>
       

        

    </head>
    <body style="background-color:#fff8e1;">
    
    <!--<div class = "#f5f5f5 grey lighten-4" style=" height: 100vh;">-->
    
    <nav class="#f57c00 orange darken-2" role="navigation">
    
    <div class="nav-wrapper container">
        
        <ul class="right hide-on-med-and-down">
        <li><a href ="/search">Search Student</a></li>
          <li> <a href ="/viewstudents">View Students</a></li>
      </ul>
    </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      
      <div class="row center">
        <h1 class="header col s12 light">Student Fee Payment Portal </h1>
      </div>
      <div class="row center">
        <a href="/student" id="download-button" class="btn-large waves-effect waves-light orange">Register Student</a>
        <a href="/fees" id="download-button" class="btn-large waves-effect waves-light orange">Fee Payment</a>
      </div>
      <br><br>

    </div>
  </div>
   <!--</div>
     -->
        <!--<div class="links">
         <a href = "/student">Student</a>
         <a href ="/fees">Fees</a>
         </div> -->
      <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('css/materialize.min.css')}}"></script>  
    </body>
</html>
