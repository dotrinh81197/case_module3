@extends('layout.master')
@section('slide')
<div class="product-detail-header row" style="background: url('{{str_replace("\\", "\/", asset($product->banner))}}')">
    <div>

        <div class="col-md-6 product-detail_info">
            <h3 style="text-align:center">{{$product->name}}</h3>
            <p>{!!$product->title!!}</p>
        </div>
    </div>
   
    <div class="col-md-6 product-detail_image">
      

    </div>
</div>

@endsection
@section('content')
<div class="container py-5">
    {{-- @foreach ($products as $product)
    <div class="product_row--item row mt-5" style="background-color: rgb(255, 233, 239);">
        <div class="col-md-8 " >
            <div class="col-md-12 ">
                <h4 class="py-5">{{$product->name}}</h4>
                <p>{!!$product->title!!}</p>
                <div class="icon__moreinfo ">
                    <span class="more-infor">Tìm hiểu thêm</span>
                    <i class="fas fa-chevron-circle-right more-infor__icon " ></i>
                </div>    
            </div>
        </div>
        <div class="col-md-4 product_image ">
            <img src="{{$product->image}}" alt="ảnh" width="100%" height="300px">
        </div>
    </div> --}}
    
    {{-- @endforeach --}}

</div>
@endsection


