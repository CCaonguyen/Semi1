@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CUSTOMER TABLES</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Customer | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Images</th>
                                            
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Images</th>
                                            
                                            <th>Description</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <form action="" method="post">
                                            @csrf
                                                <th>#</th>
                                              
                                                <th><input type="text" name="productID" value="{{$product->productID}}"></th>
                
                                                <th><input type="text" name="productname" value="{{$product->productname}}" ></th>
                                
                                                <th><input type="text" name="price" min="0" value="10" value="{{$product->price}}"></th>
                                                <th><input type="text" name="categoryID" value="{{$product->categoryID}}"></th>
                
                                                <th><input type="text" name="colorID" value="{{$product->colorID}}" ></th>
                                                <th><input type="text" name="sizeID" value="{{$product->sizeID}}" ></th>
                                                <th><input type="text" name="images" value="{{$product->images}}" ></th>
                                                <th><input type="text" name="description" value="{{$product->description}}"></th>
                                                
                                                <th><button type="submit">Update </button></th>
                                                {{-- <th><button type="submit"><a href="{{route('update-color',$value->colorID)}}">Update</a></button></th> --}}
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')