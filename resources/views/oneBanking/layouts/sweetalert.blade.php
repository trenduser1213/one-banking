@if (Session::has('success'))
    <script>
        swal("success","(!!Session::get('success')!!)","success",{
            button:"OK"
        })
    </script>
@endif
@if (Session::has('error'))
    <script>
        swal("error",'your request was failed',"error",{
            button:"OK"
        })
    </script>
@endif
