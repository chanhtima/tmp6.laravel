<div class="co-menu-mobile-navigation dropdown">
  <label tabindex="0" class="menu-mobile-navigation-hamburger" onclick="this.parentElement.classList.toggle('dropdown-open');document.activeElement.blur()">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
  </label>
  <ul tabindex="0" class="menu-mobile-navigation-list dropdown-content">

    @foreach ($menuData as $index => $menuItem)
  
      @if(!empty($menuItem['subMenu']))
        <li>
          <a>{{$menuItem['name']}}</a>
          <ul class="p-2">
            @foreach ($menuItem['subMenu'] as $subMenuItem)
                <li>
                    <a href={{url($subMenuItem['url'])}}>{{$subMenuItem['name']}}</a>
                </li>
            @endforeach
          </ul>
        </li>
      @else
          <li>
              <a href={{url($menuItem['url'])}}>{{$menuItem['name']}}</a>
          </li>    
      @endif

  @endforeach
  </ul>
</div>