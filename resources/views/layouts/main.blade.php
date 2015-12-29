<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý nhân lực</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}" media='screen,print'>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/flaticon.css') !!}">

    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.chained.min.js') !!}"></script>
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
                <!-- Bootstrap toggle menu for mobile devices, only visible on small screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard">Tích hợp hệ thống</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost:8000/staff"><i class="fa fa-user"></i> Nhân lực </a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/patient"> Bệnh nhân </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown  "><a href="" class="dropdown-toggle js-activated" data-toggle="dropdown">admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/dashboard"><i class="fa fa-gear"></i> Cài đặt</a></li>
                            <li class="divider"></li>
                            <li><a href="/dashboard"><i class="fa fa-edit"></i> Đổi mật khẩu</a></li>
                            <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col-sm-3 col-md-2 sidebar-left">
            @yield('sidebar')
        </div>

        <link rel="stylesheet" href="{!! asset('css/metallic.css') !!}">
        <script type="text/javascript" src="{!! asset('js/zebra_datepicker.js') !!}"></script>

        <script type="text/javascript">
            $(function(){
                $("#date_of_birth").Zebra_DatePicker({direction:false});
                $("#department option").hide().attr('disabled',true);
                $("#hospital").on('change',function(){
                    var hospital_id=$(this).val();
                    $("#department option").hide().attr('disabled',true);
                    $("#department option[class="+hospital_id+"]").show().attr('disabled',false);
                });
                $("#department").on('change',function(){
                    var department_id=$(this).val();
                    $("#unit option,#area option").hide();
                    $("#unit option[class="+department_id+"],#area option[class="+department_id+"]").show();
                });
            });
        </script>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>