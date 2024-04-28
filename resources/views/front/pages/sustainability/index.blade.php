@extends('layouts.front.index')
@push('styles')
    <style>
        .horizontal-line{
            width: 100%;
            height: 2px;
            background: #fff;
            position: relative;
        }
        .horizontal-line .arrow{
            border-bottom: 5px solid transparent;
            border-left: 10px solid #fff;
            border-top: 5px solid transparent;
            content: "";
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%) rotate(180deg);
        }
    </style>
@endpush
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="sustainability_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/sustainability-hero.jpeg')}}" alt="Sustainability" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-8 pb-16 lg:pb-32"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{Vite::asset('resources/images/front/sustainability-hero-sub.jpeg')}}'">
        <div class="absolute top-0 bottom-0 right-0 left-0 bg-black/50 -z-10"></div>
        <div class="container text-white region-text">
            <h2 class="section-title text-center capitalize" data-aos="fade-up" data-aos-duration="1600">Sustainability</h2>
            <div class="description-div" data-aos="fade-up" data-aos-duration="1800">A world class shellfish company is governed by nature. Success only occurs in a pristine environment. We are the stewards of our coasts, seas and ecosystems.</div>
            <div class="sustainability-teams text-white lg:mt-8 overflow-hidden">
                <div class="container">
                    <h2 class="section-title text-center !font-light" data-aos="fade-up" data-aos-duration="2000">Management Team</h2>
                    <div class="flex justify-center md:justify-between items-center gap-12 md:gap-6  flex-wrap">
                            <div class="flex flex-col items-center justify-center max-w-[220px]" data-aos="fade-right" data-aos-duration="2000">
                                <img src="{{Vite::asset('resources/images/front/sustainability-logo.png')}}" alt="Sustainability Logo"
                                     class="cover-image h-[220px] w-[220px]">
                                <span class="role capitalize block text-center mt-2">Friends of the Sea certification with the World Sustainability Organisation</span>
                            </div>
                            <div class="flex flex-col items-center justify-center max-w-[220px]" data-aos="fade-left" data-aos-duration="2000">
                                <img src="{{Vite::asset('resources/images/front/sustainability-logo-2.jpeg')}}" alt="Sustainability Logo 2"
                                     class="cover-image w-[220px]">
                                <span class="role capitalize block text-center mt-2">Only Tasmanian Organic Oyster Company status from the National Association for Sustainable Agriculture Australia (NASAA)</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black text-white pt-8 pb-16">
        <h2 class="section-title text-center !font-light !pb-0">Environmental Stewardship</h2>
        <span class="section-subtitle text-center block">Hover over each icon to learn more.</span>
        <div class="container mt-10">
            <div class="flex justify-center sm:justify-between items-start gap-y-20 gap-x-8 lg:gap-2 flex-wrap">
                <div class="flex items-center flex-col gap-4 max-w-[170px] environmental-stewardship relative" data-aos="fade-up" data-aos-duration="900">
                    <svg preserveAspectRatio="none" data-bbox="0 1.2 24 21.6" viewBox="0 1.2 24 21.6" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" class="h-[120px] w-[120px]">
                        <g>
                            <path d="M20.8 5.8c-.7-1-1.5-1.7-2.5-2-.4-.2-.8-.2-1.1-.2-.5 0-.8.1-1.2.2-.8.2-1.2.8-1.4 1.7-.2.9 0 1.9.2 2.7v.1c0 .2.1.4.1.7.2-.6.5-1.2.9-1.8.7-.9 1.7-1.4 2.8-1.4 1 0 2 .5 2.7 1.2.1.1.1.1.1.2 0-.6-.3-1-.6-1.4z" fill="white"></path>
                            <path d="M18.6 6.5c-.8 0-1.6.4-2.1 1.1-.7.8-1 1.9-1 3v.3c.1.2.1.4.2.6.1.2.2.4.2.6.3.7.6 1.5 1.1 2.2.3.4.6.6 1 .8.7-.1 1.2-.6 1.6-1.2.4-.6.7-1.2 1.1-2.1.2-.5.3-.8.4-1.2.1-.2.1-.4.2-.6V9c0-.6-.2-1.1-.5-1.5-.6-.7-1.4-1-2.2-1z" fill="white"></path>
                            <path d="M6.3 17.5c.8 0 1.6-.3 2.1-.9.4-.4.6-.9.6-1.5v-1c-.1-.2-.1-.4-.2-.6-.1-.3-.2-.7-.4-1.2-.3-.9-.7-1.5-1.1-2.1-.5-.6-.9-1.1-1.7-1.2-.3.1-.6.4-.9.8-.5.7-.8 1.4-1.1 2.2-.1.2-.2.4-.2.6-.1.2-.1.4-.2.6v.3c0 1.1.4 2.1 1 3 .5.6 1.3 1 2.1 1z" fill="white"></path>
                            <path d="M6.3 18.4c-1.1 0-2.1-.5-2.8-1.4-.4-.5-.7-1.1-.9-1.8-.1.2-.1.5-.1.7v.1c-.2.8-.3 1.8-.2 2.7.2.9.6 1.4 1.4 1.7.3.1.7.2 1.2.2.4 0 .7-.1 1.1-.2 1-.4 1.8-1 2.5-2 .3-.6.5-1 .6-1.4 0 .1-.1.1-.1.2-.7.7-1.7 1.2-2.7 1.2z" fill="white"></path>
                            <path d="M8.4 7.5 4.7 4.4c-.2-.2-.4-.2-.6-.2-.5 0-.9.3-.9.8l-.6 4.7c-.1.4-.3.8-.6 1-.4.4-.7.9-.7 1.5v1.6L.7 15c-.4.8-.7 1.8-.7 2.7 0 1.1.3 2.1.8 3.1l.2.4c.3.4.9.8 1.4.8h.3c.5 0 .9.1 1.3.4h.1c.4.2.8.4 1.2.4.8 0 1.5-.4 1.8-1.1.2-.4.7-.7 1.2-.6.5.1 1-.1 1.3-.5l.2-.3c1.1-1.7 1.8-3.7 1.8-5.8 0-1.6-.4-3.1-1.2-4.5-.5-.9-1.2-1.8-2-2.5zm.9 11.2c-.8 1.2-1.9 2.1-3.1 2.5-.4.2-.9.2-1.3.2-.6 0-1.1-.1-1.7-.4-.9-.4-1.5-1.2-1.7-2.3v-.6c0-1.1.2-2.1.4-3.1.1-.7.3-1.2.4-1.6.2-.7.4-1.4.8-2.1.1-.3.2-.6.4-.8.2-.5.6-1.1 1.1-1.6.3-.3.8-.7 1.4-.6.4 0 .8.2 1.2.5.3.2.8.8 1.2 1.6.5.9.9 1.8 1.2 2.9.1.3.2.7.3 1.2.1.3.1.6.2.9.2 1.1-.1 2.2-.8 3.3z" fill="white"></path>
                            <path d="m22.2 3.7-.2-.3c-.3-.4-.8-.6-1.3-.5-.5.1-1-.2-1.2-.6-.4-.7-1.1-1.1-1.8-1.1-.4 0-.9.1-1.2.4h-.1c-.4.3-.8.4-1.3.4h-.3c-.6 0-1.1.3-1.4.8l-.2.4c-.5.9-.8 2-.8 3.1 0 1 .2 1.9.7 2.8l.6 1.2v1.6c0 .6.2 1.1.7 1.5.3.3.5.6.6 1l.6 4.7c.1.5.5.8.9.8.2 0 .4-.1.6-.2l3.7-3.1c.9-.7 1.6-1.6 2.1-2.6.7-1.4 1.1-3 1.1-4.5 0-2.1-.6-4.1-1.8-5.8zm.2 5c-.1.3-.1.6-.2.9-.1.5-.2.8-.3 1.2-.3 1.1-.7 2-1.2 2.9-.4.8-.9 1.3-1.4 1.7-.4.3-.8.4-1.2.5-.7 0-1.1-.3-1.4-.6-.5-.5-.9-1.1-1.1-1.6-.1-.3-.3-.6-.4-.8-.3-.7-.6-1.4-.8-2.1-.1-.5-.3-.9-.4-1.6-.2-1-.4-2-.4-3.1v-.6c.2-1.2.7-1.9 1.7-2.3.6-.2 1.2-.4 1.7-.4s.9.1 1.3.2c1.2.4 2.3 1.3 3.1 2.5 1 .9 1.2 2 1 3.2z" fill="white"></path>
                        </g>
                    </svg>
                    <span class="text-center">Oyster Shells</span>
                    <p class="text-center">Oyster shells – traditionally a waste product – are being assessed by TOC for agricultural and health based Nutraceutical uses.</p>
                </div>
                <div class="flex items-center flex-col gap-4 max-w-[170px] environmental-stewardship relative" data-aos="fade-up" data-aos-duration="1200">
                    <svg preserveAspectRatio="none" data-bbox="32 31.999 448 448.001" viewBox="32 31.999 448 448.001" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="" class="h-[120px] w-[120px]">
                        <g>
                            <path fill="white" d="M236.5 190.8c-28.6 28.4-44.6 67.1-44.5 107.5 0 12 9.7 21.7 21.7 21.7 40.3.1 79-15.9 107.5-44.5l33.7-33.7c16.5-16.6 38.9-25.8 62.2-25.8h36.1c3.5 0 6.4-2.9 6.4-6.4 0-1.7-.7-3.3-1.9-4.5a71.983 71.983 0 0 0-50.9-21.1H336c-28.6-.1-56.1 11.3-76.3 31.6l-4.1 4.1c-20.3 20.2-31.7 47.7-31.6 76.3h-16c-.1-32.9 13-64.4 36.3-87.6l4.1-4.1c21.2-21.3 49.5-34.2 79.6-36v-63.1c.1-19.1-7.5-37.4-21.1-50.9-1.1-1.2-2.7-1.9-4.4-1.9-.9 0-1.7.2-2.6.5-2.4 1-4 3.3-3.9 5.9v36.1c.1 23.4-9.2 45.8-25.8 62.2l-33.7 33.7z"></path>
                            <path fill="white" d="M405.3 71.4c-3.1-5-5.8-10.2-8.2-15.6-9.9 5.6-19.3 12.1-28 19.4 2.2 8 5.4 15.7 9.5 22.8l26.7-26.6z"></path>
                            <path fill="white" d="M437.7 39c-7 2-13.9 4.4-20.6 7.1-1.9.8-3.8 1.6-5.7 2.5 1.6 3.8 3.4 7.6 5.5 11.2L437.7 39z"></path>
                            <path fill="white" d="M124.2 112c4.3 2.3 9 3.7 13.9 4.2 23.9 2.3 43.3 20.2 47.6 43.8h35.1l-48-48h-48.6z"></path>
                            <path fill="white" d="M197.3 216.3c7.6-13.5 17-25.9 27.9-36.8l3.5-3.5H187l.6 9.9c.7 10.8 4 21.2 9.7 30.4z"></path>
                            <path fill="white" d="M197.6 332.4c-6.7-3.2-12.2-8.2-16.1-14.5l-11.8 11.8c-1.6 1.6-2.6 3.8-2.6 6.1 10.1 3.9 21.5 2.6 30.5-3.4z"></path>
                            <path fill="white" d="M153.1 325.9c1.2-2.8 3-5.4 5.2-7.6l17.7-17.7c0-.8-.1-1.5-.1-2.3 0-10.1.9-20.2 2.7-30.2-6.6 2.3-13.6 3.6-20.7 3.8 1.3 5.8 2 11.7 2 17.7 0 12.1-3.1 23.9-9 34.4.8.7 1.5 1.3 2.2 1.9z"></path>
                            <path fill="white" d="m400.6 124.1 27-27c-4.6-3.9-8.8-8.1-12.7-12.7l-27 27c3.8 4.6 8.1 8.9 12.7 12.7z"></path>
                            <path fill="white" d="M376.6 122.8 344 155.3V168h12.7l32.6-32.6c-4.6-3.8-8.9-8.1-12.7-12.6z"></path>
                            <path fill="white" d="M438.9 85.8 478.7 46c.5-4.6.9-9.2 1.1-13.8-4.6.2-9.2.6-13.8 1.1l-39.8 39.8c3.8 4.6 8.1 8.9 12.7 12.7z"></path>
                            <path fill="white" d="M465.9 94.8c2.8-6.7 5.2-13.6 7.1-20.6L452.3 95c3.6 2.1 7.3 3.9 11.2 5.5.8-1.8 1.6-3.7 2.4-5.7z"></path>
                            <path fill="white" d="M456.2 114.9c-5.4-2.3-10.6-5-15.6-8.2l-26.7 26.7c7.2 4.1 14.8 7.3 22.8 9.5 7.4-8.7 13.9-18.1 19.5-28z"></path>
                            <path fill="white" d="m412.5 168.2 12.3-12.3c-7.9-2.8-15.4-6.4-22.5-10.9l-23 23h27.5c1.9 0 3.8.1 5.7.2z"></path>
                            <path fill="white" d="m344 132.7 23-23c-4.4-7.1-8.1-14.6-10.9-22.5l-12.3 12.3c.1 1.9.2 3.7.2 5.6v27.6z"></path>
                            <path fill="white" d="M64 144c3-2.2 6.2-4 9.7-5.3-5-11.2-12.7-20.9-22.5-28.3l9.6-12.8c13.1 9.9 23.2 23.2 29.1 38.4 21.3 1.1 38 18.6 38.1 40v22.4c0 14.8 5 29.1 14.2 40.6 4.1 5.2 7.6 10.9 10.4 16.9 1.1.1 2.3.1 3.4.1 9.8 0 19.3-2.7 27.6-7.9.4-1.3.8-2.6 1.3-3.9l-46.5-46.5 11.3-11.3 29.1 29.1c-4.1-9-6.5-18.7-7.1-28.6l-1.2-19.5c-1.1-18.5-15.5-33.5-34-35.3-22.2-2.2-40.8-17.9-46.6-39.5l-.3.2c-10.6-14.1-30.7-17-44.8-6.4s-17 30.7-6.4 44.8c6 8.1 15.5 12.8 25.6 12.8z"></path>
                            <path fill="white" d="m83.4 446.8-2.5-2.5c-16-16-25-37.7-25-60.3h16c-.1 18.4 7.3 36 20.3 49l14.3 14.3c8.7-1.2 17.1-4.2 24.6-8.7l-2.3-2.3c-16-16-25-37.7-25-60.3h16c-.1 18.4 7.3 36 20.3 49l3.7 3.7.3-.3c6.1-6.1 13.8-10.6 22.2-12.8C157 401.5 152 385 152 368h16c0 17.2 6.3 33.7 17.9 46.5 2.3.3 4.6.8 6.8 1.5l21.2-1.9c17.6-1.6 30.6-17.2 29-34.8-.5-5.1-2.1-10-4.9-14.3l-17.4-27.4c-3.9 1.2-7.6 3.2-10.8 5.7-19.5 15.7-47.7 14.1-65.4-3.6C131.8 327 114.7 320 96.9 320H96c-35.3 0-64 28.7-64 64 0 30.5 21.5 56.8 51.4 62.8z"></path>
                            <path fill="white" d="M232 448h-1.6c-11.2 0-22-3.8-30.7-10.8-13.2-10.6-32.2-9.5-44.1 2.4-15.5 15.6-36.7 24.4-58.7 24.3H96c-23.4 0-45.7-10.3-60.8-28.1C43.8 462.2 68.3 480 96 480h.9c17.8 0 34.9-7 47.4-19.6 17.7-17.7 45.9-19.3 65.4-3.6 5.9 4.7 13.2 7.2 20.7 7.3h1.6c21.9 0 41-14.9 46.5-36.1-12.1 12.7-28.9 20-46.5 20z"></path>
                            <path fill="white" d="M320 317.6v33.7c.1 54.4 31.1 104 80 127.8 48.9-23.8 79.9-73.4 80-127.8v-33.7l-80-29.1-80 29.1zm141.7 32.1L384 427.3l-29.7-29.7 11.3-11.3 18.3 18.3 66.3-66.3 11.5 11.4z"></path>
                            <path fill="white" d="m238.9 336.5 12.6 19.8c14.2 22.4 7.6 52-14.7 66.3-5.7 3.6-12.1 6-18.8 7 3.9 1.6 8.1 2.4 12.4 2.4h1.6c26.5 0 48-21.5 48-48 0-23.8-17.5-44.1-41.1-47.5z"></path>
                            <path fill="white" d="M96 304h.9c14.3 0 28.5 3.7 40.9 10.8 4.1-7.8 6.2-16.4 6.2-25.2 0-14.8-5-29.1-14.2-40.6-11.5-14.4-17.7-32.2-17.8-50.6V176c0-10.7-7.1-20.1-17.3-23 .9 5 1.3 10 1.3 15v16H80v-16c0-4.7-.5-9.4-1.4-14.1C69.7 157.7 64 166.4 64 176v22.4c0 18.4-6.3 36.2-17.8 50.6C37 260.5 32 274.9 32 289.6c0 12.3 4.2 24.2 11.8 33.8C58.3 310.9 76.8 304 96 304z"></path>
                            <path fill="white" d="M258.9 145.8c7.5-7.5 13.3-16.5 16.9-26.5-5.8-2-11.8-3.3-17.9-3.6l-19.5-1.2c-11.1-.7-21.7-4.8-30.4-11.7v22l36 36 14.9-15z"></path>
                            <path fill="white" d="m156.7 96-18.3-18.3 11.3-11.3 42.3 42.3V81.4c-2-4.9-3.3-10-3.8-15.3-1.9-19.4-18.2-34.2-37.7-34.1h-8.7C120.9 32 104 48.9 104 69.8v8.7c0 6.1 1.4 12.1 4.2 17.5h48.5z"></path>
                        </g>
                    </svg>
                    <span class="text-center">100% Complaint</span>
                    <p class="text-center">All TOC sites are 100% compliant with Food Safety HACCP audits, ensuring the world’s highest food safety standards are met.</p>
                </div>
                <div class="flex items-center flex-col gap-4 max-w-[170px] environmental-stewardship relative" data-aos="fade-up" data-aos-duration="1500">
                    <svg preserveAspectRatio="none" data-bbox="4 4 56 56" viewBox="4 4 56 56" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="" class="h-[120px] w-[120px]">
                        <g>
                            <path fill="white" d="M60 56v4H4v-4h56zM7 54V10h2v44H7zm10-37v2h-6v-2h6zm-6-2v-5h6v5h-6zm6 6v8h-6v-8h6zm0 10v2h-6v-2h6zm0 4v7h-6v-7h6zm0 9v2h-6v-2h6zm0 4v6h-6v-6h6zm2 6V10h2v44h-2zm10-37v2h-6v-2h6zm-6-2v-5h6v5h-6zm6 6v8h-6v-8h6zm0 10v2h-6v-2h6zm0 4v7h-6v-7h6zm0 9v2h-6v-2h6zm0 4v6h-6v-6h6zm2 6V10h2v44h-2zm10-37v2h-6v-2h6zm-6-2v-5h6v5h-6zm6 6v8h-6v-8h6zm0 10v2h-6v-2h6zm0 4v7h-6v-7h6zm0 9v2h-6v-2h6zm0 4v6h-6v-6h6zm2 6V10h2v44h-2zm10-37v2h-6v-2h6zm-6-2v-5h6v5h-6zm6 6v8h-6v-8h6zm0 10v2h-6v-2h6zm0 4v7h-6v-7h6zm0 9v2h-6v-2h6zm0 4v6h-6v-6h6zm2 6V10h2v44h-2zM4 4h56v4H4V4z"></path>
                        </g>
                    </svg>
                    <span class="text-center">Certified Bio-Secure</span>
                    <p class="text-center">Our Hatcheries are certified bio-secure. This status is maintained with regular, detailed auditing to ensure compliance remains at a very high level.</p>
                </div>
                <div class="flex items-center flex-col gap-4 max-w-[170px] environmental-stewardship relative" data-aos="fade-up" data-aos-duration="1800">
                    <svg preserveAspectRatio="none" data-bbox="1.9 2 56.1 56" viewBox="1.9 2 56.1 56" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="" class="h-[120px] w-[120px]">
                        <g>
                            <path fill="white" d="M54 53a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            <path fill="white" d="M39.3 6.8c-.5.9-1.4 1.5-2.4 1.6l-5 .5c-.3 0-.6.2-.8.5l-.4.8 14.1 7.6.4-.8c.2-.3.2-.6 0-.9l-2.4-4.5c-.5-.9-.5-1.9 0-2.8l.4-.8-3.5-2-.4.8z"></path>
                            <path fill="white" d="M51 45a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path>
                            <path fill="white" d="m45.1 6.6.9-1.7L40.7 2l-.9 1.8 5.3 2.8z"></path>
                            <path fill="white" d="M19.1 31.4c.7.1 1.3.6 1.6 1.2l1.2 3 3.8-1.4-1.2-3c-.2-.5-.2-1.1 0-1.5.2-.5.6-.9 1.1-1.1l3.8-1.4c1-.4 2.2.1 2.6 1.1l2.8 7.5 4.3-7.8c-1.8-.1-3.6-.9-4.9-2.2-2.3-2.3-6-2.4-8.3-.1l-.1.1c-1.3 1.3-3 2-4.8 2.2l-1.9 3.4z"></path>
                            <path fill="white" d="M22.2 25.7c.9-.3 1.7-.8 2.3-1.5 3-3 7.9-3 10.9 0 1.1 1.1 2.6 1.8 4.2 1.8h.5l3.5-6.4L29.7 12l-7.5 13.7z"></path>
                            <path fill="white" d="m23.3 53.9 13.3-5.1c.3-.1.5-.3.6-.5.1-.2.1-.5 0-.8l-2.9-7.8c-2.3-2.3-6-2.4-8.3-.1l-.1.1c-1.5 1.4-3.4 2.2-5.5 2.2-1 0-1.9-.2-2.8-.5L22 53.3c.1.6.7.8 1.3.6zm5.3-7 2.5-4.4c.3-.5.9-.6 1.4-.4.5.3.6.9.4 1.4l-2.5 4.4c-.3.5-.9.6-1.4.4s-.7-.9-.4-1.4zm-4.7.2 2.3-3.6c.3-.5.9-.6 1.4-.3.4.3.6.9.3 1.3l-2.3 3.6c-.2.3-.5.5-.8.5-.6 0-1-.4-1-1-.1-.2 0-.4.1-.5z"></path>
                            <path fill="white" d="M45 53a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            <path fill="white" d="M15 53a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            <path fill="white" d="M43.9 38.2c3-3 7.9-3 10.9 0 .9.9 2 1.5 3.2 1.7V28.8c0-.5-.4-.9-.8-1-1.4-.4-2.6-1.1-3.6-2-2.3-2.3-6-2.4-8.3-.1l-.1.1c-1 1-2.3 1.7-3.7 2l-5.7 10.4.1.4c1 .9 2.4 1.5 3.8 1.4 1.6 0 3.1-.6 4.2-1.8z"></path>
                            <path fill="white" d="M3 58h54c.5 0 1-.4 1-1V41.9c-1.7-.2-3.2-1-4.5-2.2-2.3-2.3-6-2.4-8.3-.1l-.1.1c-1.5 1.4-3.4 2.2-5.5 2.2-.9 0-1.8-.1-2.7-.5l2 5.3c.3.7.3 1.6-.1 2.3-.3.7-.9 1.3-1.7 1.6L24 55.8c-.3.1-.7.2-1.1.2-1.3 0-2.4-.8-2.8-1.9l-5.4-14.5c-1.1-1-2.5-1.6-4-1.6-1.6 0-3.1.6-4.2 1.8C5.3 41 3.7 41.7 2 41.9V57c0 .6.4 1 1 1zm53-5c0 1.7-1.3 3-3 3s-3-1.3-3-3 1.3-3 3-3 3 1.3 3 3zm-7-12c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm-5 9c1.7 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.3-3 3-3zm-27 3c0 1.7-1.3 3-3 3s-3-1.3-3-3 1.3-3 3-3 3 1.3 3 3zm-7-12c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4z"></path>
                            <path fill="white" d="M12 45a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path>
                            <path fill="white" d="M10.7 36c1 0 1.9.2 2.8.5l-.4-1c-.2-.5-.2-1 0-1.5s.6-.9 1.1-1.1l2.1-.8 2.3-4.3c-1.5-.3-2.8-1-3.9-2.1-2.3-2.3-6-2.4-8.3-.1l-.1.1c-1 1-2.3 1.7-3.6 2-.5.1-.8.5-.8 1v11.2c1.2-.2 2.3-.8 3.2-1.7 1.6-1.4 3.5-2.2 5.6-2.2z"></path>
                            <path fill="white" d="m15 34.8 1.4 3.6c1.1 1 2.5 1.6 4 1.6 1.6 0 3.1-.6 4.2-1.8C26 36.8 28 36 30 36c1 0 2.1.2 3 .6L30.2 29l-3.8 1.5 1.2 3c.2.5.2 1 0 1.5s-.6.9-1.1 1.1l-3.8 1.5c-1 .4-2.2-.1-2.6-1.2l-1.2-3-3.9 1.4z"></path>
                        </g>
                    </svg>
                    <span class="text-center">Regular Bay Clean-Ups</span>
                    <p class="text-center">Frequent and regular bay clean-ups by TOC, covering more than 23km of shoreline in FY21, helps to safeguard our pristine waterways.</p>
                </div>
                <div class="flex items-center flex-col gap-4 max-w-[170px] environmental-stewardship relative" data-aos="fade-up" data-aos-duration="2100">
                    <svg preserveAspectRatio="none" data-bbox="0 0 89.5 90.9" viewBox="0 0 89.5 90.9" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="" class="h-[120px] w-[120px]">
                        <g>
                            <path fill="white" d="M15.6 29S0 48.2 0 58.1C0 67.9 7.1 76 15.6 76s15.6-8.1 15.6-17.9c0-9.9-15.6-29.1-15.6-29.1zm3.6 43.8s5.8-5.8 9-14.2c0 .1 1 8.9-9 14.2z"></path>
                            <path fill="white" d="M64.5 20.2c-6-9.2-12-17-14.4-20.2-2.5 3.2-8.5 11-14.4 20.2-3.6 5.5-7.2 11.6-10 17.5 4.2 6.5 8.6 14.6 8.6 20.4 0 7.5-3.5 14-8.7 17.8 1 1.7 2.2 3.4 3.5 4.9 5.5 6.3 12.9 10.1 21 10.1s15.6-3.9 21-10.1c5.5-6.3 8.9-15 8.9-24.5.1-9.3-7.7-24-15.5-36.1zM59.6 84s9.7-9.7 15.1-23.7c0-.1 1.7 14.7-15.1 23.7z"></path>
                            <path fill="white" d="m78.2 38.5.3.7c.2.5.4 1 .6 1.4 1.4-1.5 5.1-6 7.4-12 0 0 .8 7.4-7.3 12.2.2.6.5 1.2.7 1.7 5.6-2.1 9.6-8.1 9.6-15.2 0-8.4-12.4-23.8-12.9-24.4l-1.2-1.5L74.3 3c-.3.4-5.2 6.5-8.9 13 .6.8 1.1 1.7 1.7 2.5 4 6.4 8.1 13.3 11.1 20z"></path>
                        </g>
                    </svg>
                    <span class="text-center">Organic Processes</span>
                    <p class="text-center">Our oysters feed on naturally occurring algae only. They are natural filters of the ocean. In fact, a single oyster can filter up to 190 litres of water a day.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-16 md:py-32 text-white overflow-hidden"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{Vite::asset('resources/images/front/sustainability-oyster.jpeg')}}'">
        <div class="overlay"></div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-8 md:gap-6 lg:gap-4 relative">
                <div data-aos="fade-right" data-aos-duration="1800">
                    <p class="text-lg lg:text-2xl font-light">Every day, we are removing carbon from the atmosphere, as our 165m oysters sequester carbon into their shells. Every day, we are removing carbon from the atmosphere, as our 165m oysters seques</p>
                </div>
                <div class="self-center flex justify-center" data-aos="fade-up" data-aos-duration="2000">
                    <svg preserveAspectRatio="none" data-bbox="2.9 5.9 58.1 52.1" viewBox="2.9 5.9 58.1 52.1" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" class="w-[280px] h-[280px]">
                        <g>
                            <path fill="white" d="M24.4 30.1c-.3-.6-.4-1.2-.4-1.8 0-.6-.2-1.1-.6-1.5l-2.1-2.1-6.5-5.5c-.1-.1-.3-.2-.4-.2-.3 0-.6.2-.7.5l-.3 1.6c-.3 1.3-.4 2.7-.4 4 0 2.7-.5 5.3-1.4 7.9-1 2.5-1.5 5.2-1.5 7.9l.3 1.2.2.7c.7 2.5 3 4.2 5.6 4.2 1 0 2.1-.3 3-.8l.8-.5 1 1.7-.8.5c-1.2.7-2.6 1.1-4 1.1-2.2 0-4.2-.9-5.6-2.4l.1.2c.7 2.5 3 4.2 5.6 4.2 1 0 2.1-.3 3-.8l.8-.5c1.4-.8 2.4-2.2 2.7-3.8l.3-1.4c.1-.6.4-1.2.7-1.6l.1-.2c1.5-1.9 2.3-4.4 2.3-6.8 0-1.7-.4-3.5-1.2-5.1l-.6-.7z"></path>
                            <path fill="white" d="m23.1 21-8.8-7.5c-.4-.3-.9-.5-1.4-.5-1.1 0-2.1.8-2.2 1.9L9.2 25.2C9 26.6 8.3 28 7.3 29c-.9.9-1.4 2-1.4 3.3v3.9L4.5 39c-1 2.1-1.6 4.4-1.6 6.7 0 2.6.7 5.2 2 7.4l.5.9c.8 1.3 2 2 3.4 2h.7c1.2 0 2.3.3 3.2 1l.2.1c.9.6 1.9.9 3 .9 1.6 0 3.1-.8 4.1-2.1.9-1.2 2.4-1.9 3.9-1.9 1 0 1.9-.5 2.4-1.3l.4-.7c2.8-4.2 4.2-9 4.2-14 0-3.8-1-7.5-2.8-10.8-1.2-2.4-2.9-4.4-5-6.2zm2.2 22.9-.1.1c-.2.2-.3.5-.4.8l-.3 1.4c-.4 2.1-1.8 4-3.6 5.2l-.8.5c-1.2.7-2.6 1.1-4 1.1-3.5 0-6.5-2.3-7.5-5.6l-.1-.4c-.3-1.2-.5-2.5-.5-3.8v-2.1c.1-3 .6-5.9 1.7-8.7.9-2.3 1.3-4.7 1.3-7.2 0-1.5.1-2.9.4-4.4l.3-1.6c.2-1.2 1.4-2.2 2.6-2.2.6 0 1.3.2 1.7.6l6.5 5.6 2.2 2.2c.8.8 1.2 1.8 1.2 2.9 0 .3.1.6.2.9l.4.8c.9 1.8 1.4 3.9 1.4 5.9.1 2.9-.8 5.7-2.6 8z"></path>
                            <path fill="white" d="M59.7 33.4C60.6 31 61 28.5 61 26c0-1.6-.2-3.1-.5-4.7l-.4-.9c-.6-1.3-1.4-2.6-2.3-3.8-1.2-1.5-2.7-2.8-4.3-3.8l1-1.7c1.2.7 2.3 1.5 3.3 2.5-.3-.6-.7-1.1-1-1.7l-.4-.7c-.5-.8-1.4-1.3-2.4-1.3-1.5 0-3-.7-3.9-1.9-1-1.3-2.5-2.1-4.1-2.1-1.1 0-2.1.3-3 .9l-.2.2c-1 .6-2.1 1-3.2 1h-.7c-1.4 0-2.6.7-3.3 1.9l-.6.9c-.8 1.4-1.4 3-1.7 4.5.2-.2.3-.4.5-.6C36.9 11.1 41.5 9 46.3 9c1 0 1.9.1 2.8.2l-.3 2c-.8-.1-1.6-.2-2.5-.2-4.3 0-8.3 1.9-11.1 5.1-.9 1-1.6 2.1-2.1 3.3l-.1.2c.1 1.4.5 2.8 1 4.1.2-2.3 1.2-4.5 2.7-6.3 2.4-2.8 5.9-4.4 9.6-4.4 3.9 0 7.5 1.8 9.9 4.9 2.4 3.1 3.7 7 3.7 10.9.1 1.5 0 3-.2 4.6z"></path>
                            <path fill="white" d="M46.3 15c-3.1 0-6 1.3-8 3.7-1.5 1.7-2.3 3.9-2.3 6.2v6.8c0 1.2.5 2.4 1.4 3.3 1 1 1.7 2.4 1.9 3.8l1.4 10.3c.1 1.1 1.1 1.9 2.2 1.9.5 0 1-.2 1.4-.5l8.9-7.5c1.5-1.3 2.8-2.7 3.9-4.3l.7-5.5c.2-1.5.3-2.9.3-4.4 0-3.5-1.2-6.9-3.3-9.6-2.1-2.7-5.2-4.2-8.5-4.2zM40 34h-2v-2h2v2zm15.7-1.1-.7 5.7-2-.2.7-5.8c.2-1.3.2-2.6.2-3.9 0-2.6-.9-5.1-2.5-7.2-1.3-1.6-3.2-2.5-5.2-2.5-1.9 0-3.8.8-5 2.3-.9 1-1.3 2.3-1.3 3.6V30h-2v-5.1c0-1.8.6-3.5 1.8-4.9 1.6-1.9 4-3 6.5-3 2.7 0 5.1 1.2 6.8 3.3 1.9 2.4 2.9 5.4 2.9 8.4.1 1.4 0 2.8-.2 4.2z"></path>
                        </g>
                    </svg>
                </div>
                <div data-aos="fade-left" data-aos-duration="1800">
                    <span class="text-lg lg:text-2xl mb-4 font-light block text-end">Oysters, a natural source of:</span>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="horizontal-line"><div class="arrow"></div></div>
                        <span class="text-lg lg:text-2xl font-light block text-end text-nowrap">Zinc</span>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="horizontal-line"><div class="arrow"></div></div>
                        <span class="text-lg lg:text-2xl font-light block text-end text-nowrap">Vitamin B12</span>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="horizontal-line"><div class="arrow"></div></div>
                        <span class="text-lg lg:text-2xl font-light block text-end text-nowrap">Vitamin D</span>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="horizontal-line"><div class="arrow"></div></div>
                        <span class="text-lg lg:text-2xl font-light block text-end text-nowrap">Selenium</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        new Typed('#sustainability_title', {
            strings: ['Sustainability'],
            typeSpeed: 100,
            showCursor: false,
            loop: true,
            backDelay: 1700,
        });
    </script>
@endpush