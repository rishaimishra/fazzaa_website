<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/saas/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 17:52:16 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Fazaa Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!--custom -->
    	@if(Cookie::get('user') == null)	
        <link href="/assets/css/vendor.css?v={{time()}}" rel="stylesheet" id="bootstrap-css">
		@endif
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
 
        <!-- Summernote css -->
        <link href="/assets/css/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />
        <!-- SimpleMDE css -->
        <link href="/assets/css/css/vendor/simplemde.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/assets/css/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="/assets/css/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    </head>

    <body  class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
      
           
    
               
				@if(Cookie::get('user') != null)	
					@include('admin.sidebar')
				@endif
				 <div class="content-page">
			 		@if(Cookie::get('user') != null)
						@include('admin.topbar')
				 	@endif
					@yield('content')
            	</div>

           
        <!-- END wrapper -->


        

        <!-- bundle -->
        <script src="/assets/js/js/vendor.min.js"></script>
        <script src="/assets/js/js/app.min.js"></script>

        <!-- Summernote js -->
        <script src="/assets/js/js/vendor/summernote-bs4.min.js"></script>
        <!-- SimpleMDE js -->
        <script src="/assets/js/js/vendor/simplemde.min.js"></script>

        <!-- Summernote demo -->
        <script src="/assets/js/js/pages/demo.summernote.js"></script>

        <!-- SimpleMDE demo -->
        <script src="/assets/js/js/pages/demo.simplemde.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 17:52:16 GMT -->
</html>
