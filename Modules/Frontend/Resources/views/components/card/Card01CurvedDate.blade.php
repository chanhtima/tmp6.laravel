
<div class="co-card-01-curved-date">
    <div class="co-card-01-curved-date-img">
        <a href="{{ $url ?? '' }}">
            <img src="{{ Module::asset('frontend:img/' . ($img ?? '')) }}" alt="{{ $title ?? '' }}">
        </a>
    </div>
    <div class="co-card-01-curved-date-detail">
        <a href="{{ $url ?? '' }}">
            <div class="co-card-01-curved-date-date">
                <img src="{{ Module::asset('frontend:img/' . ($icon ?? '')) }}" alt="{{ $title ?? '' }}"> 
                <p class="co-card-01-curved-date-titledate">{{ $date ?? '' }}</p>
            </div>
            <h2 class="co-card-01-curved-date-title">
                {{ $title ?? '' }}
            </h2>
            <p class="co-card-01-curved-date-subtitle"> {{ $subtitle ?? '' }}</p>
        </a>
    </div>
</div>