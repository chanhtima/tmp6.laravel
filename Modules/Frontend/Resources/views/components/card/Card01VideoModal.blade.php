<div class="co-card-01-video-modal" onclick="{{ $modal ?? '' }}.showModal() ">
  <iframe class="max-w-full w-full h-[13rem] mb-2"   src="https://www.youtube.com/embed/l40nk18GUzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="co-card-01-video-modal-title">
      <div class="co-card-01-video-modal-title-date">
        <img src="{{ Module::asset('frontend:img/Date_today.png') }}" >
        <p>{{ $date ?? '' }}</p>
      </div>
      <h4>{{ $title ?? '' }}</h4>
    </div>
</div>

