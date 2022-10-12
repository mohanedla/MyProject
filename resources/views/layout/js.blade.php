@yield('js')
<a id="scrollup"></a>
  <script src="{{ asset('js/jQuery_v3.1.1.min.js')}}"></script>
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
<script>
    const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
// Get the selected file
const [file] = e.target.files;
// Get the file name and size
const { name: fileName, size } = file;
// Convert size in bytes to kilo bytes
const fileSize = (size / 1000).toFixed(2);
// Set the text content
const fileNameAndSize = `${fileName} - ${fileSize}KB`;
document.querySelector('.file-name').textContent = fileNameAndSize;
});
</script>
