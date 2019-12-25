@extends('layouts.admin', ['page' => 'dashboard'])

@section('title', 'Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ route('admin.user.create') }}">Add User</a></li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-12">
                
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Add New User</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                    <input type="email" required name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" required name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_cofirmation">Confirm Password</label>
                        <input type="password" required name="password_confirmation" id="password_cofirmation" class="form-control">
                    </div>

                    <div class="w-100 mt-3">
                        <button class="btn btn-primary px-4 float-right" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection