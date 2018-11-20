<div class="form-group">
    {{ Form::label('productName', 'Product Name') }}
    <div></div>
    {{Form::text('product_name',null ,['class' => 'form-control' ,"placeholder"=>"Name"])}}
</div>

<div class="form-group">
    {{ Form::label('small_desc', 'Small Desc') }}
    <div></div>
    {{Form::textarea('small_desc',null ,['class' => 'form-control' ,"placeholder"=>"Simple Description "])}}
</div>
<div class="form-group">
    {{ Form::label('price', 'Price') }}
    <div></div>
    {{Form::text('price',null ,['class' => 'form-control' ,"placeholder"=>"Product Price"])}}
</div>
<div class="form-group">
    {{ Form::label('detailed_desc', 'Detailed Desc') }}
    <div></div>
    {{Form::textarea('detailed_desc',null ,['class' => 'form-control' ,"placeholder"=>"Detailed Discription"])}}
</div>
<div class="form-group">
    {{Form::submit('Save' ,['class' => 'btn btn-primary btn-block' ])}}
</div>