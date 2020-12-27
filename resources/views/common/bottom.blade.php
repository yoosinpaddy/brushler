





<script type="text/javascript" src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/before.load.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.hotkeys.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nouislider.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/maps.js')}}"></script>

<script>
    $(window).load(function(){
        var rtl = false; // Use RTL
        initializeOwl(rtl);
    });

    autoComplete();
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="{{asset('js/ie-scripts.js')}}"></script>
<![endif]-->
