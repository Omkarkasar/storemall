<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Com</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     {{View::make('header')}}
    @yield('content');
    {{View::make('footer')}}

</body>
<style>
    img.slider-img
    {
        height: 400px; /* Set a fixed height */
        object-fit: cover; /* Ensure the image covers the container without distortion */
    }
    .slider-text {
    background-color: rgba(224, 245, 241, 0.5); /* Light teal color with 50% transparency */
    }
    .trending-img
    {
        height:100px;
    }
    .trending-item
    {
        float:left;
        width: 20%;
    }
    .trending-wrapper
    {
        margin:10%;
    }
    .detail-img
    {
        height:200px;
    }
    .search-box
    {
        width:500px !important;
    }
    

</style>
</html>  