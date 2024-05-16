@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Product</div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Product</label>
                            <input type="text" class="form-control" name="product">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price Product</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description Product</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Id Brand Product</label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                    <option value="{{$data->id}}">{{$data->Brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{url('product')}}" class="btn btn-primary ms-4">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection