@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <img src="/uploads/avatars/{{ $user->avatar}}" style="width:150px; height: 150px; float:left; border-radius:50%; margin-right:25px; border: 2px solid #A13352">
               <form enctype="multipart/form-data" action="/editprofile" method="POST">

               
                
                <label>Add profile picture</label>
                 <input type="file" name="avatar">

                 <button class="pull-right btn btn-primary " name="submit" type="submit"> SUBMIT </button>

                 
                {{ csrf_field() }} 
                </form>
                   </div>
                <div class="panel-body">

                    <img src="/uploads/headers/{{ $user->header }}" style="width:150px; height: 150px; float:left; border-radius:50%; margin-right:25px; border: 2px solid #A13352">
               <form enctype="multipart/form-data" action="/editheader" method="POST">

               
                
                <label>Add header</label>
                 <input type="file" name="header">

                 <button class="pull-right btn btn-primary " name="submit" type="submit"> SUBMIT </button>

                 
                {{ csrf_field() }} 
                </form>
                   </div>
            </div>
        </div>
    </div>
</div> 
@endsection
