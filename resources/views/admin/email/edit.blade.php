@extends('layouts.admin', ['page' => 'email'])

@section('title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{{ route('admin.email.index') }}">Email</a></li>
    <li class="breadcrumb-item active"><a href="{{ URL::current() }}">Edit</a></li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6 col-12">
                
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Email</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.email.update') }}" method="post">
                    {{ method_field('PUT')  }}
                    @csrf
                    <input type="hidden" name="id" value="{{ $email->id }}">
                    <div class="form-group">
                        <label for="email">Email</label>
                    <input type="email" required name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $email->email }}">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>   
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $email->name }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>   
                        @enderror
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