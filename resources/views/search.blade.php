@extends('master')
@section('content')
<div class="custum-product">
    <div class="col">
        <div class="trending-wrapper">
            <h1>Result For Products</h1>
            <div class="carouseal-inner">
                @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h5>{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
