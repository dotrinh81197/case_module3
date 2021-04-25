@extends('layout.admin')

@section('content_dashboard')
<div class="container content_dashboard">
    <h1>SỬA SẢN PHẨM</h1>
  <form  method="post" enctype="multipart/form-data" style="font-size: 15px;">
    @csrf
    @method('put')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product_name" id="" value="{{$product->name}}" required>
      </div>
      
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">Thể loại sản phẩm</label>
            <select class="custom-select custom-select-lg" name="category">
                <option value="{{$product->category->id}}" selected>{{$product->category->name}}</option>
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
        <textarea name="content_benefit" id="summernote" cols="100" rows="10" >{{$product->benefit}}</textarea>      
     </div>
    
    <div class="form-row">
     
        <div class="form-group col-md-12 mb-2 ml-3">
            <h3>Ví dụ minh họa</h3>
           
            <img id="image_preview_container" src="{{ asset('public/image/image-preview.png') }}"
                alt="preview image" style="max-height: 350px;">
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" name="illustration_image" placeholder="Choose image" id="image">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
        </div>
          
    </div>      
    <button type="submit" class="btn btn-success btn-lg btn-submit">HOÀN THÀNH</button>

    </form> 

</div>

<script>
    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 100
    });
    
</script>
<script type="text/javascript">
     
    $(document).ready(function (e) {
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        $('#image').change(function(){
          
            let reader = new FileReader();
            reader.onload = (e) => { 
              $('#image_preview_container').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
 
        });
 
        $('#upload_image_form').submit(function(e) {
            e.preventDefault();
 
            var formData = new FormData(this);
 
            $.ajax({
                type:'POST',
                url: "{{ url('save-photo')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Image has been uploaded successfully');
                },
                error: function(data){
                    // console.log(data);
                }
            });
        });
    });
 
</script>
@endsection
