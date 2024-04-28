@extends('layouts.front.index')
@push('styles')
    <style>
        .gallery-container .image-box{
            width: 100%;
            margin-bottom: 10px;
            break-inside: avoid;
        }
        .gallery-container .image-box img{
            height: 208px;
            width: 100%;
        }
        @media (min-width: 480px) {
            .gallery-container{
                columns: 2;
                column-gap: 10px;
            }
        }
        @media (min-width: 768px) {
            .gallery-container{
                columns: 3;
            }
        }
        @media (min-width: 1024px) {
            .gallery-container{
                columns: 4;
            }
            .gallery-container .image-box img{
                height: unset;
            }
        }
    </style>
@endpush
@section('content')
    <div class="bg-black relative">
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute absolute-center-vertical">
                <div class="min-h-[60px]">
                    <h1 class="hero-title" id="our_people_title"></h1>
                </div>
            </div>
        </div>
        <div class="h-[400px] sm:h-[600px] w-full">
            <img src="{{Vite::asset('resources/images/front/our-people.jpeg')}}" alt="Story" class="cover-image h-full w-full">
        </div>
    </div>
    <div class="bg-black min-h-[500px] relative py-8 pb-16 lg:pb-32"  style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{Vite::asset('resources/images/front/our-people-2.jpeg')}}'">
        <div class="overlay"></div>
        <div class="container text-white">
            <h2 class="section-title text-center capitalize" data-aos="fade-up" data-aos-duration="1600">Our People</h2>
            <div class="description-div" data-aos="fade-up" data-aos-duration="1800">A world class shellfish company is governed by nature. Success only occurs in a pristine environment. We are the stewards of our coasts, seas and ecosystems.</div>
        </div>
    </div>
    <div class="section-gallery bg-black section-padding-bottom">
        <div class="container">
            <h3 class="section-title text-white aos-init aos-animate text-center" data-aos="fade-up" data-aos-duration="1800">
                Gallery
            </h3>
            <div>
                <div class="gallery-container">
                </div>
                <div class="text-center flex justify-center">
                    <button type="button" id="gallery-loading-btn" data-page="1" class="text-white border rounded-full border-[2px] border-white py-2 px-12 mt-8 text-right
                            transition duration-300 flex items-center justify-center gap-4">
                        <span class="loading-text">Load More</span>
                        <div role="status" class="loading-spinner hidden">
                            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#fff"/>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            new Typed('#our_people_title', {
                strings: ['Our People.'],
                typeSpeed: 100,
                showCursor: false,
                loop: true,
                backDelay: 1700,
            });

            const loadGallery = () => {
                const loadingBtn = $('#gallery-loading-btn');
                let  currentPage = parseInt(loadingBtn.attr('data-page'));
                $.ajax({
                    url: "{{route('front.our-people.index')}}",
                    dataType:'json',
                    type:'GET',
                    data: {
                        page: currentPage,
                    },
                    beforeSend: function() {
                        loadingBtn.attr('disabled', true);
                        loadingBtn.find('.loading-text').text('Loading....')
                        loadingBtn.find('.loading-spinner').removeClass('hidden')
                    },
                    success:function(resp){
                        $('.gallery-container').append(resp.html);
                        loadingBtn.attr('data-page',currentPage + 1)
                        if(resp.total === 0){
                            loadingBtn.remove();
                        }
                    },
                    error: function(xhr){
                        toastr.error(xhr.responseJSON.message ?xhr.responseJSON.message: 'Couldn\'t load data' );
                    },
                    complete: function (){
                        loadingBtn?.attr('disabled', false);
                        loadingBtn?.find('.loading-text').text('Load More')
                        loadingBtn?.find('.loading-spinner').addClass('hidden')
                    }
                });
            }
            $(document).ready(function (){
                loadGallery();
                $(document).on('click', '#gallery-loading-btn', function (){
                    loadGallery();
                });
            });
        })
    </script>
@endpush