@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Brand</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$brand->Brand}}" disabled>
                        </div>
                        <a href="{{url('brand')}}" class="btn btn-primary ms-4">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection