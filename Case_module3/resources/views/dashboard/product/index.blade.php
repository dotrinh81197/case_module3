@extends('layout.admin')

@section('content_dashboard')


         <div class="container-fluid content_dashboard">
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
                                 
                                <tr id="{{$product->id}}">
                                   
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><a href="" class="btn btn-primary" id="btn_benefit"  onclick="showBenefit({{$product->id}})">Quyền lợi</a></td>
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
         </div>
     
{{-- show benefit modal       --}}
         <div class="modal" id="benefit_modal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">QUYỀN LỢI SẢN PHẨM</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <input type="hidden" id="id" name="id" >
                <div id="benefit_content">

                </div>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
        
          <!-- The Modal -->
          
          
        </div>






<script type="text/javascript">


   


</script>


@endsection


