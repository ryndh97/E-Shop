@extends('layouts.app')

@section('content')

<div class="container-fluid my-container">
        <div style="padding:50px" >
                <div class="card-fluid bg-white" >
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%;" width="500px" src="/upload/{{$categories[0]->category_image}}"></a>
                        </div>
                    </div>
                </div>
            <div class="container-fluid my-container ">
                <div class="row">
                        @if(count($products) > 0)
                            @foreach ($products as $product)
                            <div class="col-md-3" style="padding-bottom:20px; padding-top:20px; ">
                                <div class="card shadow-lg p-3 mb-5" style="height:300px" >
                                        <a href="{{route('detailProduct', $product->id)}}"><img class="rounded mx-auto d-block img-responsive img-fluid" style="height: 100px; max-width: 100%; " src="{{ URL::to('/upload/'.$product->images[0]->product_image)}}"></a>
                                            <div class="card-body-fluid " >
                                                <h6 class="card-title-fluid text-left">{{$product->product_name}}</h6>
                                                <p class="card-title-fluid text-left">{{$product->categories->category_name}}</p>
                                                <h3 class="card-text-fluid text-right">Rp {{number_format($product->product_price, 0)}}</h3>
                                                <form method="POST" class="clearfix"  style="float:right; margin: 5px 0px;">
                                                    {{csrf_field()}}
                                                    <a href="#" class="btn btn-info" name="buy">Add to Cart</a>
                                                </form>                                
                                            </div>    
                                </div>
                            </div>
                                @endforeach
                            @else
                                <h2>No posts found!</h2>
                            @endif
                    </div>
                </div>
            </div>
</div>
        <div class="container-fluid ">
            <div class="col-md-4 offset-4">
            <ul class="pagination ">
                    <li class="page-item disabled">
                      <a class="page-link" href="#">&laquo;</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">&raquo;</a>
                    </li>
            </ul>
            </div>    
        </div>   

</body>
</html>

@endsection

