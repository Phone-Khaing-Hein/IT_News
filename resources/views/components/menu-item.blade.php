<li class="menu-item">
    <a href="{{$link}}" class="menu-item-link {{\Illuminate\Support\Facades\Request::url() == $link ? 'active' : ''}}">
        <span>
            <i class="{{$class}}"></i>
            {{$name}}
        </span>
        @if($counter > 0)
        <span class="badge badge-pill bg-white shadow-sm text-primary">{{$counter}}</span>
        @endif
    </a>
</li>
