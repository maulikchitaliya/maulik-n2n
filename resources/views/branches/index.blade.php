@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3 mt-3" style="font-size: 2rem; font-weight: bold">List of Branch</h1>
        <div class="d-flex mb-3 justify-content-end">
       
        <a href="{{ route('branches.create') }}" class="btn btn-primary ">Create Branch</a>
    </div>
    
        @if (session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
        @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Latitude</th>
            <th>Longitude</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
          <tr>
            <th scope="row">{{{$branch->id}}}</th>
            <td>{{{ $branch->name }}}</td>
            <td>{{{ $branch->address }}}</td>
            <td>{{$branch->latitude}}</td>
            <td>{{$branch->longitude}}</td>
            <td class="d-flex">
                <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-primary">Edit</a>
             
                    <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                    </form>
            
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
