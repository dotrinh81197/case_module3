@extends('layout.admin')

@section('content_dashboard')


    <div class="content"> 
        <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="card strpied-tabled-with-hover">
                         <div class="card-header ">
                             <h4 class="card-title">THỂ LOẠI SẢN PHẨM</h4>
                             <p class="card-category"></p>
                         </div>
                         <div class="card-body table-full-width table-responsive">
                             <table class="table table-hover table-striped" id="categoryTable">
                               
                                    <thead>
                                       <td>Name</td>
                                        <td>Category</td>   
                                        <td></td>
                                        <td></td>
                                    </thead>
                                    
                              
                                 <tbody>
                              
                                 @foreach ($categories as $category)
                                 
                                     <tr>
                                        
                                         <td>{{$category->name}}</td>
                                         <td>
                                            <a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}">sửa</a></td> 
                                          <td>
                                          <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger" type="submit" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" > Xóa
                                          </td>
                                        
                                         
                                     </tr>
                                 
                                 @endforeach
                                 </tbody>
                                 <tfoot>
                                     <td>
                                         <a href="" class="btn btn-primary" data-toggle="modal" data-target="#categoriesModal">Thêm thể loại sản phẩm</a>
                                     </td>
                                 </tfoot>
                             </table>
                         </div>
                     </div>
                 </div>
     </div>



<div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="categoriesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoriesModalLabel">Thêm thể loại sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="categoryFrom" >
            @csrf
          <div class="form-group">
            <label for="category_name" class="col-form-label">Tên thể loại</label>
            <input type="text" class="form-control" id="category_name">
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
        let category_name = $("#category_name").val();
        let _token = $("input[name=_token]").val();
  
        $.ajax({
            url:"{{route('category.store')}}",
            type: "POST",
            data:{
                category_name : category_name,
                _token : _token
            },
            
            success:function(response){
                
                
                if(response){
                    
                    category = response.name;
                    
                    $("#categoriesModal").modal('hide');    
                     $("#categoryFrom").trigger("reset");
                     renderhtml = "<tr><td>"+ category +"</td><td><a class='btn btn-warning' href='{{ route('category.edit', $category->id) }}'>sửa</td><td><a class='btn btn-danger' href='{{ route('category.destroy', $category->id) }}'>xóa</td></tr>"; 

                     $("#categoryTable tbody").append(renderhtml);
  
                }
            }

        });
    });
</script>


@endsection


