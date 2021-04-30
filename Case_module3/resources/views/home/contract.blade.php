
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" />
     <link
       href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,700;1,600&display=swap"
       rel="stylesheet"
     />
     {{-- fontawsome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link href="{{asset('css/search.css')}}" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('css/client.css')}}" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm py-3 shadow-sm">
      <button
        type="button"
        data-toggle="collapse"
        data-target="#navbarContent"
        aria-controls="navbars"
        aria-expanded="false"
        aria-label="Toggle navigation"
        class="navbar-toggler"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav nav-brand">
          <a href="{{route('index')}}"><img
            src="https://www.mbageas.life/uploads/X-ak5M5lFNEvGXGUzSMkZ/1598613473300_original.png"
            alt=""
          /></a>
          
        </ul>
        <ul class="navbar-nav mx-auto">
          <!-- Megamenu-->
          <li class="nav-item dropdown megamenu">
            <a
              id="megamneu"
              href=""
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              class="nav-link dropdown-toggle font-weight-bold text-uppercase"
              >Sản phẩm</a
            >
            <div
              aria-labelledby="megamneu"
              class="dropdown-menu border-0 p-0 m-0"
            >
              <div class="container">
                <div class="row bg-white rounded-0 m-0 shadow-sm">
                  <div class="col-lg-12 col-md-12">
                    <div class="p-4">
                      <div class="row">
                        <div class="col-md-6 sub-nav">
                          <h6 class="font-weight-bold text-uppercase">
                            Nhu cầu của bạn
                          </h6>
                          <ul class="list-unstyled">
                            <li class="nav-item">
                              <a href="" class="nav-link text-small pb-0">
                                <img
                                  src="https://www.mbageas.life/uploads/iyXWHnJRauXgZ4mfZwaNC/1598930878743_original.png"
                                  alt=""
                                  class="icon-menu"
                                />
                                <span> Bảo vệ toàn vẹn </span>
                              </a>
                            </li>

                            <li class="nav-item">
                              <a href="" class="nav-link text-small pb-0">
                                <img
                                  src="https://www.mbageas.life/uploads/Cx6PryQ43ECGNPgQiVH3H/1598930878651_original.png"
                                  alt=""
                                  class="icon-menu"
                                />
                                <span> Sống khỏe vẹn tròn </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link text-small pb-0">
                                <img
                                  src="https://www.mbageas.life/images/menu-money1.svg"
                                  alt=""
                                  class="icon-menu"
                                />
                                <span> Hưu trí an toàn </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link text-small pb-0">
                                <img
                                  src="https://www.mbageas.life/uploads/on33W8YcaPC2Af-h1sSET/1598930878504_original.png"
                                  alt=""
                                  class="icon-menu"
                                />
                                <span> Tích lũy tương lai </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="" class="nav-link text-small pb-0">
                                <img
                                  src="https://www.mbageas.life/uploads/TwPyplk4T5CIIGtiaJVun/1598930878636_original.png"
                                  alt=""
                                  class="icon-menu"
                                />
                                <span> Đầu tư thông thái </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                          <h6 class="font-weight-bold text-uppercase">
                            Sản phẩm của chúng tôi
                          </h6>
                          <a href="/product/category/1" class="nav-link sub-menu--item btn">
                            <img
                              src=" https://www.mbageas.life/uploads/mvQLNHZoFzeMVW9J9NoBs/1598930878724_original.png "
                              alt=" "
                              class="menu-item-img"
                            />
                            <span class="sub-menu--name text-small"
                              >Sản phẩm chính</span
                            >
                          </a>
                          <a href="/product/category/2" class="nav-link sub-menu--item btn">
                            <img
                              src="https://www.mbageas.life/uploads/YNZlFDNu66-l89LGhLElT/1598930878633_original.png "
                              alt=" "
                              class="menu-item-img"
                            />
                            <span class="nav-link--name text-small">Sản phẩm bổ trợ</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link font-weight-bold text-uppercase"
              >About</a
            >
          </li>
          <li class="nav-item">
            <a href="{{route('home.contract')}}" class="nav-link font-weight-bold text-uppercase"
              >Tra cứu thông tin hợp đồng</a
            >
          </li>
          <li class="nav-item">
            <a href="" class="nav-link font-weight-bold text-uppercase"
              >Liên hệ</a
            >
          </li>
        </ul>
        <ul class="navbar-nav mx-2">
   
         
          @if (isset($user))
          <li class="nav-item">Hi {{$user->name}}</li>
          <li class="nav-item">
            <a href="{{route('user.login')}}" class="nav-link font-weight-bold text-uppercase"
            >Đăng xuất</a
          >
             </li>
          @else 
          <li class="nav-item">
            <a href="{{route('userlogin')}}" class="nav-link font-weight-bold text-uppercase"
              >Đăng nhập
            </a>
          </li>
          
          
        
          @endif
         
        </ul>
      </div>
    </nav>
    <div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
      <form>
        <fieldset>
          <legend>Tra cứu thông tin hợp đồng</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input
              id="search"
              type="text"
              placeholder="Tra cứu thông tin hợp đồng"
            />
          </div>
          
          <div class="input-field third-wrap">
            <button class="btn-search" type="button">Search</button>
          </div>
        </div>
      </form>
    </div>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



