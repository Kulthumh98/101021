<!DOCTPE html>
<html>
<head>

<title>View Student Records</title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
</head>
<body style="background-color:#fff8e1;">
 <div class = "#f5f5f5 grey lighten-3" >
                <nav class="#f57c00 orange darken-2" role="navigation">
                    <div class="nav-wrapper container">
                    <div class="col s12 " >
                    <a href="/home" class="brand-logo">Homepage</a>
                    <ul class="right hide-on-med-and-down">
                        
                        <li><a href ="/search" class="tab">Search Student</a></li>
                        <li> <a href ="/viewstudents" class="tab">View Students</a></li>
                    </ul>
                    </div>
                    </div>
                </nav>
         </div>
         <br>
         <br>
<div  class="col-sm-3 col-md-3 pull-right">
<form action="/search"   method="POST">

@csrf
 
<div class="input-group" >
<input type="text"  name="searchstudents" required/>
   <div class="input-group-btn">
    <button type="submit"  class="btn btn-default" >Search</button>
     <i class="glyphicon glyphicon-search"></i>
    </div>
    
    </div>
</form>

</div>

<div class='body' >
 
@if(isset($students))
    @if (count($students))
        <p><h3>Transaction of each student</h3></p><br>
        <table class="responsive-table" >
            <tr>
                        
                        <td>StudentNumber</td>
                        <td>Full Name</td>
                        <td>Amount</td>
                        <td>Date Of Payment </td>

                        
            </tr>
 
        @foreach ($students as $student)
            <tr>
                    
                        <td>{{ $student->Student_Number }}</td>
                        <td>{{ $student->Student->Full_Name }}</td>
                        <td>{{ $student->Amount }}</td>
                        <td>{{ $student->Date_Of_payment }}</td>

            </tr>  
        @endforeach
        @else
            <h2>No records found</h2>
        @endif  
    </table>
@endif
</div>
</body>
<script type="text/javascript" src="{{asset('css/materialize.min.css')}}"></script>  
</html>






