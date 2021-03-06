@extends('users.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                <a class="btn btn-success" href="{{ url('roles/index') }}"> Role</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
                <form action="{{ route('users.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('users.show',$value->id) }}"><i class='fa fa-eye'></i></a>    
                    <a class="btn btn-info" href="{{ url('users/permission', $value->id) }}"><i class='fa fa-lock'></i></a>    
                    <a class="btn btn-primary" href="{{ route('users.edit',$value->id) }}"><i class='fa fa-edit'></i></a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger"><i class='fa fa-remove'></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection