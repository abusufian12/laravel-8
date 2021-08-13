@extends('menus.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Menus</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('menus.create') }}"> Create New Menu</a>
                <a class="btn btn-success" href="{{ url('users') }}"> Users</a>
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
            <th>status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->position }}</td>
            <td>{{ $value->status }}</td>
            <td>
                <form action="{{ route('menus.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('menus.show',$value->id) }}"><i class="fa fa-eye"></i></a>    
                    <a class="btn btn-primary" href="{{ route('menus.edit',$value->id) }}"><i class="fa fa-edit"></i></a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection