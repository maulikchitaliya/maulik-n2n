@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3 mt-3" style="font-size: 2rem; font-weight: bold">Create Branch</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('branches.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="name">Branch Name:</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Branch Name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    placeholder="Address" required>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="latitude">Latitude:</label>
                                <input type="text" name="latitude" id="latitude" class="form-control"
                                    placeholder="Latitude" required>
                                @error('latitude')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="longitude">Longitude:</label>
                                <input type="text" name="longitude" id="longitude" class="form-control"
                                    placeholder="Longitude" required>
                                @error('longitude')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ">Create Branch</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
