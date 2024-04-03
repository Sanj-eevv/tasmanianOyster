<footer class="bg-black text-white pt-[50px]">
    <div class="border-b mx-4 pb-[20px]">
        <div class="container">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="text-center md:text-left">
                    <span class="block font-extralight">{{config('app.settings.company_phone')}}</span>
                    <span class="block font-extralight mt-3">{{config('app.settings.company_email')}}</span>
                </div>
                <div>
                    <img src="{{asset("storage/uploads/settings/".config('app.settings.app_logo'))}}" alt="logo"
                         class="h-[130px] w-[130px] cover-image">
                </div>
                <div class="flex gap-8">
                        @if(config('app.settings.instagram_url'))
                            <a href="{{config('app.settings.instagram_url')}}" target="_blank" class="footer-social">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                        @endif
                        @if(config('app.settings.facebook_url'))
                            <a href="{{config('app.settings.facebook_url')}}" target="_blank" class="footer-social">
                                <i class="fa-brands fa-facebook-f text-black"></i>
                            </a>
                        @endif
                        @if(config('app.settings.twitter_url'))
                           <a href="{{config('app.settings.twitter_url')}}" target="_blank" class="footer-social">
                                <i class="fa-brands fa-twitter"></i>
                           </a>
                        @endif
                        @if(config('app.settings.linkedin_url'))
                           <a href="{{config('app.settings.linkedin_url')}}" target="_blank" class="footer-social">
                                <i class="fa-brands fa-linkedin-in"></i>
                           </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center py-[20px]">
        <span class="bg-white text-black font-bolder text-sm rounded-full inline-flex justify-center items-center h-[17px] w-[17px] mr-4">C</span>
        <span class="text-md md:text-xl tracking-wide font-light"><?php echo date('Y') ?> {{config('app.settings.copyright_text')}}</span>
    </div>
</footer>