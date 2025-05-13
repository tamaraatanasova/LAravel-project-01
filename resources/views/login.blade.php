@extends('layouts.app')

@section('title', 'Log in')

@section('container')
<div class="container text-white p-4 text-uppercase">
    <div class="row justify-content-center" >
        <div class="col-12 col-md-6">
            <form  action="{{ route('submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                    @error('first_name')
                        <div class="bg-danger ">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                    @error('last_name')
                        <div class="bg-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="bg-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection