
@extends('layouts.app')
@section('header')
<div class="jumbotron">
  <img src="/uploads/headers/{{ Auth::user()->header}}" style="width:100%; height: 100px; margin-top:0%;">
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                            <thead><tr>
                                <th colspan="2">stories</th>
                            </tr>
                        </thead>
                        <tbody>@foreach($contents as $content)
                         <tr>

                                <td style="width:70px; float:left;">
                        <h5><a href="" style="position: relative; padding-left: 50px;"><img src="/uploads/avatars/{{ Auth::user()->avatar}}" style="width:50px; height: 50px; position:absolute;left:10px; border-radius:50%; 
                            border: 2px solid #A13352"></a></h5>


      </td>
      <td>
        <p> {{ Auth::user()->name }} </p>
        <div>{{$content -> story}}</div>
        <button class="pull-right btn btn-danger">Delete</button>
                        <button class="pull-right btn btn-info">Publish</button>
      </td>
                                
                            </tr>
                             @endforeach
                        </tbody>
                        </table>
               
                   </div>
            </div>
        </div>
    </div>
</div> 
@endsection
