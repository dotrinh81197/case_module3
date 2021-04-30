@extends('layout.admin')

@section('content_dashboard')

<form action="">
  @csrf
  <div class="content_dashboard container-fluid"> 
        
    <div class="row">

      
            <div class="col-md-6 ">
                <div class="card-header ">
                    <h4 class="card-title">DANH SÁCH TƯ VẤN</h4>
                </div>
                
            </div> 
            <div class="col-md-6">
                <a href="javascript:void(0)" class="btn btn-lg btn-success" onclick="showRegisterForm()"> TẠO TÀI KHOẢN TƯ VẤN </a>
            </div>
    </div>

     <div>
     
        <table class="table table-hover table-striped" id="conslutationTable">
             
           <thead>
               <tr>
                   <td>#</td>
                   {{-- <td>Mã số</td>    --}}
                   <td>Tên tư vấn</td>
                   <td>Danh sách cuộc tư vấn</td>
                   <td>Danh sách hợp đồng </td>
               </tr>
           </thead>
           
     
           <tbody>
     
                   @foreach ($employees as $key => $employee)
                   <tr id="{{$employee->id}}">
                     <td>{{++$key}}</td>
                    <td>{{$employee->name}}</td>
                   
                    <td>
                      <a href="" class="btn btn-primary">
                      Danh sách cuộc tư vấn
                      </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-pink">
                            Danh sách hợp đồng chăm sóc
                        </a>    
                    </td>
                    
                    <td>
                      <a href="javascript:void(0)" class="btn btn-danger"  class="text-danger" onclick="" > hủy
                      </a>

                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-orange" onclick="openEditForm({{$employee->id}})">Chỉnh sửa</a>
                    </td>
                   
                    
                   </tr>
                   @endforeach                      
           </tbody>

    
        </table>
    </div>
</div>

</form>

   


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
            <input type="text" class="form-control" id="category_name" >
          </div>
          @if ($errors->any())
          @foreach($errors->all() as $nameError)
              <p style="color:red">{{ $nameError }}</p>
          @endforeach
          @endif
          
    
        <button type="submit" class="btn btn-primary" id="btn-submit" > Thêm </button>

        </form>
      </div>
      
    </div>
  </div>
</div>


{{-- detail consultation --}}
<div class="modal fade bd-example-modal-lg" id="userModal" tabindex="-1" role="dialog" aria-labelledby="consultationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      </div>
      
    </div>
  </div>
</div>
<script>
  window.onload=loadList
  

  
 function openDetailForm(idConsultation) {
        $("#userModal").modal();
       let url = `/admin/consultation/${idConsultation}/showdetail`;
        console.log(url);

        $.ajax({

            url:url,
          
            success: function(xml) {
            
                document.querySelector('#userModal .modal-body').innerHTML = xml;
            }
           
        })
    }

  //   function submitEdit(idConsultation) {
     
  //     let category_name = $("#category_name1").val();
  //    let _token = $("input[name=_token]").val();
       
  //       $.ajax({
  //           url: `/admin/category/${idConsultation}/edit-form`,
  //           type: 'PUT',
  //           data: {
  //             category_name:category_name,
  //             _token:_token
              
  //           },
           
  //           success: function() {
  //               // Alert success
  //               alert("Edit successfully")

  //               // Close Modal
  //               $("#userModal").modal("hide");

  //               // Reload List
  //               loadList();
  //           },
  //           error: function() {
  //               alert("Edit Failed")
  //           }
  //       })
       
  //   }

    // function loadList() {
    //     var url = `/admin/category/list`;

    //     $.ajax({
    //         url: url,

    //         success: function(xml) {
              
    //             const categoryListElement = document.querySelector('#category_list');

    //             categoryListElement.innerHTML = xml;
    //         },
    //         error: function(error) {
    //             console.log("Xảy ra lỗi: " + error.message)
    //         }
    //     })
    // }

  function deleteConsultation(idConsultation) {
    let  _token=$("input[name=_token]").val()
    let  url =  `/admin/consultation/${idConsultation}`;
   
    console.log( _token);
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
      
        $.ajax({
            url:url,
            type:'DELETE',
            data:{
               _token:_token
            },
            success:function(response){
              $('#'+idConsultation).remove();
            }
        })
    }
    
  }

  function showRegisterForm() {

        $("#userModal").modal();
       let url = `/admin/user/show-register-form`;
        console.log(url);

        $.ajax({

            url:url,
          
            success: function(xml) {
            
                document.querySelector('#userModal .modal-body').innerHTML = xml;
            }
           
        })
    }
  
</script>
  


@endsection


