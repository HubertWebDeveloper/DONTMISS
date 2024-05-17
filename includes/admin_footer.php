      </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        $(document).ready(function () {
          $('#mydata').DataTable();
        });

        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        });

        $(document).ready(function(){
          $("#name").on('change', function(){
              $(".data").hide();
              $("#" + $(this).val()).fadeIn(700);
          }).change();
        });
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
      </script>
</body>

</html>