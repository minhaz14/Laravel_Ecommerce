
@extends('admin.layouts.master')

@section('content')


<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Product Create Form </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                           <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>  -->
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                       <div class="card">
                            <div class="card-header">
                                Add product
                            </div>
                         <div class="card-body">
                            <form action="{{route('admin.product.store')}}"   method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}

                               @include('admin.partials.messages')
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Title</label>
                                        <input type="text" class="form-control" name= "title" id="exampleFormControlInput1" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Description</label>
                       
                                        <textarea name="descriptioon" id="" cols="80" rows="6" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Price</label>
                                        <input type="number" class="form-control" name= "price">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Quantity</label>
                                        <input type="number" class="form-control" name= "quantity" id="exampleFormControlInput1" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Product Image</label>
                                        <input type="file" class="form-control" name= "product_image" id="product_image" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">slug</label>
                                        <input type="text" class="form-control" name= "slug" id="slug" >
                                    </div>
                                   
                                   
                                   
                                    <button type="submit"  class="btn btn-promary">Ad product</button>
                                </form>
                           </div>
                       </div>
 
                    </div>
                </div>
            </div>
           
        </div>

@endsection