@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Brand') }}</div>

                <div class="card-body">
                    <a href="{{ route('brand.create') }}" class="btn btn-primary">Add Data</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($brand as $data)
                            <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->Brand }}</td>
                            <form action="{{route('brand.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td>
                                    <a href="{{route('brand.edit', $data->id)}}" class="btn btn-success ms-4">Edit</a>
                                    <a href="{{route('brand.show', $data->id)}}" class="btn btn-warning ms-4">Show</a>
                                    <button type="submit" class="btn btn-danger ms-4">Delete</button>
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