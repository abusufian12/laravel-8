@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User Permission</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Name:</strong><br>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Email:</strong><br>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Role:</strong><br>
                {{ $user->role }}
            </div>
        </div>

        <div class="col-sm-12">
            <strong>Menu  List</strong><br><br>
            
                @foreach($menus as $menu)
                    <div class="col-xs-3">
                        <!-- {{ $menu->title }} -->
                        <label><input type="checkbox" name="user_menus[]" value="{{ $menu->id }}"> {{ $menu->title }}</label>
                    </div>
                @endforeach
            
        </div>

    </div>
@endsection