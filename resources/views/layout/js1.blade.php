@yield('js1')
<a id="scrollup"></a>
  {{-- <script src="{{ asset('js/jQuery_v3.1.1.min.js')}}"></script> --}}
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
  <script src="{{ asset('js/custom.js')}}"></script>
  <script src="{{ asset('js/jquery-ui.js')}}"></script>
  <script src="{{ asset('js/jquery.firstVisitPopup.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/table.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 500,
      values: [75, 300],
      slide: function(event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));
  });
  </script>
