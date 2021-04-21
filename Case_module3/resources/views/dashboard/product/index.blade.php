@extends('layout.admin')

@section('content_dashboard')


    <div class="content"> 
        <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="card strpied-tabled-with-hover">
                         <div class="card-header ">
                             <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                             <p class="card-product"></p>
                         </div>
                         <div class="card-body table-full-width table-responsive">
                             <table class="table table-hover table-striped" id="productTable">
                               
                                    <thead>
                                        <tr>
                                            <td>Tên sản phẩm</td>
                                            <td>Thể loại</td>   
                                            <td>Quyền lợi</td>
                                            <td>Ví dụ minh họa</td>
                                        </tr>
                                       
                                    </thead>
                                    
                              
                                 <tbody>
                              
                                @if ($products)
                                @foreach ($products as $product)
                                 
                                <tr>
                                   
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><a href="" class="btn btn-primary">Quyền lợi</a></td>
                                    <td><a href="" class="btn btn-primary">Ví dụ minh họa</a></td>
                                    <td>
                                       <a class="btn btn-warning" href="{{ route('product.edit', $product->id) }}">sửa</a></td> 
                                     <td>
                                     <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger" type="submit" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" > Xóa
                                     </td>
                                   
                                    
                                </tr>
                            
                                @endforeach
                                @endif 
                                 </tbody>
                                 <tfoot>
                                     <td>
                                         <a href="{{route('product.create')}}" class="btn btn-primary" >Thêm sản phẩm</a>
                                     </td>
                                 </tfoot>
                             </table>
                         </div>
                     </div>
                 </div>
     </div>



{{-- <div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="productsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productsModalLabel">Thêm sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="productFrom" >
            @csrf
          <div class="form-group">
            <label for="product_name" class="col-form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product_name">
          </div>
          <div class="form-group">
            <select class="custom-select custom-select-lg mb-3" id="category_id" >
                <option selected>Chọn thể loại sản phẩm</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
          </div>
         
    
        <button type="submit" class="btn btn-primary" id="btn-submit" > Thêm </button>

        </form>
      </div>
      
    </div>
  </div>
</div>

<script>

 $("#btn-submit").click(function(e){
        e.preventDefault();
        let name = $("#name").val();
        let category_id = $("#category_id").val();
        let benefit = $("#benefit").val();
        let illustration = $("#illustration").val();
        let _token = $("input[name=_token]").val();
  
        $.ajax({
            url:"{{route('product.store')}}",
            type: "POST",
            data:{
                product_name : product_name,

                _token : _token
            },
            
            success:function(response){
                
                
             
            }

        });
    });
</script> --}}


@endsection


