@extends('layout.master')

@section('content')

<div class="s01 search_contract" style="background: url('https://www.mbageas.life/uploads/JEmpVqK2Nzv4jDXM7DCjB/1608283094585_original.jpg')">
  <form action="{{route('home.contract.find')}}" >
    <fieldset>
      <legend>Tra cứu thông tin hợp đồng</legend>
    </fieldset>
    <div class="inner-form">
      <div class="input-field first-wrap">
        <input
          id="search"
          type="text"
          name="keyword"
          placeholder="Tra cứu thông tin hợp đồng"
        />
      </div>
    </div>
  </form>  
      <table class="table table-borderless table-hover">
        <thead class="thead-light">
          <tr>
          
           <th></th>
            <th>Tên sản phẩm</th>
           <th>Tên khách hàng</th>
           <th>Ngày đăng ký</th>
       
           <th>Kỳ hạn</th>
           <th>Định kỳ nộp phí</th>
           <th>Phí định kì</th>
          <th>Thời gian tham gia</th> 
          </tr>
          
            
        </thead>
        <tbody>

                  @foreach ($contract_products as $contract_product)
                 
                
                  <tr>
                    <td>
                    
                    @if ($contract_product->product_id == 1 || $contract_product->product_id == 2)
                    Sản phẩm chính
                    @else
                    Sản phẩm phụ
                    @endif
                    </td>
                    <td rowspan="1">{{$contract_product->product->name}}</td>
                    <td rowspan="1">{{$contract_product->contract->full_name}}</td>
                    <td rowspan="1">{{$contract_product->contract->created_at}}</td>
                    {{-- <td rowspan="1">{{$contract_product->contract->}}</td> --}}
                   
                    
                   
                    {{-- @if (Auth::user()->contract_id == $contract->id)
                    <td>
                      <a href="{{route('home.contract.detail', $contract->id)}}" class="btn btn-primary" onclick="">Chi tiết</a>
                    </td> 
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteContract({{$contract->id}})">Hủy Hợp Đồng</a>

                    </td>
                    @endif --}}
                   
                </tr>
            @endforeach
            
        </tbody>
        
    </table>
</div>
@endsection

   


    