@extends('Admin.master')
@Section('title','Trang chủ')
@Section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Trang chủ</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{{count($phim)}}</div>
                        <div class="text-muted">Phim</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked empty-message">
                            <use xlink:href="#stroked-empty-message"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">52</div>
                        <div class="text-muted">Đánh giá</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked clock">
                            <use xlink:href="#stroked-clock"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{{count($giochieu)}}</div>
                        <div class="text-muted">Giờ chiếu</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{{count($suatchieu)}}</div>
                        <div class="text-muted">Suất chiếu</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked blank document">
                            <use xlink:href="#stroked-blank-document"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{{count($slide)}}</div>
                        <div class="text-muted">Slide</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked star">
                            <use xlink:href="#stroked-star"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">{{count($ve)}}</div>
                        <div class="text-muted">Vé</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-red">
                <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar"></use>
                    </svg>Lịch</div>
                <div class="panel-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endSection