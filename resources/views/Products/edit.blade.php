@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Brand</div>
                <div class="card-body">
                    <form action="{{route('product.update', $product->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->Product}}">
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="price" value="{{$product->Price}}">
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="description" value="{{$product->Description}}">
                            <label for="exampleInputEmail1">Id Brand Product</label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                    <option value="{{$data->id}}"{{$data->id == $product->id_brand ? 'selected' : ''}}>{{$data->Brand}}</option>
                                @endforeach
                            </select>
                        <button type="submit" class="btn btn-primary ms-4 mt-3">Edit Data</button>
                        <a href="{{url('product')}}" class="btn btn-primary ms-4 mt-3">Back</a>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection