<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <base href="{{asset('')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" href="source/checkout.css">

</head>

<body>

    <!-- start header -->

    <header>
        <nav class="navbar navbar-expand-sm navbar-light">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <span class="stt">01</span>
                        <span>Chọn loại vé</span>
                    </li>
                    <li class="nav-item">
                        <span class="stt">02 </span>
                        <span>chọn ghế & thanh toán</span>

                    </li>
                    <li class="nav-item">
                        <span class="stt">03</span>
                        <span>kết quả đặt vé</span>
                    </li>
                </ul>
                <!-- end menu left -->
                <div class="right navbar-nav ml-auto mt-2 mt-lg-0">
                    <div class="user">
                        <div class="image">
                            <img src="source/images/user/11.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>Dũng Lương</span>
                        </div>
                    </div>

                    <div class="dangxuat text-center">Đăng xuất</div>
                </div>
                <!-- end menu right -->
            </div>
        </nav>
    </header>

    <!-- end header -->

    <main>
        <div class="main-left">
            <div class="image">
                <img src="source/images/checkout/joker-c18.jpg" alt="">
            </div>
        </div>

        <!-- start main-right -->
        <div class="main-right">
            <!-- start top content -->

            <div class="top-content">
                <div class="logo">
                    <img src="source/images/logo/list-logo-cinema/bhd.png" alt="">
                </div>
                <!-- end logo -->
                <div class="content-cinema">
                    <p class="address">
                        <span class="pcinema">BHD star</span>
                        <span class="cinema-name"> - &lrm; Phạm Hùng</span>
                    </p>
                    <p class="hour">
                        Hôm nay - 20:35
                        <span class="room-name"> - Rạp 4</span>
                    </p>
                </div>
                <!-- end content cinema -->
            </div>


            <!-- start ticket -->
            <div class="tickettype">
                <div class="wapper-ticket-type">
                    <div class="ticket row">
                        <div class="type-ticket col-sm-4">
                            Vé VIP 2D
                        </div>
                        <div class="price-ticket col-sm-4 text-center">
                            70000 đ
                        </div>
                        <div class="opnum col-sm-4 text-right">
                            <button class="minus">-</button>
                            <input type="hidden" id="vevip" name="ticket" value="0">
                            <span class="number">0</span>
                            <button class=" add">+</button>
                        </div>
                    </div>
                </div>
                <!-- end 1 ticket type -->
                <div class="wapper-ticket-type">
                    <div class="ticket row">
                        <div class="type-ticket col-sm-4">
                            Vé Thường 2D
                        </div>
                        <div class="price-ticket col-sm-4 text-center">
                            50000 đ
                        </div>
                        <div class="opnum col-sm-4 text-right">
                            <button class="minus">-</button>
                            <input type="hidden" id="vethuong" name="ticket" value="0">
                            <span class="number">0</span>
                            <button class=" add">+</button>
                        </div>
                    </div>
                </div>
                <!-- end 1 ticket type -->
                <div class="wapper-ticket-type">
                    <div class="ticket row">
                        <div class="type-ticket col-sm-4">
                            Ghế Đôi 2D
                        </div>
                        <div class="price-ticket col-sm-4 text-center">
                            100000 đ
                        </div>
                        <div class="opnum col-sm-4 text-right">
                            <button class="minus">-</button>
                            <input type="hidden" id="veghedoi" name="ticket" value="0">
                            <span class="number">0</span>
                            <button class=" add">+</button>
                        </div>
                    </div>
                </div>
                <!-- end 1 ticket type -->
            </div>
            <!-- end ticket  -->


            <div class="chose-ticket row">
                <div class="chose-content">
                    <div class="totalcostfull">
                        <div class="title">Tổng Tiền</div>
                        <div class="chosepriceticket">0 đ</div>
                    </div>
                </div>
                <div class="chose-button">
                    <a href="{{route('chon-ghe')}}"><span>Chọn Ghế</span></a>
                </div>
            </div>


        </div>
        <!-- end main right -->
    </main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="source/js/main.js"></script>
</body>

</html>