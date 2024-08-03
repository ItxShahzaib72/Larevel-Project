<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
crossorigin="anonymous"></script>



@extends('admintemplate')


@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col text-center mt-3">
            <h2>PRODUCTS</h2>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-3 mt-3">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addCategory">Add Products</button>
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
                    <th class="text-white">CategoryID</th>
                    <th class="text-white" >Name</th>
                    <th class="text-white" >Description</th>
                    <th class="text-white" >Image</th>
                    <th class="text-white" >Quantity</th>
                    <th class="text-white" >Price</th>
                    <th class="text-white" >Status</th>
                    <th class="text-white">Action</th>



                </tr>
                </thead>

                <tbody>
                 @foreach ($Products as $item)
                    <tr>
                        <td class="text-white" >{{$loop->iteration}}</td>
                        <td class="text-white">{{$item->ProductId}}</td>
                        <td class="text-white">{{$item->CategorytId}}</td>
                        <td class="text-white">{{$item->ProductName	}}</td>
                        <td class="text-white">{{$item->ProductDescription}}</td>
                        <td class="text-white">{{$item->ProductImage}}</td>
                        <td class="text-white">{{$item->ProductQuantity}}</td>
                        <td class="text-white">{{$item->ProductPrice}}</td>
                        <td class="text-white">{{$item->ProductStatus}}</td>
                        <td><a  class="Productid" id="{{$item->ProductId}}"  data-bs-toggle="modal" data-bs-target="#editProduct" href="#"><i style="color: green; " class="fas fa-pencil-alt" aria-hidden="true"></i></a></td>
                       {{-- <td><a href="#"><i style="color: red; position: relative; right: 35px" class="fas fa-trash" aria-hidden="true"></i></a> </td> --}}
                       <td>      
                        <form action="Products/{{$item->ProductId}}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-link">
                           <i style="color: red; position: relative; right: 50px; top: -7px" class="fas fa-trash" aria-hidden="true"></i>
                         </button>
                        </form></td>
                    </tr>
                 @endforeach
                <tbody>
                <hr>
            </table>
            <hr>
</div>


{{-- add category modal  --}}

<!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: silver">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Add Products</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form action="/Products" method="POST" >
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label" style="color: black">Product Name</label>
                    <input type="text" name="Name" class="form-control" placeholder="Enter Product Name" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Description</label>
                    <input type="text" name="Description" class="form-control" placeholder="Enter Product Description" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Quantity</label>
                    <input type="numbers" name="Quantity" class="form-control" placeholder="Enter Product Quantity" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Price</label>
                    <input type="numbers" name="Price" class="form-control" placeholder="Enter Product Price" style="color: white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Image</label>
                    <input type="file" name="Image" class="form-control" placeholder="">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </form>


    </div>
  </div>

  {{-- edit product modal  --}}

  <div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content" style="border-color: green">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form method="POST" id="ProductDataUpdate" >
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                  <input type="hidden" name="editproductid" id="EditProductId">
                    <label class="form-label" style="color: black">Product Name</label>
                    <input type="text" name="EditProductName" id="EditProductName" class="form-control" placeholder="Enter Product Name" style="color: white; background-color: black;">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Description</label>
                    <input type="text" name="EditProductDescription" id="EditProductDescription" class="form-control" placeholder="Enter Product Description" style="color:white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Quantity</label>
                    <input type="numbers" name="EditProductQuantity" id="EditProductQuantity" class="form-control" placeholder="Enter Product Quantity" style="color:white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Price</label>
                    <input type="numbers" name="EditProductPrice" id="EditProductPrice" class="form-control" placeholder="Enter Product Price"style="color:white">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" style="color: black">Product Image</label>
                    <input type="file" name="EditProductImage" id="EditProductImage" class="form-control" placeholder="" style="color:white; background-color: black;">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" style="background-color:red" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" style="background-color:green; " >Update</button>
            </div>
          </div>
        </form>


    </div>
  </div>


@endsection

<script>
  $(document).ready(function(){
   $('.Productid').on('click' , function(){

    var id = $(this).attr('id');
    console.log(id);

    $.ajax({
    url: 'Products/'+id+'/edit',
    type: 'GET',
    success: function(PData){
      $.each(PData , function(key , value){
        $('#EditProductId').val(value['ProductId']);
        $('#EditProductName').val(value['ProductName']);
        $('#EditProductDescription').val(value['ProductDescription']);
        $('#EditProductQuantity').val(value['ProductQuantity']);
        $('#EditProductPrice').val(value['ProductPrice']);
        $('#EditProductImage').val(value['ProductImage']);
        $('#ProductDataUpdate').attr('action' ,'Products/' +value['ProductId']);

      })
    }
    }) 
   })


  })
</script>
