@extends('layout.admin')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if(count($errors)>0)
        <p class="alert alert-danger">{{$errors->first()}}</p>
    @endif
    <div class="form-group container">
        <form action="{{route('updateProduct', $item->id)}}" method="post" class="col-md-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <label>Nama Produk:</label>
            <input type="text" class="form-control" name="product_name" value="{{$item->product_name}}" placeholder="Produk">
            <br/>
            <label>Harga Produk:</label>
            <input type="text" class="form-control" name="product_price" value="{{$item->product_price}}" placeholder="Harga">
            <br/>
            <label>Kategori:</label>
            <select name="category_name">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $item->category_id ? 'selected="selected"' : ''}}>{{$category->category_name}}</option>
                @endforeach
            </select>
            <br><br>
            <label>Deskripsi Barang:</label>
            <textarea type="text" class="form-control" name="description" rows="5" maxlength="200" placeholder="Deskripsi Barang (Max. 200 Kata)">{{$item->description}}</textarea>
            <br><br>
            <label>Gambar:</label>
            <input class="form-control" type="file" name="img[]" multiple><br>
            <button type="submit" class="btn btn-primary float-right">Update</button><br><br>
        </form>
    </div>
    <div class="row">
        @foreach($images as $image)
            <div class="col-sm-2">
                <img class="img-fluid" src="{{$image->product_image}}"/><br>
                <a href="{{ route('deleteImage', $image->id) }}" class="btn btn-block btn-danger" name="action" value="deleteImage">Delete</a>
            </div>
        @endforeach
    </div>
            
        
</div>
@endsection