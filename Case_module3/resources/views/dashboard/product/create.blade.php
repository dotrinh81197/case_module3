@extends('layout.admin')

@section('content_dashboard')
<div class="container content_dashboard">
  <form  method="post" enctype="multipart/form-data" style="font-size: 15px;">
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
            <select class="custom-select custom-select-lg" name="category">
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
        <textarea name="content_benefit" id="summernote" cols="100" rows="10"></textarea>      
     </div>
    
    </div>
    <div class="form-group">
      <div class="custom-file">
        <label> Chọn ảnh sản phẩm;</label>
        <br>
                <input type="file" name="image_product" id="fileToUpload">
           
              
      </div>
     
    </div>
    <div class="form-group ">
      <div class="custom-file">
        <label>Chọn ảnh ví dụ minh họa cho sản phẩm:</label>
        <br>
                <input type="file" name="image_illustration" id="fileToUpload">
           
      </div>
      
    </div>
    
   
    <button type="submit" class="btn btn-success btn-lg btn-submit">Submit</button>

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
