@if(Session::get('alert_type'))
    <script type="text/javascript">
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
		@if(Session::get('alert_type') === 'success')
			toastr.success("{{ Session::get('alert') }}")
		@endif
		@if(Session::get('alert_type') === 'info')
	 		toastr.info("{{ Session::get('alert') }}");
		@endif
		@if(Session::get('alert_type') === 'warning')
	 		toastr.warning("{{ Session::get('alert') }}");
		@endif
		@if(Session::get('alert_type') === 'error')
	 		toastr.error("{{ Session::get('alert') }}");
		@endif
	</script>
@endif