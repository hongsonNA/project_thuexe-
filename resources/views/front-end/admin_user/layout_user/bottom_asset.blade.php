<!--   Core JS Files   -->
<script src="{{ asset('front-end-css/assets/js/core/jquery.min.js')}}"></script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
{{--<script src="https://cdn.datatables.net/autofill/2.3.4/js/dataTables.autoFill.min.js"></script>--}}
<script src="{{ asset('front-end-css/assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('front-end-css/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('front-end-css/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chart JS -->
<script src="{{ asset('front-end-css/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('front-end-css/assets/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{ asset('front-end-css/js/bootstrap-tagsinput.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('front-end-css/assets/js/paper-dashboard.min.js')}}" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('front-end-css/assets/demo/demo.js')}}"></script>
<script src="{{ asset('front-end-css/assets/demo/main.js')}}"></script>
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        // Javascript method's body can be found in front-end-css/assets/front-end-css/assets-for-demo/js/demo.js--}}
{{--        demo.initChartsPages();--}}
{{--    });--}}
{{--</script>--}}
<script src="{{ asset('js/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
@stack('scripts')



