@include('admin.admin-header')
@yield('admin-news')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-6 text-gray-800">Create News Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Product | BEVIS</h6>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Size ID</th>
                                            <th>Size Name</th>
                                            <th>Description</th>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <form action="" method="post">
                                                @csrf
                                                <th></th>
                                                <th><input type="text" name="sizeID" id=""></th>
                                                <th><input type="text" name="sizeName" id=""></th>
                                                <th><input type="text" name="description" id=""></th>
                                                
                                                
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>
                                            </form>
                                        
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $size as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> sizeID}}</th>
                                            <th>{{ $value -> sizeName}}</th>
                                            <th>{{ $value -> description}}</th>
                                          
                                            <th><a href="{{route('delete-size',$value->sizeID)}}">Delete</a></th>
                                           
                                            <th><a href="{{route('YY',$value->sizeID)}}">Update</a></th>
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