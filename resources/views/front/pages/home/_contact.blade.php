<section class="section-contact text-white section-margin-top slanted-bg section-padding-top section-padding-bottom overflow-x-hidden">
    <div class="container">
        <h3 class="section-title text-white aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
            Talk to us
        </h3>

        <div class="flex flex-col md:flex-row gap-y-8  justify-between">
            <div class="contact-form-col basis-2/5 lg:basis-2/4" data-aos="fade-right" data-aos-duration="2000">
                <p class="mb-4">
                    Fill out the form with your details, and we’ll get back to you.
                </p>
                <form method="post" action="{{route('front.contact.store', '#homeContact')}}" id="homeContact">
                    @csrf
                    <div class="input-placeholder mb-8">
                        <label>
                            <div class="h-[50px] relative">
                                <input type="text" name="full_name" value="{{old('full_name')}}"  class="contact-form-input" autocomplete="off" />
                                <div class="placeholder">
                                    Full Name <span>*</span>
                                </div>
                            </div>
                        </label>
                        @error('full_name')
                        <span class="invalid-feedback text-xs text-rose-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex gap-8 mb-8">
                        <div class="input-placeholder w-full">
                            <label>
                                <div class="h-[50px] relative">
                                    <input type="text" name="phone_number" value="{{old('phone_number')}}" class="contact-form-input" autocomplete="off"/>
                                    <div class="placeholder">Phone</div>
                                </div>
                            </label>
                            @error('phone_number')
                            <span class="invalid-feedback text-xs text-rose-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="input-placeholder w-full">
                            <label>
                                <div class="h-[50px] relative">
                                    <input type="email" name="email" value="{{old('email')}}" class="contact-form-input" autocomplete="off"/>
                                    <div class="placeholder">
                                        Email <span>*</span>
                                    </div>
                                </div>
                            </label>
                            @error('email')
                            <span class="invalid-feedback text-xs text-rose-500">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-placeholder mb-8">
                        <label>
                            <div class="h-[50px] relative">
                                <input type="text" name="referral_source" value="{{old('referral_source')}}" class="contact-form-input" autocomplete="off"/>
                                <div class="placeholder">
                                    How did you hear about us?
                                </div>
                            </div>
                        </label>
                        @error('referral_source')
                        <span class="invalid-feedback text-xs text-rose-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-placeholder textarea">
                        <label>
                            <div class="relative">
                                <textarea type="text" name="message" rows="5" class="contact-form-input !h-auto" autocomplete="off">{{old('message')}}</textarea>
                                <div class="placeholder">
                                    Message<span>*</span>
                                </div>
                            </div>
                        </label>
                        @error('message')
                        <span class="invalid-feedback text-xs text-rose-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="border rounded-full border-[2px] border-white py-2 px-12 mt-4 text-right hover:text-black
                            hover:bg-white transition duration-300">Submit</button>
                    </div>
                </form>
            </div>

            <div class="contact-detail-col basis-2/4 lg:basis-2/5" data-aos="fade-left" data-aos-duration="2000">
                <div class="first-row gap-4">
                    <div class="left-col">
                        <h3 class="item-title">Call Us</h3>
                        <span>{{config('app.settings.company_phone')}}</span>
                    </div>
                    <div class="right-col">
                        <h3 class="item-title">Email Us</h3>
                        <span>{{config('app.settings.company_email')}}</span>
                    </div>
                </div>
                <div class="second-row gap-4">
                    <div class="left-col">
                        <h3 class="item-title">Visit Us</h3>
                        <p>{{config('app.settings.company_address')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
