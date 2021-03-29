@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Product </h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('updateProducts', $product->id) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row"> <!-- 1st Row -->
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <h5>Title <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="title" class="form-control"
                                                                   required="" placeholder="Product title"
                                                                   value="{{ $product->title }}">
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col md 4 -->
                                            </div> <!-- End 1stRow -->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Description <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                            <textarea rows="10" cols="15"
                                                      class="form-control" placeholder="Product description..."
                                                      name="description">
                                                {{ $product->description }}
                                            </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Price <span class="text-danger">*</span></h5>
                                                        <input name="price" class="form-control" placeholder="10.00"
                                                               value="{{ $product->price }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Thumbnail <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="thumbnail" class="form-control"
                                                                   id="image">
                                                        </div>
                                                    </div>

                                                </div> <!-- End Col md 4 -->


                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                                 style="width: 100px; width: 100px; border: 1px solid #000000;">

                                                        </div>
                                                    </div>

                                                </div> <!-- End Col md 4 -->


                                            </div> <!-- End 5TH Row -->


                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                       value="Update product">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>


        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>



@endsection
