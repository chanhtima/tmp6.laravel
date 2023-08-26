<div class="co-form-basic">
    <div class="co-form-basic-form">
        <div class="co-form-basic-inputs w-full">
            <label>Full Name *</label>
            <input type="text" placeholder=" Name" aria-label=" name">
        </div>
        <div class="co-form-basic-inputs w-full md:w-1/2">
            <label>Email *</label>
            <input type="email" placeholder="abcde@mail.come" aria-label="abcde@mail.com">
        </div>
        <div class="co-form-basic-inputs w-full md:w-1/2">
            <label>Phone *</label>
            <input type="tei" placeholder="+66 9429991" aria-label="Phone">
        </div>
        <div class="co-form-basic-inputs w-full">
            <label>Subject</label>
            <input type="text"  placeholder="Subject name" aria-label="Subject name">
        </div>
        <div class="co-form-basic-inputs w-full">
            <label>How can we help?</label>
            <textarea  id="exampleFormControlTextarea1" rows="4" placeholder="How can we help?"></textarea>
        </div>
        <div class="co-form-basic-pdpa w-full">
            <label >
                <input type="checkbox" checked="checked" class="checkbox" />
                <span>I acknowledge that I have read and agree    <a href="{{url('/policy')}}">Privacy Policy</a>
                </span> 
            </label>
            <img src="{{ Module::asset('frontend:img/papd.png') }}" alt="pdpa"  >
            <button class="co-form-basic-buttons"  onclick="formcontact.showModal()">
                <span>Send Message </span>
                <div class="co-form-basic-buttons-img">
                    <svg  viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.54052 0.864992L12.0811 11.0001L1.54052 21.1353" stroke="#2F2F2F" stroke-width="2"/>
                    </svg>
                    
                </div>
            </button>
        </div>
    </div>
</div>