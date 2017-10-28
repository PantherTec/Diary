@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form class="form-horizontal" method="POST" action="/content">

                      {{ csrf_field() }} 
                                         
                          <div class="form-group ">
                        <label class="control-label col-sm-2 requiredField" for="date">
                         Date
                        </label>
                        <div class="col-sm-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                           <i class="fa fa-calendar">
                           </i>
                          </div>
                          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="date"/>
                         </div>
                        </div>
                       </div>
                       <div class="form-group ">
                        <label class="control-label col-sm-2" for="subject">
                         Subject
                        </label>
                        <div class="col-sm-10">
                         <input class="form-control" id="subject" name="title" type="text"/>
                        </div>
                       </div>
                       <div class="form-group ">
                        <label class="control-label col-sm-2" for="message">
                         Main story
                        </label>
                        <div class="col-sm-10">
                         <textarea class="form-control" cols="40" id="message" name="story" rows="10"></textarea>
                        </div>
                       </div>
                       <div class="form-group">

                        <div class="col-sm-10 col-sm-offset-2">
                         <button class="btn btn-primary " name="submit" type="submit">
                          Submit
                         </button>
                        </div>
                       </div>
                </form>
                </div>

                
                                    
                                        
                                    
              
            </div>
        </div>
    </div>
</div>
@endsection
