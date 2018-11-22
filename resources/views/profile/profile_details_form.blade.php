{!! Form::model($User,['action' => ["ProfileController@update","id"=>$User->id],"method"=>"put", 'files' => true]) !!}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    <div></div>
    {{Form::text('name',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
</div>

<div class="form-group">
    {{ Form::label('small_desc', 'Gender') }}
    <div></div>

    <div class="form-check form-check-inline">
        {{Form::radio('gender', 'male',null,["class"=>"form-check-input"])}}
        <label class="form-check-label" for="inlineCheckbox1">Male</label>
    </div>
    <div class="form-check form-check-inline">
        {{Form::radio('gender', 'female',null,["class"=>"form-check-input"])}}
        <label class="form-check-label" for="inlineCheckbox2">Female</label>
    </div>
</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    <div></div>
    {{Form::text('email',null ,['class' => 'form-control' ,"placeholder"=>"Email"])}}
</div>
<div class="form-group">
    {{ Form::label('phone', 'Phone') }}
    <div></div>
    {{Form::text('phone',null ,['class' => 'form-control' ,"placeholder"=>"Phone"])}}
</div>
<div class="form-group">
    {{Form::submit('Save' ,['class' => 'btn btn-primary btn-block' ])}}
</div>
{!! Form::close() !!}