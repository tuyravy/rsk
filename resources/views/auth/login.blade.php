@extends('layouts.applogin')
 @section('content')
    <form method="post" action="{{ route('login') }}" role="form" class="form-horizontal">
            {{ csrf_field() }}
            <h2>{{ __('ERP System') }}</h2>
            <hr>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <input value="" type="text" class="form-control" name="username" placeholder="username"  autocomplete="off" value="{{ old('username') }}" required autofocus />
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <input  type="password" class="form-control" name="password" placeholder="Password" data-error="Password required" autocomplete="off" required="true" />
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary submit" style="margin-top: 8px;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Sign In</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
            </div>
            <div class="clearfix"></div>
            <div class="separator">
                
            
                <div class="clearfix"></div>
                <br />                
            
                <div>
                    <p>© All Rights Reserved.</p>
                </div>
            </div>
        </form>

    @endsection
