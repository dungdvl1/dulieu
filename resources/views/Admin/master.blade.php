<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Quản trị Website đặt vẽ xem phim</title>
    <link href="source/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/admin/css/datepicker3.css" rel="stylesheet">
    <link href="source/admin/css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="source/admin/js/lumino.glyphs.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg>
                            {{Auth::user()->email}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active"><a href="http://localhost/doan/public/Admin/"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Trang chủ</a></li>
            <li><a href="http://localhost/doan/public/Admin/phim"><svg class="glyph stroked film">
                        <use xlink:href="#stroked-film"></use>
                    </svg>Phim</a></li>
            <li><a href="#"><svg class="glyph stroked clipboard with paper">
                        <use xlink:href="#stroked-clipboard-with-paper"></use>
                    </svg>Đánh giá</a></li>
            <li><a href="#"><svg class="glyph stroked clock">
                        <use xlink:href="#stroked-clock"></use>
                    </svg>Giờ chiếu</a></li>
            <li><a href="#"><svg class="glyph stroked app window with content">
                        <use xlink:href="#stroked-app-window-with-content"></use>
                    </svg>Suất chiếu</a></li>
            <li><a href="#"><svg class="glyph stroked blank document">
                        <use xlink:href="#stroked-blank-document"></use>
                    </svg>Slide</a></li>
            <li><a href="#"><svg class="glyph stroked star">
                        <use xlink:href="#stroked-star"></use>
                    </svg>Vé</a></li>
            <li role="presentation" class="divider"></li>
        </ul>

    </div>
    <!--/.sidebar-->

    @yield('main')

    <script src="source/admin/js/jquery-1.11.1.min.js"></script>
    <script src="source/admin/js/bootstrap.min.js"></script>
    <script src="source/admin/js/chart.min.js"></script>
    <script src="source/admin/js/chart-data.js"></script>
    <script src="source/admin/js/easypiechart.js"></script>
    <script src="source/admin/js/easypiechart-data.js"></script>
    <script src="source/admin/js/bootstrap-datepicker.js"></script>
    <script>
    $('#calendar').datepicker({});

    ! function($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function() {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function() {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
    </script>
</body>

</html>