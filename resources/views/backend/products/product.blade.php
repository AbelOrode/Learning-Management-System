@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">
                        <div class="box bb-3 border-warning">
                            <div class="box-header">
                                <h4 class="box-title">Add <strong>Product</strong></h4>
                            </div>
                        </div>
                    </div> <!-- // end first col 12 -->

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Product List</h3>
                                <a href="{{ route('addProducts') }}" style="float: right;"
                                   class="btn btn-rounded btn-success mb-5"> Add Product </a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img src="{{ asset($product->thumbnail) }}" width="100"></td>
                                                <td class="no-wrap"><a href="{{ route('editProducts', $product->id) }}">{{ $product->title }}</a></td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}USD</td>
                                                <td width="15%">
                                                    <a href="{{ route('editProducts', $product->id) }}" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('deleteProducts', $product->id) }}" id="delete" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>


@endsection
