<div class="form-group">
    {{ Form::label('comment', 'Comment') }}
    <div></div>
    {{Form::textarea('comment',null ,['class' => 'form-control' ,"placeholder"=>"Comment Discription"])}}
</div>

<div class="form-group">
    {{ Form::label('small_desc', 'Rating') }}
    <div></div>

    <div class="form-check form-check-inline">
        {{Form::radio('rating', '1',null,["class"=>"form-check-input",'id'=>"inlineCheckbox1"])}}
        <label class="form-check-label" for="inlineCheckbox1">1</label>
    </div>
    <div class="form-check form-check-inline">
        {{Form::radio('rating', '2',null,["class"=>"form-check-input",'id'=>"inlineCheckbox2"])}}
        <label class="form-check-label" for="inlineCheckbox2">2</label>
    </div>

    <div class="form-check form-check-inline">
        {{Form::radio('rating', '3',null,["class"=>"form-check-input",'id'=>"inlineCheckbox3"])}}
        <label class="form-check-label" for="inlineCheckbox3">3</label>
    </div>
    <div class="form-check form-check-inline">
        {{Form::radio('rating', '4',null,["class"=>"form-check-input",'id'=>"inlineCheckbox4"])}}
        <label class="form-check-label" for="inlineCheckbox4">4</label>
    </div>

    <div class="form-check form-check-inline">
        {{Form::radio('rating', '5',null,["class"=>"form-check-input",'id'=>"inlineCheckbox5"])}}
        <label class="form-check-label" for="inlineCheckbox5">5</label>
    </div>
</div>

<div class="form-group">
    {{Form::submit('Review' ,['class' => 'btn btn-primary btn-block' ])}}
</div>