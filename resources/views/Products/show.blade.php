@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Product</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$product->Product}}" disabled>
                        </div>
                        <a href="{{url('product')}}" class="btn btn-primary ms-4">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection