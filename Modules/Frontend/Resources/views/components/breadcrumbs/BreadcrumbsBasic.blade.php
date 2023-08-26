<div class="co-breadcrumbs-basic">

    <div class="co-breadcrumbs-basic-wrapper">

        @foreach ($datas as $index => $data)
            <a href="{{ url($data['url']) ?? url('') }}" class="co-breadcrumbs-basic-item {{ $index == (count($datas)-1) ? 'co-breadcrumbs-basic-active' : ''}} {{ $index == (count($datas)-2) ? 'co-breadcrumbs-basic-responsive' : ''}}">
                @if ($index == (count($datas)-2))
                    <svg xmlns="http://www.w3.org/2000/svg" class="co-breadcrumbs-basic-back" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                @endif
                @if($index == 0)
                    <svg class="mb-1 !ml-0 !-mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.27446 10.1281C5 10.7249 5 11.4037 5 12.7615V17.0019C5 18.8875 5 19.8303 5.58579 20.4161C6.11733 20.9477 6.94285 20.9969 8.5 21.0014V16.002C8.5 14.8974 9.39543 14.002 10.5 14.002H13.5C14.6046 14.002 15.5 14.8974 15.5 16.002V21.0014C17.0572 20.9969 17.8827 20.9477 18.4142 20.4161C19 19.8303 19 18.8875 19 17.0019V12.7615C19 11.4037 19 10.7249 18.7255 10.1281C18.4511 9.53139 17.9356 9.08958 16.9047 8.20596L15.9047 7.34882C14.0414 5.75169 13.1098 4.95312 12 4.95312C10.8902 4.95312 9.95857 5.75169 8.09525 7.34882L7.09525 8.20596C6.06437 9.08958 5.54892 9.53139 5.27446 10.1281ZM13.5 21.0019V16.002H10.5V21.0019H13.5Z" fill="#1D1D1D"/>
                    </svg>
                @endif
                <p>
                    {{$data['name']}}
                </p>
                @if ($index != (count($datas)-1))
                    <svg class="co-breadcrumbs-basic-chevron" width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.17727 4.1L0.197266 0.599999H1.97727L3.89727 4.1L1.97727 7.6H0.197266L2.17727 4.1Z" fill="black"/>
                    </svg>
                @endif
            </a>
        @endforeach

    </div>

</div>