{{ Form::open(array('url'=>'user/signin', 'class'=>'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('email', 'E-Mail Address', array('class' => 'col-sm-2 control-label')) }}
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
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Login', array('class'=>'btn btn-default'))}}
        </div>
    </div>
{{ Form::close() }}