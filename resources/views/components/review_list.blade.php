<ul class="list-group">
    @foreach ($ReviewData as $item)
    <li class="list-group-item">
        <div class="badge badge-primary">{{$item['rating']}}</div>
        <div>
            {{$item['comment']}}
        </div>

    </li>
    @endforeach
</ul>