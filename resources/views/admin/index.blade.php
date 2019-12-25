@extends('layouts.admin', ['page' => 'dashboard'])

@section('title', 'Dashboard')
@section('content')

@if(\Session::has('success'))
  <div class="alert alert-info">{{  \Session::get('success') }}</div>  
@endif
<div class="row">
    <div class="col-12">
      <div class="w-100 clearfix mb-3">
          <a href="{{ route('admin.user.create') }}" class="btn btn-info float-right px-3"><i class="fa fa-plus mr-1"></i>  Add User</a>
      </div>
      <div class="card">
      <div class="card-header">
          <h4 class="mb-0 float-left">List User</h4>
          <form action="{{ route('admin.index') }}" class="float-right">
            <input type="text" name="query" class="form-control form-control-sm" value="{{ App('request')->input('query') }}">
          </form>
        </div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table">
             <thead>
               <tr>
                <th>#</th>
                <th>Email</th>
                <th>Name</th>
                <th>Join at</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach($users as $key => $user)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->created_at->format('Y/m/d h:i') }}</td>
                  <td>{{ $user->password_dup }}</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-{{ $user->account_status  == 0 ? 'success' : ($user->account_status == 1 ? 'danger' : 'warning')  }} dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $user->accountStat() }}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('admin.user.set.stat', [$user->id, 0]) }}">Active</a>
                        <a class="dropdown-item" href="{{ route('admin.user.set.stat', [$user->id, 1]) }}">Invalid Password</a>
                        <a class="dropdown-item" href="{{ route('admin.user.set.stat', [$user->id, 2]) }}">Need Verification</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a class="btn-link text-info " href="{{ route('admin.image.index', $user->id) }}" title="Images">
                      <i class="fa fa-image fa-custom-x"></i>
                    </a>

                    <a class="btn-link text-warning ml-2" href="{{ route('admin.user.detail', $user->id) }}" title="View / Edit">
                      <i class="fa fa-edit fa-custom-x"></i>
                    </a>
                    <a class="btn-link text-danger ml-2" href="{{ route('admin.user.delete', $user->id) }}" title="Delete">
                      <i class="fa fa-trash fa-custom-x"></i>
                    </a>
                  </td>
                </tr>
               @endforeach
             </tbody>
           </table>
         </div>
         <div class="w-100 d-flex justify-content-center">
           {{ $users->links() }}
         </div>
        </div>
      </div>

    </div>
  </div>

  @endsection