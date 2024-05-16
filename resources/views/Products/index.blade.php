@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Product') }}</div>
                @if (session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">Add Data</a>
                    <table class="table">
                    <thead>
                        <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">id_brand</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($product as $data)
                            <tr align="center">
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->Product }}</td>
                            <td>{{ $data->Price }}</td>
                            <td>{{ $data->Description }}</td>
                            <td>{{ $data-> brand->Brand }}</td>
                            <form action="{{route('product.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td>
                                    <a href="{{route('product.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{route('product.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a>
                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Delete
                                    </button>
                                </td>
                            </form>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection