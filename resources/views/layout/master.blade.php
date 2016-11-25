<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Bhutan Insurance Limited</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
{!! Html::style('public/global/plugins/font-awesome/css/font-awesome.min.css') !!}
{!! Html::style('public/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
{!! Html::style('public/global/plugins/bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('public/global/plugins/uniform/css/uniform.default.css') !!}
{!! Html::style('public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
{!! Html::style('public/global/css/components.css') !!}
{!! Html::style('public/global/css/plugins.css') !!}
{!! Html::style('public/admin/layout/css/layout.css') !!}
{!! Html::style('public/admin/layout/css/themes/darkblue.css') !!}
{!! Html::style('public/admin/layout/css/custom.css') !!}
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
@include('common.header')
<!-- END HEADER -->

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include ('common.sidemenu')
    <!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	@yield('content')
<!-- BEGIN FOOTER -->
@include ('common.footer')
<!-- END FOOTER -->
{!! Html::script('public/global/plugins/jquery.min.js') !!}
{!! Html::script('public/global/plugins/jquery-migrate.min.js') !!}
{!! Html::script('public/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('public/global/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') !!}
{!! Html::script('public/global/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('public/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
{!! Html::script('public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
{!! Html::script('public/global/plugins/jquery.blockui.min.js') !!}
{!! Html::script('public/global/plugins/jquery.cokie.min.js') !!}
{!! Html::script('public/global/plugins/uniform/jquery.uniform.min.js') !!}
{!! Html::script('public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
{!! Html::script('public/global/scripts/metronic.js') !!}
{!! Html::script('public/admin/layout/scripts/layout.js') !!}
{!! Html::script('public/admin/layout/scripts/quick-sidebar.js') !!}
{!! Html::script('public/admin/layout/scripts/demo.js') !!}
{!! Html::script('public/admin/layout/scripts/portlet-draggable.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
// initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   PortletDraggable.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>