@extends('layout.master')
@section('slide')
<div class="product-detail-header row" style=" background: url('{{str_replace("\\", "\/", asset($product->banner))}}');     background-size: cover;">
    

        <div class="col-md-6 product-detail_info mt-50">
            <div class="content_info mt-5">
                <h3 style="text-align:center">{{$product->name}}</h3>
                <p class="title_product">{!!$product->title!!}</p>
            </div>
           
        </div>
        
</div>


@endsection
@section('content')
<div class="container py-5">
    <div class="info">
        {!!$product->info!!}
    
    </div>
 
 </div>
<div class="container py-5">
   <div class="image_illustration">
       <h3 style="text-align:center">Ví dụ minh họa</h3>
    <img src="{{asset($product->illustration)}}" alt="">
   </div>

</div>
@endsection
@section('contact')
     <!-- contact -form     -->
    <div class="py-6 home-consultant container">
      <div class="col-md-4 home-consultant__left">
        <div class="sub-title">
          <div class="sub-title__line"></div>
          <h5>Liên hệ</h5>
        </div>
        <h4>
          Để được tư vấn bởi đội ngũ chuyên gia
        </h4>
      </div>
      <div class="col-md-8 home-consultant__right"> 
      
        <div class="contact-form">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Họ và tên  <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" name="fullname" aria-describedby="texthelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="">Email <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
          </div>
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Số điện thoại <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="">Tỉnh thành phố <span class="text-required">*</span></label>
              <select class="custom-select" name="calc_shipping_provinces" required="">
                <option value="">Tỉnh / Thành phố</option>
              </select>
              
              <input class="billing_address_1" name="" type="hidden" value="">
            </div>
            
          </div>
          
        </div>
        <div class="col-md-12"> 
          <div class="form-group">
            <label for="">Chủ đề quan tâm</label>
            
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Chọn chủ đề muốn quan tâm</option>
              <option value="">Thông tin sản phẩm/ Chương trình khuyến mãi</option>
              <option value=""> Truy vấn thông tin hợp đông </option>
              <option value="">Khác</option>
            </select>
              
              <input class="billing_address_1" name="" type="hidden" value="">
          </div>
          
        </div>
        <div class="col-md-12 contact-checkbox">
          <div class="col-md-12 form-check">
            <div class="custom-control custom-checkbox">  
              <input type="checkbox" class="custom-control-input" id="customCheck1">  
              <label class="custom-control-label" for="customCheck1">Sử dụng e-mail để đăng ký nhận thông tin mới từ MB Ageas Life</label>  
            </div>
          </div>
        </div>
      
        <div class="col-md-12 contatc-policy">
          <span>Bằng việc click nút "Gửi thông tin", bạn đã đồng ý với các</span>
          <a href="" class="policy_link_text">điều khoản và điều kiện</a>
          <span>của chúng tôi</span>
        </div>

          <div class="btn-submit">
            <a>Gởi thông tin</a>
          </div>
    
       
      </div>
   
    </div>
    @endsection 

