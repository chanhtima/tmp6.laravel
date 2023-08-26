
{{-- onclick="my_modal_3.showModal() --}}

<dialog id="{{$name}}" class="modal">
    <form method="dialog" class="modal-box {{$class ?? ''}}">
      <button class="btn btn-sm btn-circle btn-close-modal btn-ghost absolute right-2 top-2"><p class="text-18">✕</p></button>
      {{$content}}
    
    </form>
  </dialog>