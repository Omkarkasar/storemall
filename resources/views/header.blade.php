




<!-- ?php
 use App\Http\Controllers\ProductController;
 if(Session::has('user'))
 {
 $total=ProductController::cartItem();
 }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar Example</title>

    <!-- Bootstrap CSS (v3.4.1) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS (v3.4.1) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background color */
        }
        .navbar-custom {
            background-color: #808080; /* Dark background color */
            border: none; /* Remove default border */
            border-radius: 0; /* Remove border radius */
            margin-bottom: 0; /* Remove bottom margin */
        }
        .navbar-custom .navbar-brand {
            color: #fff; /* White text color for brand */
        }
        .navbar-custom .navbar-form {
            padding-top: 10px; /* Adjust top padding for form */
            padding-bottom: 10px; /* Adjust bottom padding for form */
        }
        .navbar-custom .navbar-form .form-group {
            margin-bottom: 0; /* Remove bottom margin for form group */
        }
        .navbar-custom .navbar-form .form-control {
            border-radius: 0; /* Remove border radius for input */
        }
        .navbar-custom .navbar-form .btn {
            border-radius: 0; /* Remove border radius for button */
        }
        .navbar-custom .navbar-nav>li>a {
            color: #fff; /* White text color for navbar links */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">OmkarEcom</a>
        </div>
           
        <form class="navbar-form navbar-left" action="/search" method="GET">
    <div class="form-group">
        <input name="query" type="text" class="form-control search-box" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>

        
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
            <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
             @if(Session::has('user'))
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>
                </ul>    
             </li>
             @else
             <li><a href="/login"> Login </a></li>
             @endif
        </ul>
    </div>
</nav>

<!-- Your content goes here -->

</body>
</html>
