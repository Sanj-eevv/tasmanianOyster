@if(session('toast.success'))
    <script>
        toastr.success("{!! session('toast.success') !!}");
    </script>
@endif

@if(session('toast.error'))
    <script>
        toastr.error("{!! session('toast.error') !!}");
    </script>
@endif

@if(session('alert.success'))
    <script>
        Swal.fire(
                'Success!',
                "{!! session('alert.success') !!}",
                'success'
        )
    </script>
@endif

@if(session('alert.error'))
    <script>
        Swal.fire(
                'Oops!',
                "{!! session('alert.error') !!}",
                'error'
        )
    </script>
@endif