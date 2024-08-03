<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
crossorigin="anonymous"></script>




@extends('admintemplate')
@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col text-center mt-3">
            <h2>CATEGORIES</h2>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-3 mt-3">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</button>
        </div>
    </div>
    <div class="row m-1 ">
        <div class="col">
            {{-- <a href="" class="btn btn-secondary">Add Category</a> --}}
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                    <th class="text-white">S.no</th>
                    <th class="text-white">ID</th>
                    <th class="text-white" >Name</th>
                    <th class="text-white" >Image</th>
                    <th class="text-white" >Status</th>
                    <th class="text-white">Action</th>



                </tr>
                </thead>

                <tbody>
                 @foreach ($Category as $item)
                    <tr>
                        <td class="text-white" >{{$loop->iteration}}</td>
                        <td class="text-white">{{$item->CategoryId}}</td>
                        <td class="text-white">{{$item->CategoryName}}</td>
                        <td class="text-white">{{$item->CategoryImage}}</td>
                        <td class="text-white">{{$item->CategoryStatus}}</td>
                       <td><a class="editid" id="{{$item->CategoryId}}" data-bs-toggle="modal" data-bs-target="#editCategory" href="#">
                        <i style="color: green; " class="fas fa-pencil-alt" aria-hidden="true"></i>
                      </a></td>
                       {{-- <td><a href="#"><i style="color: red; position: relative; right: 100px" class="fas fa-trash" aria-hidden="true"></i></a> </td> --}}
                   <td>      
                    <form action="Categories/{{$item->CategoryId}}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-link">
                       <i style="color: red; position: relative; right: 100px; top: -7px" class="fas fa-trash" aria-hidden="true"></i>
                     </button>
                    </form></td>
                        {{-- <td class="text-white"><button class="btn btn-success"  style="margin-top: -5px ">Update</button></td> --}}
                        {{-- <td class="text-white"><button class="btn btn-primary"  style="margin-top: -5px ">Delete</button></td> --}}
                    </tr>
                 @endforeach
                <tbody>
                <hr>
            </table>
            <hr>
</div>


{{-- add category modal  --}}

<!-- add Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form action="/Categories" method="POST" >
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" name="categoryName" class="form-control" placeholder="Enter Category Name" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    <input type="file" name="categoryImage" class="form-control" placeholder="">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>


    </div>
  </div>

  {{-- edit category modal  --}}
  <div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Category </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form  method="POST" id="formUpdate" >
            @csrf
            @method('PUT')

            <input type="hidden" name="editcategoryid" id="EditCategoryId">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Edit Category</label>
                    <input type="text" name="EditCategoryName" id="EditCategoryName" class="form-control" placeholder="Enter Category Name" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    <input type="file" name="EditCategoryImage" id="EditCategoryImage" class="form-control" placeholder="">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>


    </div>
  </div>

@endsection


<script>
$(document).ready(function (){
$('.editid').on('click' , function(){
  var id = $(this).attr('id');
  // alert(id);
  // console.log(id);

  //  console.log(id);
   $.ajax({
     url: 'Categories/'+id+'/edit',
     type: 'GET',
     success: function(data) {
      // console.log(data);
      $.each(data, function(key , value){
        // console.log(value['CategoryId']);
                   $('#EditCategoryId').val(value['CategoryId']);
                   $('#EditCategoryName').val(value['CategoryName']);
                   $('#formUpdate').attr('action' , 'Categories/' +value['CategoryId']);

      })
     }
  })
})

})
</script>