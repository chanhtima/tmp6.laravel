<button class="co-button-icon-l {{$class ?? ''}}">
  <a href="{{$url ?? '#'}}">
      @if(!empty($icon))
          <div class="co-button-icon-l-img">
              {{ $icon }}
          </div>
      @endif

      <span>
          {{$text}}
      </span>
  </a>
</button>