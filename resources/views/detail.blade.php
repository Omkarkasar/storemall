@extends('master')
@section('content')
  <div class="container">
    <div class="row">
      <div><a href="/">Go Back</a></div>
      <div class="col-sm-6">
      <br>
      <br>
        <img class="detail-img" src="{{$product['gallery']}}" alt="{{$product['name']}}">
      <br> 
      <br>
      <br> 
      <br>
      <br> 
    
      </div>
      <div class="col-sm-6">
        
        <br>
        <h2>Name: {{$product['name']}}</h2>
        <h3>Price: ${{$product['price']}}</h3>
        <h4>Category: {{$product['category']}}</h4>
        <h4>Description: {{$product['description']}}</h4>
        <br>
        <form action="/add_to_cart" method="post">
         <input type="hidden" name="product_id" value="{{$product['id']}}"></input>
          @csrf
          <button class="btn btn-success">Add To Cart</button>
        </form>
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
@endsection
