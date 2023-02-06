<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>
<body>
  
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">48 Shop</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin_k1_web')}}">
                        <i class="fas fa-wallet"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('supplier_k1_web')}}">
                        <i class="fas fa-user-tie"></i>
                        <div class="title">Supplier</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('product_k1_web')}}">
                        <i class="fas fa-puzzle-piece"></i>
                        <div class="title">Product</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-balance-scale-right"></i>
                        <div class="title">Keuntungan</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-money-bill-alt"></i>
                        <div class="title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="title">Payments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="title">Setting</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Brand name</div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- content --->
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user" id="open-modal">
                    <img src="{{asset('css/img/user2.png')}}" alt="">
                </div>
            </div>
            @yield('dashboard')
            <div style="margin-bottom: 90px;"></div>
            @yield('table_content')
        </div>
        <!-- content --->
        <!--modal start-->
        <div class="modal_cus modal_container" style="z-index:500000" style="width:1000px;height:899px">
            <button class="modal_button" id="">
                open modal
            </button>
        </div>
        
        <div class="modal_container_open" id="modal-container-open">
            <div class="modal_content">
                <div class="modal__close" id="modal_close">
                    <i class="fas fa-window-close"></i>
                </div>
                {{-- <img src="{{asset('css/img/setting2.png')}}" class="modal__img"> --}}
                {{-- <h1 class="modal__title">Good Boy</h1> --}}
                {{-- <p class="modal__description">Click to the button for close</p> --}}
                <button class="modal_button modal__button-width">
                   Logout
                </button>
                {{-- <a href="" style="text-decoration:none;" class="modal_button modal__button-width">Logout</a> --}}
                {{-- <button class="modal__button-link">
                    Close
                </button> --}}
            </div>
        </div>
        <!--modal end-->
    </div>

   
<script src="{{ asset('css/js/modal_custom.js') }}"></script>
<script>
</script>
</body>
</html>