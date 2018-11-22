<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('name', 'Name') }}
        <div></div>
        {{Form::text('name',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('name', 'PIN') }}
        <div></div>
        {{Form::text('pin',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('name', 'Locality') }}
        <div></div>
        {{Form::text('locality',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('name', 'Mobile') }}
        <div></div>
        {{Form::text('mobile',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('name', 'City') }}
        <div></div>
        {{Form::text('city',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('name', 'State') }}
        <div></div>
        {{Form::text('state',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('name', 'Address') }}
        <div></div>
        {{Form::textarea('address',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('name', 'Landmark') }}
        <div></div>
        {{Form::textarea('landmark',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
    </div>
</div>

<div class="form-group">
    {{ Form::label('small_desc', 'Type') }}
    <div></div>

    <div class="form-check form-check-inline">
        {{Form::radio('type', 'home',null,["class"=>"form-check-input"])}}
        <label class="form-check-label" for="inlineCheckbox1">Home</label>
    </div>
    <div class="form-check form-check-inline">
        {{Form::radio('type', 'work',null,["class"=>"form-check-input"])}}
        <label class="form-check-label" for="inlineCheckbox2">Work</label>
    </div>
</div>

<div class="form-group">
    {{Form::submit('Save' ,['class' => 'btn btn-primary btn-block' ])}}
</div>