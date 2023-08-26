<ul class="co-menu-horizontal">

    @foreach ($menuData as $index => $menuItem)
    
        @if(!empty($menuItem['subMenu']))
            <li tabindex={{$index}}>
                <details>
                    <summary>{{$menuItem['name']}}</summary>
                    <ul class="p-2">
                        @foreach ($menuItem['subMenu'] as $subMenuItem)
                            <li>
                                <a href={{url($subMenuItem['url'])}}>{{$subMenuItem['name']}}</a>
                            </li>
                        @endforeach
                      </ul>
                </details>
            </li>
        @else
            <li>
                <a href={{url($menuItem['url'])}}>{{$menuItem['name']}}</a>
            </li>    
        @endif

    @endforeach
</ul>