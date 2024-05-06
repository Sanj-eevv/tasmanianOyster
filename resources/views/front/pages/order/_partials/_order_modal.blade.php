<div id="order-modal"
     tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Order Now - <span id="order-title"></span>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" id="close-order-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4" action="{{route('front.order.store')}}" id="order-form" method="POST">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 pb-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Umami</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-right" id="order-umami"></dd>
                    </div>
                    <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Saltiness</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-right" id="order-saltiness"></dd>
                    </div>
                    <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Texture</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-right" id="order-texture"></dd>
                    </div>
                    <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Finish</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-right" id="order-finish"></dd>
                    </div>
                </dl>
                <div class="relative mb-4">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                </div>
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <input type="hidden" name="john_reserve_id" value="" id="john-reserve-id">
                    <div class="col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" autocomplete="off" placeholder="Enter Email">
                        <span class="invalid-feedback hidden mt-2 text-xs text-red-500" id="email_error"></span>
                    </div>
                    <div class="col-span-2">
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" autocomplete="off" placeholder="Quantity"
                        min="1" step="1"
                        >
                        <span class="invalid-feedback hidden mt-2 text-xs text-red-500" id="quantity_error"></span>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="off" placeholder="Write a order description here"></textarea>
                        <span class="invalid-feedback hidden mt-2 text-xs text-red-500" id="description_error"></span>
                    </div>
                </div>
                <button id="create-button" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 inline-flex items-center">
                    <svg id="create-button-spinner" aria-hidden="true" role="status" class="hidden w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                    </svg>
                    Create Order
                </button>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function (){
            initFlowbite();
            const $targetEl = document.getElementById('order-modal');
            const options = {
                backdrop: 'static',
                backdropClasses:
                        'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
                closable: true,
            };
            const instanceOptions = {
                id: 'order-modal',
                override: true
            };
            const modal = new Modal($targetEl, options, instanceOptions);
            $(document).on('click', '.buy-now', function (){
                $('#order-title').text($(this).attr('data-title'))
                $('#order-umami').text($(this).attr('data-umami'))
                $('#order-saltiness').text($(this).attr('data-saltiness'))
                $('#order-texture').text($(this).attr('data-texture'))
                $('#order-finish').text($(this).attr('data-finish'))
                $('#john-reserve-id').val($(this).attr('data-id'))
                modal.show();
            });

            $(document).on('click', '#close-order-modal', function (){
                $('#order-form').trigger('reset');
                modal.hide();
            });


            $(document).on('submit', '#order-form', function (e){
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    dataType: 'json',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: $(this).serialize(),
                    beforeSend: function (){
                        $('#create-button').attr('disabled', true);
                        $('#create-button-spinner').show();
                        $('#close-order-modal').attr('disabled',true);
                    },
                    success: function (resp) {
                        toastr.success(resp.message);
                        $('#order-form').trigger('reset');
                        $(".invalid-feedback").text("");
                        modal.hide();
                    },
                    error: function (xhr) {
                        if(xhr.status === 422){
                            const errors = xhr.responseJSON.errors;
                            showAjaxErrorsOnForms(errors, 'order-form');
                        }else{
                            toastr.error(xhr.responseJSON?.message ? xhr.responseJSON?.message : "Something went wrong!!!");
                        }
                    },
                    complete: function (){
                        $('#create-button').attr('disabled', false);
                        $('#create-button-spinner').hide();
                        $('#close-order-modal').attr('disabled',false);
                    }
                });
            })


        })
    </script>
@endpush