@extends('layouts.admin', ['page' => 'email'])

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{{ route('admin.email.index') }}">Email</a></li>
@endsection


@section('content')
 
@if(\Session::has('success'))
<div class="alert alert-info">{{  \Session::get('success') }}</div>  
@endif
<div class="row">
  <div class="col-12">
    <div class="w-100 clearfix mb-3">
        <a href="{{ route('admin.email.create') }}" class="btn btn-info float-right px-3"><i class="fa fa-plus mr-1"></i>  Add Email</a>
    </div>
    <div class="card">
    <div class="card-header">
        <h4 class="mb-0 float-left">List Email</h4>
        <form action="{{ route('admin.email.index') }}" class="float-right">
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
              <th>Action</th>
             </tr>
           </thead>
           <tbody>
             @foreach($mails as $key => $email)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $email->email }}</td>
                <td>{{ $email->name }}</td>
                <td>
                  <a class="btn-link text-info" href="{{ route('admin.email.edit', $email->id) }}" title="View / Edit">
                    <i class="fa fa-edit fa-custom-x"></i>
                  </a>
                  <a class="btn-link text-danger ml-2" href="{{ route('admin.email.delete', $email->id) }}" title="Delete">
                    <i class="fa fa-trash fa-custom-x"></i>
                  </a>
                </td>
              </tr>
             @endforeach
           </tbody>
         </table>
       </div>
       <div class="w-100 d-flex justify-content-center">
         {{ $mails->links() }}
       </div>
      </div>
    </div>

  </div>
</div>
@endsection