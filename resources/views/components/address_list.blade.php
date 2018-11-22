<div class="list-group">
    @foreach ($Address as $item)
    <label for="address_select_{{$item['id']}}">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex justify-content-between">
            <div>
                {{-- {{Route::getOption()}} --}}
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$item['name']}}
                        <div class="ml-2 h-6 d-inline-block font-weight-normal">
                            {{$item['mobile']}}
                        </div>

                    </h5>
                </div>
                <div>
                    {{$item['address']}} ,{{$item['city']}}, {{$item['state']}}
                </div>
                <div><b>{{$item['pin']}}</b></div>
            </div>
            <input type="radio" name="address_selection" value="{{$item['id']}}" id="address_select_{{$item['id']}}">

            @if ($ButtonsVisible)

            <div class="d-flex flex-column">
                <a href=" {{ action('AddressController@edit',[Route::current()->parameter('id'),$item['id']]) }}" class="btn mb-1 btn-warning">
                        Edit       
                    </a> {!! Form::open(['action' => ["AddressController@destroy",Route::current()->parameter('id'),$item['id']],"method"=>"delete",
                'files' => true]) !!} {{Form::submit('Delete' ,['class' => 'btn btn-danger' ])}} {!! Form::close() !!}

            </div>
            @endif
        </div>
    </div>
</label> @endforeach
</div>