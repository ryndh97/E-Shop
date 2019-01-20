@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(count($products) > 0)
            <h1>Product</h1>
            <a href="product/new" class="btn btn-primary float-right" name="create">Create</a>
            <div class="table-responsive">
                <table class="table">
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->categories->category_name}}</td>
                            <td>Rp {{$product->product_price}}</h4>
                            <div class="float-right">
                                <a href="{{'product/'.$product->id.'/edit' }}" class="btn btn-primary" name="edit" value="Edit">Edit</a>
                                <form method="POST" action="{{route('deleteProduct', $product->id)}}">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-primary" name="delete" data-confirm="Delete data?">Delete</button>
                                </form>                                
                            </div> 
                        </tr>
                    @endforeach
                </table>
            </div>
            @else
                <h2>No posts found!</h2>
            @endif
        </div>
    </div>

    
@endsection