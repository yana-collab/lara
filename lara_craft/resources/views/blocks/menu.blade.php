<div class="col-md-6">
    @foreach($menu as $item)
        <div class="col-md">
            <a href="{{route($item['alias'])}}">
                {{$item[ 'title']}}
            </a>
        </div>
    @endforeach
</div>
<hr>
