@extends('layout.admin')

@section('content_dashboard')
<div class="content"> 
        <form  method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" id="" placeholder="Nhập tên sản phẩm" required>
              </div>
              
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Thể loại sản phẩm</label>
                    <select class="custom-select custom-select-lg" id="category_id" >
                        <option selected>Chọn thể loại sản phẩm</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
              <label for="inputAddress2">Quyền lợi</label>
            </div>
             <div>
                <textarea name="content_blog" id="summernote" cols="100" rows="10"></textarea>      
                <button type="submit" class="btn btn-success btn-lg btn-submit">Submit</button>
             </div>
            
             <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
            </div>
            
           
         
          </form>
    
 </div>
 <script>
    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 100
    });
    
  </script>
@endsection
