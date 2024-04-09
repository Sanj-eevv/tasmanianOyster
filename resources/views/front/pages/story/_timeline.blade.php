@push('styles')
    <style>
        div.timeline-content{
            transition: opacity 0.3s ease-in;
        }
        .timeline-date:hover + div.timeline-content{
            opacity: 1;
        }
    </style>
@endpush
<div class="timeline">
    <div class="mx-auto w-full h-full">
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-white h-full border border-dashed" style="left: 50%"></div>
            @foreach($stories as $story)
                <div class="mb-8 flex justify-between items-center w-full {{$loop->even ? 'right' : 'flex-row-reverse left'}}-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                        <h1 class="mx-auto font-semibold text-lg text-white">{{$story->year}}</h1>
                    </div>
                    <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                        <h3 class="mb-3 font-normal text-white text-xl text-capitalize">{{$story->title}}</h3>
                        <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">{{$story->description}}</p>
                    </div>
                </div>
            @endforeach
            <!-- right timeline -->


            <!-- left timeline -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-16 h-16 rounded-full cursor-pointer timeline-date">
                    <h1 class="mx-auto font-semibold text-lg text-white">2000</h1>
                </div>
                <div class="order-1 bg-gray-800 rounded-lg shadow-xl w-5/12 px-6 py-4 opacity-0 timeline-content">
                    <h3 class="mb-3 font-normal text-white text-xl">Lorem Ipsum</h3>
                    <p class="text-sm font-light leading-snug tracking-wide text-white text-opacity-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>

        </div>
    </div>
</div>