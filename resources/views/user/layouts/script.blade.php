<!-- JQUERY JS -->
<script src="{{asset('/')}}user/assets/plugins/jquery/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}user/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}user/assets/js/bootstrap.bundle.min.js"></script>

<!-- Summernote js -->
<script src="{{asset('/')}}user/assets/summernote/summernote-bs4.min.js"></script>
<!-- init js -->
<script src="{{asset('/')}}user/assets/js/form-editor.init.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('/')}}user/assets/plugins/sidemenu/sidemenu.js"></script>
<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}user/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}user/assets/plugins/p-scroll/pscroll.js"></script>
<!-- STICKY JS -->
<script src="{{asset('/')}}user/assets/js/sticky.js"></script>

<!-- Bootstrap-Date Range Picker js-->
<script src="{{asset('/')}}user/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- jQuery UI Date Picker js -->
<script src="{{asset('/')}}user/assets/plugins/date-picker/jquery-ui.js"></script>

<!-- bootstrap-datepicker js (Date picker Style-01) -->
<script src="{{asset('/')}}user/assets/plugins/bootstrap-datepicker/js/datepicker.js"></script>

<!-- Amaze UI Date Picker js-->
<script src="{{asset('/')}}user/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

<!-- Simple Date Time Picker js-->
<script src="{{asset('/')}}user/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>

<!-- APEXCHART JS -->
<script src="{{asset('/')}}user/assets/js/apexcharts.js"></script>
<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('/')}}user/assets/plugins/select2/select2.full.min.js"></script>
<!-- CHART-CIRCLE JS-->
<script src="{{asset('/')}}user/assets/plugins/circle-progress/circle-progress.min.js"></script>


<!-- INDEX JS -->
<script src="{{asset('/')}}user/assets/js/index1.js"></script>
<script src="{{asset('/')}}user/assets/js/index.js"></script>
<!-- Reply JS-->
<script src="{{asset('/')}}user/assets/js/reply.js"></script>
<!-- COLOR THEME JS -->
<script src="{{asset('/')}}user/assets/js/themeColors.js"></script>
<!-- CUSTOM JS -->
<script src="{{asset('/')}}user/assets/js/custom.js"></script>
<!-- SWITCHER JS -->
<script src="{{asset('/')}}user/assets/switcher/js/switcher.js"></script>


{{--image show in input field--}}
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#inputImage').attr('src', e.target.result);
                $('#inputImage').attr('height', 150);
                $('#inputImage').attr('width', 200);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
<script src="https://kit.fontawesome.com/3ad9a7a10b.js" crossorigin="anonymous"></script>

<!--Internal Fileuploads js-->
<script src="{{asset('/')}}user/assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="{{asset('/')}}user/assets/plugins/fileuploads/js/file-upload.js"></script>

<!--Internal Fancy uploader js-->
<script src="{{asset('/')}}user/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
<script src="{{asset('/')}}user/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
<script src="{{asset('/')}}user/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
<script src="{{asset('/')}}user/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="{{asset('/')}}user/assets/plugins/fancyuploder/fancy-uploader.js"></script>

<!-- FORM ELEMENTS JS -->
<script src="{{asset('/')}}user/assets/js/formelementadvnced.js"></script>
<!-- INTERNAL DATA-TABLES JS-->
<script src="{{asset('/')}}user/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- DATA TABLE JS-->
<script src="{{asset('/')}}user/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}user/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{asset('/')}}user/assets/js/table-data.js"></script>
