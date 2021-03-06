
@extends('layout.master')
    @section('head')
        
    @endsection
    @section('slide')
          <section class="py-0">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
             
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/WRS-bynprm7WZpzd3xp2j/1618476771510_original.jpg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/JpCfjYDkMSFtO_0xa2cWo/1615351388732_original.jpg"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="https://www.mbageas.life/uploads/1poeaAEdU_6PFXYWapsAS/1615351283621_original.jpg"
                  alt="Third slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- end Slide -->
        </section>
    @endsection
      
    @section('content')
    <div class="py-3 container heading-block">
      <div class="sub-title">
        <div class="sub-title__line"></div>
        <h5>Sa??n ph????m</h5>
      </div>
      
      <div class="heading-row">
        <div class="heading-block heading-block__left">
          <h2>N????i b????t nh????t</h2>
        </div>
        <div class="heading-block heading-block__right">
        <a href="/product"><h4>Xem sa??n ph????m <i class="fas fa-chevron-circle-right more-infor__icon " ></i></h4></a>  
        </div>
      </div>
    </div>
    <div class="py-5 container">
      <div class="product-lists">
        @foreach ($products as $product)
        <div class="col-md-5 col-xs-5 product-item" style="background: url('{{str_replace("\\", "\/", asset($product->image))}}'); background-size:cover">
         
          <div class="product-item_content">
            <p>{{$product->category->category_name}}</p>
            <h4 class="product_name" >{{$product->name}}</h4>
          </div>
          <div class="product-item-hover">
            <a href="/product/{{$product->id}}">
              <p>{{$product->category->category_name}}</p>
              <h4 class="product_name" >{{$product->name}}</h4>
              <p class="content-product">
                {!!$product->title!!}
              </p>
            </a>
            
          </div>
        </div>
        @endforeach

      </div>
    </div>
    @endsection
      
    
    @section('service')
    <div class="py-1 container heading-block">
      <div class="sub-title">
        <div class="sub-title__line"></div>
        <h5>DI??CH VU?? KHA??CH HA??NG</h5>
      </div>
      @if ( Session::has('flash_message') )
             
              <div class="alert {{ Session::get('flash_type') }}">
                <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
                  <h3></h3>
              </div>
              @endif
      <div class="heading-row">
        <div class="heading-block heading-block__left">
          <h2>TH??NG TIN KH??CH H??NG</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row customer-block">
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/refund.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Gi???i quy???t quy???n l???i b???o hi???m</h4>
              <p class="">
                C??ch th???c nhanh ch??ng ????? y??u c???u Gi???i quy???t quy???n l???i b???o hi???m
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">T??m hi???u th??m</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/card.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Ph????ng th???c ????ng ph?? </h4>
              <p class="">
                H?????ng d???n h??nh th???c thanh to??n b???ng ti???n m???t ho???c tr???c tuy???n
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">T??m hi???u th??m</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
        <div class="col-md-4 customer-block-item">
          <a href="" class="feature-item_link">
            <div class="feature-item_icon">
              <img
                src="https://www.mbageas.life/home/images/shipping.svg"
                alt="ImageSeo"
                class="refund-icon"
                style="opacity: 1"
              />
            </div>
            <div class="refund-content">
              <h4 class="">Thay ?????i th??ng tin h???p ?????ng</h4>
              <p class="">
                C??ch th???c li??n h??? v???i ch??ng t??i ????? y??u c???u thay ?????i th??ng tin tr??n H???p ?????ng b???o hi???m
              </p>
            </div>
            <div class="icon__moreinfo">
              <span class="more-infor">T??m hi???u th??m</span>
              <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- about -->
    @endsection    <!-- {{-- products --}} -->
       
    
       
    @section('aboutcompany')
    <div class="home-about">
          <img
            src="https://www.mbageas.life/uploads/lh9r7jWfOnSe3ldIMna89/1615517617110_original.jpg"
            alt=""
            style="opacity: 1; width: 100%; z-index: 10"
          />
          <div class="home-about__content">
            <div class="container">
              <div class="row home-about__container">
                <div class="col-md-6">
                  <h6 class="about-text">V??? MB AGEAS</h6>
                  <h3 class="about-text__title">
                    ?????ng h??nh c??ng B???n d???ng x??y h???nh ph??c
                  </h3>
                </div>
                <div class="col-md-6">
                  <p class="about-text">
                    S??? h???u ti???m l???c t??i ch??nh v???ng m???nh, ngu???n l???c nh??n s??? d???i d??o
                    c??ng h??? th???ng ph??n ph???i r???ng kh???p, MB Ageas Life ??ang ti???n ?????n
                    r???t g???n t???m nh??n d??i h???n - Tr??? th??nh C??ng ty b???o hi???m nh??n th???
                    h??ng ?????u ???????c tin y??u nh???t t???i Vi???t Nam.
                  </p>
                  <a href="" class="more-infor"> Xem chi ti???t</a>
                  <i class="fas fa-chevron-circle-right more-infor__icon--about " ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endsection
        
    @section('contact')
     <!-- contact -form     -->
    <div class="py-6 home-consultant container">
      <div class="col-md-4 home-consultant__left">
        <div class="sub-title">
          <div class="sub-title__line"></div>
          <h5>Li??n h????</h5>
        </div>
        <h4>
          ????? ???????c t?? v???n b???i ?????i ng?? chuy??n gia
        </h4>
      </div>
      <div class="col-md-8 home-consultant__right"> 
      <form action="{{route('save_consultation')}}" method="post">
        @csrf
        <div class="contact-form">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Ho?? va?? t??n  <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" name="name" aria-describedby="texthelp" placeholder="Enter full name">
            </div>
            <div class="form-group">
              <label for="">Email <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
          </div>
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="">S???? ??i????n thoa??i <span class="text-required">*</span></label>
              <input type="tel" class="form-control" id="" aria-describedby="emailHelp" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
              <label for="">Ti??nh tha??nh ph???? <span class="text-required">*</span></label>
              <select class="custom-select" name="calc_shipping_provinces" required="">
                <option value="">T???nh / Th??nh ph???</option>
              </select>
              
              <input class="billing_address_1" name="" type="hidden" value="">
            </div>
            
          </div>
          
        </div>
        <div class="col-md-12"> 
          <div class="form-group">
              <input class="billing_address_1" name="" type="hidden" value="">
          </div>
          
        </div>
        <div class="col-md-12 contact-checkbox">
          <div class="col-md-12 form-check">
            <div class="custom-control custom-checkbox">  
              <input type="checkbox" class="custom-control-input" id="customCheck1">  
              <label class="custom-control-label" for="customCheck1">S??? d???ng e-mail ????? ????ng k?? nh???n th??ng tin m???i t??? MB Ageas Life</label>  
            </div>
          </div>
        </div>
      
        <div class="col-md-12 contatc-policy">
          <span>B???ng vi???c click n??t "G???i th??ng tin", b???n ???? ?????ng ?? v???i c??c</span>
          <a href="" class="policy_link_text">??i???u kho???n v?? ??i???u ki???n</a>
          <span>cu??a chu??ng t??i</span>
        </div>

          {{-- <div class="btn-submit">
            <a href="javascript:void(0)" type="submit" class="btn">G????i th??ng tin</a>
          </div> --}}
          <div>
            <button class="btn button-submit btn-submit" type="submit" > G????i th??ng tin</button>
          </div>
    
      </form>
        
       
      </div>
   
    </div>
    @endsection    
       
        
      
         
