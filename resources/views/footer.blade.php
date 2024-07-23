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
            background-color: #d3d3d3; /* Light gray background color for navbar */
            border: none; /* Remove default border */
            border-radius: 0; /* Remove border radius */
            margin-bottom: 0; /* Remove bottom margin */
        }
        .navbar-custom .navbar-brand {
            color: #333; /* Darker gray text color for brand */
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
        .footer-custom {
            background-color: #d3d3d3; /* Light gray background color for footer */
            border: none; /* Remove default border */
            border-radius: 0; /* Remove border radius */
            padding: 20px 0; /* Add padding */
            text-align: center; /* Center the text */
        }
        .footer-custom .footer-text {
            color: #333; /* Darker gray text color for footer */
        }
        .footer-custom a {
            color: #333; /* Darker gray text color for links */
            text-decoration: none; /* Remove underline from links */
        }
        .footer-custom a:hover {
            text-decoration: underline; /* Underline links on hover */
        }
    </style>
</head>
<body>



<!-- Your content goes here -->

<div class="clear:both">
<footer class="footer-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Contact Us</h4>
                <p>Address: 123 Street Name, City, Country</p>
                <p>Phone: +123 456 7890</p>
                <p>Email: info@example.com</p>
            </div>
            <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Created By</h4>
                <p>Developed by: Omkar Kasar</p>
                <p>Email: yourname@example.com</p>
                <p>&copy; 2024 Your Company. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
