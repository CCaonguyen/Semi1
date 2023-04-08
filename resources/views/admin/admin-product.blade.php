@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUCT TABLE</h1>
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
                                        <tr>
                                            <form action="{{ route('admin-product') }}" method="post">
                                                @csrf
                                                @php
                                                    $category = DB::table('categories')->select('*')->get();
                                                    $color = DB::table('colors')->select('*')->get();
                                                    $size = DB::table('sizes')->select('*')->get();
                                                    @endphp

                                                  
                                                <th></th>
                                                <th><input type="text" name="productID" id=""></th>
                                                <th><input type="text" name="productname" id=""></th>
                                                <th><input type="number" min="0" value="10" name="price" id=""></th>
                                              



                                                                                            
                                                 <th> <select class="form-select" name = "categoryID" aria-label="Default select example"> 
                                                    @foreach ($category as $item)
                                                   <option value="{{$item ->categoryName}}">{{$item ->categoryName}}</option>
                                                   @endforeach
                                             
                                                 
                                                  </select> 

                                                  
                                                  
                                                   <select class="form-select" name = "colorID" aria-label="Default select example">
                                                    @foreach ($color as $item)
                                                    <option value="{{$item ->colorName}}">{{$item ->colorName}}</option>
                                                    @endforeach
                                               
                                                     
                                             </select> 
                                                
                                                    <select class="form-select" name = "sizeID" aria-label="Default select example">
                                                    @foreach ($size as $item)
                                                    <option value="{{$item ->sizeName}}">{{$item ->sizeName}}</option>
                                                    @endforeach
                                              
                                                     
                                                   </select> </th> 
                                           <th><input type="file" name="images" id="" multiple></th>
                                                <th><input type="text" name="description" id="" ></th>
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>

                                            </form>
                                             
                                        
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $product as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> productID}}</th>
                                            <th>{{ $value -> productname}}</th>
                                            <th>{{ $value -> price}}</th>
                                            <th>{{ $value -> categoryID}}</th>
                                            <th>{{ $value -> colorID}}</th>
                                            <th>{{ $value -> sizeID}}</th>
                                            <th>{{ $value -> images}}</th>

                                            <th>{{ $value -> description}}</th>
                                            <th><a href="{{route('delete',$value->productID)}}">Delete</a></th>
                                            <th><a href="{{route('HH',$value->productID)}}">Update</a></th>
                                        </tr>
                                        @endforeach
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
