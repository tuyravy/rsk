@extends('layouts.app')
    @section('content')
        <link href="{{ asset('Thirdparty/css/custom_page.css')}}" rel="stylesheet">
        <div class="breadcrumb flat row nopadding" style="margin-top:-10px;">
                        <a href="" class="active">Item info</a>
                        <a href="">Variations</a>                        
                        <a href="" >Pricing</a>
                        <a href="">Inventory</a>
                        <a href="">Images</a>
         </div>
            <div role="main">
                <div class="">
                <div class="clearfix"></div>  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">                            
                            <div class="x_title">
                               <i class="fa fa-list-ul"></i> Items Information (Fields in red are required)
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                            <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                <div class="clearfix"></div>
                                </div>
                                    <div class="x_content">                                                                            
                                            
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Item Name:</label>
                                            <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Item Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Category">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Supplier:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Supplier">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">UPC/EAN/ISBN:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="UPC/EAN/ISBN">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Product ID:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Product ID">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Item Number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Item Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Tags:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Tags">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Manufacturer:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Manufacturer">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Weight:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Manufacturer">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Dimensions:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Length">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Width">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Height">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button type="button" class="submit_button floating-button btn btn-lg btn-primary"><i class="fa fa-save"></i>  Save</button>
                                        </div>
                                        
                                    </form>  

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
  @endsection