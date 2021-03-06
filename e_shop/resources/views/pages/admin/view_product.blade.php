@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0" style="margin:40px 30px 0px 30px">
                <div class="card-body">
                    <div class="form-group">
                        <form class="col-md-10">
                            <h2><span class="fas fa-box-open" aria-hidden="true"></span> Viewing Product<span>
                                <a href="{{ route('edit.product',$products->id) }}" class="btn btn-sm btn-info" style="margin-left:20px"><i class="fas fa-edit"></i> Edit</a>
                            </span></h2><br>
                            <div class="card" style="margin-bottom:10px">
                                <div class="card-body" style="padding:1">
                                    <label>Nama Produk: </label><br>
                                    <label>{{$products->product_name}}</label><br><br>
                                    <label>Harga Produk: </label><br>
                                    <label>Rp {{number_format($products->product_price,0)}}</label><br><br>
                                    <label>Kategori: </label><br>
                                    <label>{{$products->categories->category_name}}</label><br><br>
                                    <label>Deskripsi Barang:</label><br>
                                    <label>{{$products->description}}</label>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom:10px">
                                <div class="card-body">
                                    <label>Gambar:</label><br>
                                        @foreach($images as $image)
                                            <span><img class="img" style="height:150px" src="{{$image->product_image}}" alt="Card image"></span>
                                        @endforeach
                                </div>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection