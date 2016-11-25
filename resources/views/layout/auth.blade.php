<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Login | Bhutan Insurance Limited</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="Bhutan Insurance Limited"/>
        <meta content="" name="BIL"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        {!! Html::style('public/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! Html::style('public/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! Html::style('public/global/plugins/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
        {!! Html::style('public/global/css/components.css') !!}
        {!! Html::style('public/admin/layout/css/layout.css') !!}
        {!! Html::style('public/admin/layout/css/themes/darkblue.css') !!}
        {!! Html::style('public/admin/layout/css/custom.css') !!}
        {!! Html::style('public/admin/login.css') !!}
        {!! Html::style('public/global/plugins/bootstrapValidation/css/formValidation.min.css') !!}

        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body class="login">
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
        @yield('content')
        <!-- BEGIN FOOTER -->
        <!-- END FOOTER -->
        {!! Html::script('public/global/plugins/jquery-3.1.1.min.js') !!}
        {!! Html::script('public/global/plugins/jquery-migrate.min.js') !!}
        {!! Html::script('public/global/plugins/jquery-ui/jquery-ui.min.js') !!}
        {!! Html::script('public/global/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') !!}
        {!! Html::script('public/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('public/global/plugins/jquery.blockui.min.js') !!}

        {!! Html::script('public/global/plugins/bootstrapValidation/js/formValidation.js') !!}
        {!! Html::script('public/global/plugins/bootstrapValidation/js/framework/bootstrap.js') !!}

        {!! Html::script('public/global/scripts/metronic.js') !!}
        {!! Html::script('public/admin/layout/scripts/layout.js') !!}
        {!! Html::script('public/admin/layout/scripts/demo.js') !!}

        {!! Html::script('public/js/insurance.js') !!}
        <!-- END JAVASCRIPTS -->
            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
        </div>
    </body>
    <!-- END BODY -->
</html>