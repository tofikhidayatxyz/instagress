@extends('layouts.admin', ['page' => 'dashboard'])


@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ route('admin.image.index', $user->id) }}">Images</a></li>
@endsection

@section('content')

    <style>
        .card-user-image .card-body {
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .card-user-image  img {
                height: 200px;
                width: 100%;
                object-position:center;
                object-fi:cover;
        }

    </style>

    @if(\Session::has('success'))
    <div class="alert alert-info">{{  \Session::get('success') }}</div>  
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">{{ ucFirst($user->name) }}</h5>
        </div>
        
        <div class="card-body">
            <form action="{{ route('admin.image.store', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="row justify-content-md-end align-items-end">
                    <div class="col-md-4">
                        <label for="file" class="col-form-label font-weight-normal mb-0 mt-0">Select File</label>
                        <input type="file" multiple required class="form-control form-control-file @error('file') is-invalid @enderror " name="file[]" id="file" accept="image/*">
                        @error('file') 
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                       
                    </div>
                    <div class="col-md-2 mr-auto">
                        <button class="btn btn-info px-4 mt-3" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>
    <div class="row">
        @foreach ($images as $image )
            <div class="col-md-3 col-sm-4 col-6">
                <div class="card card-user-image position-relative">
                    <div class="card-body px-3 ">
                        <img src="{{ URL::to('/storage/images') }}/{{ $image->image }}" alt="">
                        <a href="{{ route('admin.image.delete', [$user->id, $image->id]) }}" class="position-absolute">
                            <i class="fa fa-trash fa-2x text-danger"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="py-3 d-flex w-100 justify-content-center  mb-4">
        {{ $images->links() }}
    </div>

   
@endsection