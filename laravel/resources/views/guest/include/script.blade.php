<!-- JavaScript Libraries -->
<script src="{{ asset('assets/guest/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/guest/js/main.js') }} "></script>

<!-- Javascript FAQ -->
<script src="{{ asset('assets/guest/js/faq/jquery.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/faq/plugins.js') }}"></script>
<script src="{{ asset('assets/guest/js/faq/main.js') }}"></script>

<!-- Javascript Gallery -->
<script src="{{ asset('assets/guest/js/gallery/jquery-1.11.1.min.js') }}"></script>
<script>
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
    });
</script>

