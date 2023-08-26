<div class="la-topbar-01-basic">
    <div class="la-topbar-01-basic-cotnainer">
        <div class="la-topbar-01-basic-cotnainer-icon">
            @for ($i = 1; $i <= 7; $i++)
            <a href="{{ url('/') }}">
                <img src="{{ Module::asset('frontend:img/icon/icontopbar'.$i.'.png') }}" alt="icon">
            </a>
            @endfor
        </div>
    </div>
</div>