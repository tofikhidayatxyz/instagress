@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
      <div class="card-header">
          <h4 class="mb-0 font-weight float-left">List User</h4>
          <form action="{{ route('admin.index') }}" class="float-right">
                <input type="text" class="form-control form-control-sm">
          </form>
        </div>
       <div class="card-body">
          
        </div>
      </div>

    </div>
  </div>

  @endsection