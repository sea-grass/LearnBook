<h2 class="form-signup-heading">Please Register</h2>
{{ Form::open(array('url'=>'user/createUser', 'class'=>'form-horizontal')) }}
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    <div class="form-group">
        {{ Form::label('fistname', 'First Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Last Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-mail', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password_confirmation', 'Password Confirmation', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Register', array('class'=>'btn btn-default'))}}
        </div>
    </div>
{{ Form::close() }}