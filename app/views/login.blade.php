@extends('template')
@section('content')

<h1 class="page-header">
    Autentikasi
    <!--small>Secondary Text</small-->
</h1>

<center>
    <div class="panel panel-default">
        <div class="panel-heading"><!--h3 class="panel-title"-->
        Autentikasi Admin<!--/h3-->
        </div>
        <div class="panel-body" align='justify'>
            @if ($errors->has('loginerr'))
            <div class="alert alert-danger out" role="alert" id="email_error">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              {{ $errors->first('loginerr')}}
            </div>
            @endif
            {{Form::open(['url'=>'login', 'class'=>'form-horizontal'])}}
                        <div class="control-group {{  $errors->has('email') ? 'has-error' : ''}} ">
                            <label class="control-label" for="userid">Email</label>
                            <div class="controls">
                                <!--input required="" id="email" name="email" type="text" class="form-control" placeholder="Email" class="" required=""-->
                                {{ Form::text('email', null, ['class'=>'form-login form-control input-medium inputan','placeholder'=>'Email', 'required'=>'required']) }}
                            </div>
                            @if ($errors->has('email'))
                            <div class="alert alert-danger out" role="alert" id="email_error">
                              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                              <span class="sr-only">Error:</span>
                              {{ $errors->first('email')}}
                            </div>
                            @endif
                        </div>
                        <!-- Password input-->
                        <div class="control-group {{  $errors->has('password') ? 'has-error' : ''}}">
                            <label class="control-label" for="password">Kata Sandi</label>
                            <div class="controls">
                                <!--input type="password" required="" id="password" name="password" class="form-control" type="password" placeholder="password" class="input-medium inputan"-->
                                {{ Form::password('password', ['class'=>'form-login form-control input-medium inputan','placeholder'=>'Password', 'required'=>'required']) }}
                            </div>
                            @if ($errors->has('password'))
                            <div class="alert alert-danger out" role="alert" id="password_error">
                              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                              <span class="sr-only">Error:</span>
                              {{ $errors->first('password')}}
                            </div>
                            @endif
                        </div>
                        <!-- Button -->
                        <div class="control-group">
                            <label class="control-label" for="signin"></label>
                            <div class="controls">
                                {{Form::submit('Masuk', ['class'=>'btn btn-primary pull-right'])}}
                            </div>
                        </div>
                {{ Form::close() }} 
        </div>
    </div>
</center>
@append

@section('additional_javascript')
@append