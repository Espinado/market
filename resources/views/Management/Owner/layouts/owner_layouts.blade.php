 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Ecommerce Site Admin Panel </title>

    <!-- vendor css -->
    <link href="{{ asset('../backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('../backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('../backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('../backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet" media="screen" />

 <!-- Tags Input CDN CSS -->
<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" media="screen" />

 <!-- chart -->
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" media="screen" />

<!-- Datatable css -->
    <link href="{{ asset('../backend/lib/highlightjs/github.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('../backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet media="screen" />
    <link href="{{ asset('../backend/lib/select2/css/select2.min.css') }}" rel="stylesheet" media="screen" />

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('../backend/css/starlight.css') }}" media="screen" />
   <link href="{{ asset('backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet" media="screen" />

<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('/yourimagefolder/loading.gif') 50% 50% no-repeat rgb(249,249,249);
    }
    </style>

  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
        $('.sl-menu-link').click(function (e) {

         $(".sl-menu-link >a").removeClass("active");
        //  $(this).addClass("active");
          });
      });
  </script>

  <body>
    {{--  <div class="loader">Test</div>  --}}


     @guest


     @else
    {{-- <!-- ########## START: LEFT PANEL ########## -->
    @include('admin.includes.leftpanel')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
   @include('admin.includes.headpanel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.includes.rightpanel')
    <!-- ########## END: RIGHT PANEL ########## ---> --}}

     @endguest

     @yield('admin_content')

  </body>
  <script src="{{ asset('backend/lib/jquery/jquery.js') }}" /></script>
  <script src="{{ asset('backend/lib/popper.js/popper.js') }}" /></script>
  <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}" /></script>
  <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}" /></script>
  <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}" /></script>


  <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}" /></script>
  <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}" /></script>
  <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}" /></script>
  <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}" /></script>

<script>
    $(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      $('#datatable2').DataTable({
        bLengthChange: false,
        searching: false,
        responsive: true
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>



  <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
  <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
  <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
  <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>


   <script src="{{ asset('backend/lib/medium-editor/medium-editor.js') }}"></script>
   <script src="{{ asset('backend/lib/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(window).load(function () {
      $(".loader").fadeOut("slow");
  });
  </script>


  <script>
    $(function(){
      'use strict';

      // Inline editor
      var editor = new MediumEditor('.editable');

      // Summernote editor
      $('.summernote').summernote({
        height: 150,
        tooltip: false
      })
    });
  </script>

   <script>
    $(function(){
      'use strict';

      // Inline editor
      var editor = new MediumEditor('.editable');

      // Summernote editor
      $('#summernote1').summernote({
        height: 150,
        tooltip: false
      })
    });
  </script>


  <script src="{{ asset('backend/js/starlight.js') }}"></script>
  <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
  <script src="{{ asset('backend/js/dashboard.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

</script>

<script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
   </script>

   <script>
       $(document).on("click", "#delete", function(e){
           e.preventDefault();
           var link = $(this).attr("href");
              swal({
                title: "Are you Want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                     window.location.href = link;
                } else {
                  swal("Safe Data!");
                }
              });
          });
  </script>
  <script>
{{-- Sending category id to modal --}}
      $(".passingID").click(function () {
         var category_id = $(this).attr('data-id');
         $("#parent_id").val( category_id );

      });





</script>
</html>
