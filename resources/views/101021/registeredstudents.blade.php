<!DOCTPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>View Student Records</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

     
</head>
<body style="background-color:#fff8e1;">
   <nav class="#f57c00 orange darken-2" role="navigation">
    
    <div class="nav-wrapper container">
        <a href="/home" class="brand-logo" >Homepage</a>
        <ul class="right hide-on-med-and-down">
        <li><a href ="/search">Search Student</a></li>
        <li> <a href ="/viewstudents">View Students</a></li>
        </ul>
    </div>
   </nav>
    <br>
    <br>
    


<table class="container">

<tr style="text-align:center;">
            
            <td><b>Student Number</b></td>
            <td><b>Full Name</b></td>
            <td><b>Total Fees Paid</b></td>
 </tr>
    @foreach ($students as $student)
    <tr style="text-align:center;" >
            
                <td>{{ $student->Student_Number }}</td>
                <td>{{ $student->Full_Name }}</td>
                <td>{{ $student->total_fees }}</td>
    </tr>
    @endforeach
  
</table>


<script type="text/javascript" src="{{asset('css/materialize.min.css')}}"></script>  
</body>
</html>






