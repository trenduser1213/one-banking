@if (Session::has('success'))
    <script>
        swal("success","your request was successfull","success")
    </script>
@endif
@if (Session::has('error'))
    <script>
        swal("error",'your request was failed',"error")
    </script>
@endif
