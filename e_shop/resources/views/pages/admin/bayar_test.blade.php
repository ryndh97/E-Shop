@extends('layouts.admin')

@section('content')
    <div class="form-group container">
        <form action="{{ route('pay.order') }}" method="post" class="col-md-8">
            {{csrf_field()}}
            <label>total:</label>
            <input type="text" class="form-control" name="total">
            <br/>
            <button type="submit" class="btn btn-primary" style="float: right"><span class="fas fa-plus" style="margin-right:5px"></span> Tambahkan</button>
        </form>
    </div>
@endsection