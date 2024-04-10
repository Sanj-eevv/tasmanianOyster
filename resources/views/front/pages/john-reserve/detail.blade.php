@extends('layouts.front.index')
@push('styles')
    <style>
        .john-reserve-detail .hero-title{
            font-family: "DM Sans",  "poppins", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }
        svg.pointer{
            height: 45px;
            width: 45px;
        }
        svg.pointer [data-color="1"] {
            fill: #C59A84;
        }
        svg.pointer [data-color="2"]{
            fill: #000000;
        }
        .range-label{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -40px;
        }
    </style>
@endpush
@section('content')
    <div class="bg-black text-white">
        <div class="container john-reserve-detail">
            <div class="flex gap-24">
                <div class="min-h-[500px] max-h-[700px] flex-1">
                    <img src="{{asset("storage/uploads/john-reserve-details.webp")}}" alt="John Reserve Details"
                         class="cover-image h-full w-full">
                </div>
                <div class="flex-1 pt-10">
                    <div class="relative py-8 bg-black -left-3/4 pl-20 mb-8">
                        <h1 class="hero-title whitespace-nowrap">pipeclay lagoon</h1>
                    </div>
                    <p class="tracking-wide font-extralight leading-8 text-justify">
                        A moderate saltiness begins the taste experience for the Pipeclay Lagoon oyster and is followed quickly with a short burst of sweetness before evolving to a soft granite/slate and organic umami with a clear, bright seaweed, spinach and faint melon finish. Typically, Pipeclay oysters exhibit mild resistance and soft squeakiness to the tooth before moving through to a satiny, silkiness of texture that rounds out the experience.
                    </p>
                </div>
            </div>
        </div>
        <div class="container relative">
            <div class="value-slider">
                <h2 class="section-title uppercase !font-normal !mb-4">umami</h2>
                <div class="range-slider relative">
                    <div class="flex justify-between">
                        <div class="h-[20px] w-[20px] bg-white rounded-full relative">
                            <span class="range-label">Low</span>
                        </div>
                        <div class="h-[20px] w-[20px] bg-white rounded-full relative"></div>
                        <div class="h-[20px] w-[20px] bg-white rounded-full relative">
                            <span class="range-label">Medium</span>
                        </div>
                        <div class="h-[20px] w-[20px] bg-white rounded-full relative"></div>
                        <div class="h-[20px] w-[20px] bg-white rounded-full relative">
                            <span class="range-label">Full</span>
                        </div>
                    </div>
                    <div class="h-[2px] w-full bg-white absolute top-1/2"></div>
                    <div class="absolute -top-[15px]">
                        <div class="relative">
                            <svg class="pointer" data-bbox="0.755 0.727 490.082 490.083" viewBox="0.755 0.727 490.082 490.083" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                                <g>
                                    <path d="M323.25 423.3c-2.6 2.12-5.18 4.25-7.79 6.35a271.571 271.571 0 0 1-47.17 30.5c-21.4 10.9-43.86 18.81-67.25 24.1-14.01 3.16-28.21 5.12-42.55 5.93-5.5.31-11.02.58-16.52.59-33.32.05-66.64 0-99.95.04-10.48.01-19.88-2.96-27.72-10C4.33 471.85-.31 460.52.96 447.17c1.41-14.88 9.2-25.71 22.48-32.43 21.56-10.9 40.65-25.12 57.46-42.43 9.35-9.63 17.73-20.04 25.09-31.27.15-.23.27-.49.41-.73.09-.08.19-.14.25-.24 5.78-9.08 10.94-18.49 15.31-28.34 4.82-10.86 8.71-22.04 11.76-33.52 2.69-10.15 4.78-20.41 5.75-30.87.49-5.28.97-10.57 1.13-15.86.24-7.87.12-15.75.29-23.62.09-4.06.23-8.15.77-12.17.81-6.07 1.72-12.16 3.05-18.13 2.67-11.96 7.3-23.19 13.25-33.9 8.35-15.05 18.76-28.44 31.89-39.65 7.69-6.57 16.02-12.17 24.97-16.86 9.19-4.82 18.82-8.53 28.79-11.42 11.61-3.37 23.47-4.95 35.52-5.1 3.3-.04 6.61.21 9.91.41 3.17.19 6.36.34 9.5.76 6.33.85 12.59 2.07 18.78 3.74 8.86 2.39 17.39 5.61 25.6 9.65 6.39 3.14 12.48 6.81 18.32 10.9 6.47 4.52 12.49 9.57 18.1 15.09 2.64 2.59 5.16 5.33 7.49 8.19 3.5 4.3 6.94 8.67 10.13 13.2 4.6 6.51 8.28 13.57 11.57 20.83 3.17 6.97 5.63 14.18 7.65 21.56 2.65 9.66 4.12 19.53 4.45 29.51.25 7.45-.03 14.93-.39 22.38-.31 6.28-.95 12.56-1.69 18.81-.65 5.53-1.5 11.05-2.5 16.54-1.81 10.01-4.32 19.86-7.25 29.6a283.36 283.36 0 0 1-15.61 40.4c-6.95 14.57-15.06 28.48-24.63 41.47-5.25 7.13-10.94 13.94-16.54 20.81-2.45 3-5.12 5.82-7.81 8.61-3.66 3.79-7.39 7.53-11.19 11.19-3.19 3.08-6.51 6.01-9.77 9.01Z" fill="#000000" data-color="1"></path>
                                    <path d="M91.65 330.96c-.51-.27-1.11-.45-1.53-.82-7.82-7.06-12.61-15.84-14.68-26.12-.36-1.77-.41-3.61-.56-5.42-.45-5.63.28-11.15 1.97-16.51 1.75-5.56 4.55-10.59 8.2-15.16 4.22-5.28 7.53-11.07 10.06-17.37 8.28-20.6 4.5-46.91-12.17-65.01-7.74-8.4-11.92-18.3-12.19-29.79-.3-12.69 3.59-23.85 12.48-33 6.53-6.71 14.49-10.94 23.83-12.29 6.44-.93 12.88-1.84 19.02-4.18 12.57-4.79 22.06-13.23 29.21-24.49 6.11-9.64 9.28-20.17 9.46-31.57.21-13.3 5-24.6 14.75-33.66 6.12-5.69 13.53-8.73 21.72-10.06 12.68-2.06 23.67 1.4 33.21 9.88 10.55 9.38 22.92 14.24 37 14.9 15.52.73 28.88-4.49 40.53-14.51 2.91-2.5 5.67-5.18 8.71-7.51 8.07-6.18 17.38-8 27.34-7.45 18.95 1.05 35.61 18.42 37.96 35.86.55 4.07.96 8.17 1.65 12.22.84 4.87 2.38 9.53 4.5 14.02 2.92 6.19 6.67 11.77 11.37 16.77 5.51 5.86 11.8 10.6 19.13 13.9 7.23 3.26 14.86 4.66 22.8 4.88 18.68.54 35.61 14.58 39.85 32.77 2.41 10.37 2.12 20.57-2.47 30.31-1.59 3.36-3.7 6.52-5.85 9.57-3.21 4.55-6.5 9.04-8.83 14.13-2.33 5.09-4.25 10.33-4.91 15.92-.47 4.04-.9 8.11-.92 12.17-.02 5.51.88 10.96 2.42 16.27 1.74 6 4.24 11.68 7.86 16.77 2.37 3.33 5.13 6.37 7.64 9.6 4.7 6.05 8.39 12.6 9.75 20.27 1.76 9.93.97 19.59-3.29 28.81-4.35 9.41-11.32 16.3-20.63 20.87-4.24 2.08-8.65 3.34-13.35 3.85-8.98.98-17.53 3.47-25.46 7.88-5.33 2.96-10.01 6.77-14.06 11.3-5.32 5.95-9.24 12.76-12.21 20.18-1.62 4.05-2.76 8.2-3.5 12.47-.33 1.9-.43 3.85-.51 5.78-.25 5.59-.45 11.2-2.22 16.57-1.84 5.59-4.69 10.68-8.57 15.1-2.18 2.49-4.65 4.77-7.2 6.88-3.79 3.13-8.35 4.86-13.01 6.19-8.07 2.3-16.18 2.83-24.24-.14-.41-.15-.77-.46-1.15-.7.48-.53.94-1.08 1.46-1.57 2.6-2.48 5.31-4.86 7.82-7.42 4.17-4.25 8.35-8.5 12.28-12.96 4.91-5.57 9.74-11.22 14.32-17.06 10.49-13.4 19.59-27.73 27.54-42.77 7.05-13.33 13.06-27.12 17.98-41.39 4.01-11.63 7.27-23.46 9.8-35.5 2.47-11.75 4.42-23.58 5.29-35.56.51-7 .94-14.01 1.11-21.03.12-4.86-.2-9.73-.42-14.59-.15-3.29-.29-6.61-.76-9.86-.83-5.65-1.7-11.32-2.93-16.89-2.4-10.83-6.08-21.25-10.89-31.26-3.75-7.8-8.15-15.22-13.14-22.31-4.59-6.53-9.55-12.73-15.04-18.51-5.96-6.28-12.29-12.16-19.22-17.4-7.03-5.31-14.4-10.06-22.21-14.13-9.06-4.72-18.51-8.44-28.31-11.34-11.17-3.3-22.55-5.49-34.17-6.14-5.49-.31-11.02-.29-16.52-.06-5.45.23-10.89.79-16.31 1.42-8.02.93-15.85 2.83-23.56 5.2-10.53 3.23-20.61 7.55-30.24 12.91-11.79 6.57-22.63 14.45-32.3 23.85-4.69 4.56-9.11 9.43-13.31 14.44-8.31 9.9-15.07 20.82-20.57 32.53-6.62 14.07-11.04 28.79-13.29 44.18-1.02 7-1.55 14.03-1.61 21.1-.09 10.34.3 20.7-.74 31.02-.56 5.51-1.11 11.03-1.99 16.49-1.47 9.14-3.66 18.13-6.49 26.95-4.14 12.9-9.46 25.28-16.16 37.05-1.99 3.5-4.21 6.87-6.33 10.3Z" fill="#000000" data-color="1"></path>
                                    <path d="M91.65 330.96c2.11-3.43 4.33-6.8 6.33-10.3 6.71-11.77 12.03-24.16 16.16-37.05 2.83-8.82 5.03-17.81 6.49-26.95.88-5.46 1.43-10.98 1.99-16.49 1.05-10.32.66-20.68.74-31.02.06-7.07.59-14.09 1.61-21.1 2.25-15.39 6.67-30.11 13.29-44.18 5.5-11.7 12.26-22.63 20.57-32.53 4.21-5.01 8.62-9.88 13.31-14.44 9.67-9.39 20.51-17.28 32.3-23.85 9.63-5.36 19.71-9.68 30.24-12.91 7.71-2.36 15.54-4.26 23.56-5.2 5.42-.63 10.86-1.19 16.31-1.42 5.5-.23 11.03-.25 16.52.06 11.63.65 23 2.84 34.17 6.14 9.79 2.9 19.25 6.62 28.31 11.34 7.81 4.07 15.18 8.82 22.21 14.13 6.93 5.24 13.26 11.11 19.22 17.4 5.48 5.78 10.45 11.99 15.04 18.51 4.98 7.09 9.39 14.5 13.14 22.31 4.81 10.01 8.49 20.43 10.89 31.26 1.24 5.57 2.11 11.24 2.93 16.89.48 3.26.61 6.57.76 9.86.22 4.86.54 9.73.42 14.59-.18 7.01-.6 14.03-1.11 21.03-.87 11.98-2.82 23.81-5.29 35.56-2.53 12.03-5.8 23.87-9.8 35.5-4.92 14.27-10.93 28.06-17.98 41.39-7.96 15.04-17.06 29.36-27.54 42.77-4.57 5.84-9.41 11.5-14.32 17.06-3.94 4.46-8.12 8.71-12.28 12.96-2.52 2.57-5.22 4.95-7.82 7.42-.52.49-.97 1.05-1.46 1.57-6.24-1.64-12.05-4.21-17.3-7.99 3.26-3 6.58-5.94 9.77-9.01 3.79-3.66 7.52-7.4 11.19-11.19 2.69-2.79 5.36-5.61 7.81-8.61 5.61-6.86 11.29-13.68 16.54-20.81 9.57-13 17.68-26.9 24.63-41.47a283.36 283.36 0 0 0 15.61-40.4c2.93-9.75 5.43-19.59 7.25-29.6.99-5.48 1.85-11 2.5-16.54.74-6.25 1.38-12.53 1.69-18.81.37-7.45.64-14.93.39-22.38-.33-9.98-1.8-19.85-4.45-29.51-2.02-7.37-4.49-14.58-7.65-21.56-3.3-7.26-6.98-14.31-11.57-20.83-3.2-4.53-6.63-8.9-10.13-13.2a98.37 98.37 0 0 0-7.49-8.19c-5.62-5.52-11.63-10.57-18.1-15.09-5.84-4.09-11.93-7.75-18.32-10.9-8.22-4.04-16.75-7.27-25.6-9.65-6.18-1.67-12.44-2.89-18.78-3.74-3.15-.42-6.33-.57-9.5-.76-3.3-.2-6.61-.45-9.91-.41-12.06.14-23.92 1.73-35.52 5.1-9.96 2.89-19.6 6.6-28.79 11.42-8.95 4.69-17.28 10.3-24.97 16.86-13.13 11.21-23.54 24.59-31.89 39.65-5.94 10.71-10.58 21.94-13.25 33.9-1.33 5.97-2.24 12.06-3.05 18.13-.53 4.02-.68 8.11-.77 12.17-.17 7.87-.05 15.75-.29 23.62-.16 5.29-.64 10.58-1.13 15.86-.97 10.46-3.06 20.73-5.75 30.87-3.04 11.48-6.94 22.66-11.76 33.52-4.37 9.84-9.53 19.26-15.31 28.34-.06.09-.17.16-.25.24-4.42-1.96-8.61-4.31-12.39-7.34-.8-.64-1.56-1.34-2.33-2.02Z" fill="#093479" data-color="2"></path>
                                </g>
                            </svg>
                            <span class="value absolute top-[10px] left-[55%] -translate-x-1/2 font-bold text-sm text-black">2.9</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush