<div class="co-card-01-curved">
  <div class="co-card-01-curved-img">
      <a href="{{ $url ?? '' }}">
        <img src="{{ Module::asset('frontend:' . ($img ?? '')) }}" alt="{{ $title ?? '' }}">
      </a>
  </div>
  <div class="co-card-01-curved-detail">
      <a href="{{ $url ?? '' }}">
          <h2 class="co-card-01-curved-title">
              {{ $title ?? '' }}
          </h2>
          <p class="co-card-01-curved-subtitle"> {{ $subtitle ?? '' }}</p>
      </a>
  </div>
</div>