@extends('layout.master')

@section('content')
<div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
  <form action="{{route('home.contract.find')}}" >
   
    <div class="inner-form">
      <div class="input-field first-wrap">
        <input
          id="search"
          type="text"
          name="keyword"
          placeholder="Tra cứu thông tin hợp đồng"
        />
      </div>
      
      <div class="input-field third-wrap">
        <button class="btn-search" type="submit">Search</button>
      </div>
    </div>
  </form>
</div>
<div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
     <table class="table table-borderless table-hover">
        <thead class="thead-light">
          <tr>
           <th>Mã số hợp đồng</th>
           <th>Tên khách hàng</th>
           <th>Ngày đăng ký</th>
           <th>Tư vấn viên</th>
           <th></th>
          </tr>
            
        </thead>
        <tbody>
         @if (empty($contracts))
         <tr>
           KHÔNG CÓ HỢP ĐỒNG BẠN TÌM KIẾM
         </tr>   
          
         @else
            @foreach ($contracts as $contract)
                <tr>
                    <td>{{$contract->id}}</td>
                    <td>{{$contract->full_name}}</td>
                    <td>{{$contract->created_at}}</td>
                    <td>{{$contract->user->name}}</td>
                    
                </tr>
            @endforeach
        </tbody>
        
    </table>
 @endif

</div>
@endsection
{{-- @section('contact')
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
      <form action="{{route('save_consultation')}}" method="post">
        @csrf
        <div class="contact-form">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Họ và tên  <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" name="name" aria-describedby="texthelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="">Email <span class="text-required">*</span></label>
              <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            
          </div>
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Số điện thoại <span class="text-required">*</span></label>
              <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="phone" placeholder="Enter phone">
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

          {{-- <div class="btn-submit">
            <a href="javascript:void(0)" type="submit" class="btn">Gởi thông tin</a>
          </div> --}}
          {{-- <div>
            <button class="btn button-submit btn-submit" type="submit" > Gởi thông tin</button>
          </div>
    
      </form>
        
       
      </div>
   
    </div>
    @endsection  --}}

