<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tích hợp hệ thống - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/health4all/assets/css/bootstrap.css" media='screen,print'>
    <link rel="stylesheet" type="text/css" href="http://localhost/health4all/assets/css/font-awesome.min.css" >
    <link rel="stylesheet" type="text/css" href="http://localhost/health4all/assets/css/flaticon.css" >

    <script type="text/javascript" src="http://localhost/health4all/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/health4all/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/health4all/assets/js/jquery.chained.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover({trigger:'hover',html:true});
            $("#unit").chained("#department");
            $("#area").chained("#department");
            $("body").css('padding-top',$(".container").height());
            $("body").css('padding-bottom',$("#footer").height());
        });
    </script>
</head>

<body style="padding-top: 50px; padding-bottom: 25px;">
<div id="wrap">
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Tích hợp hệ thống</a>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</div>

</body>
</html>
