@extends('layouts.app')
    @section('content')
    
            <div role="main">
                <div class="">
                <div class="clearfix"></div>  
                    <div class="row">
                        <nav aria-label="breadcrumb" class="col-md-12">
                            <ol class="breadcrumb" style="background-color:#ffff;">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Items</li>
                            </ol>
                        </nav>     
                        <div class="col-md-12">
                            <div class="x_panel">                            
                            <div class="x_title">
                               <i class="fa fa-users"></i> Customers Information (Fields in red are required)
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">First Name:</label>
                                            <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Item Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Category">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">E-Mail:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Supplier">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Phone Number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="UPC/EAN/ISBN">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Select Image:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Product ID">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Address 1:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Item Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Address 2:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Tags">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">City:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Manufacturer">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">State/Province:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Manufacturer">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Country:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Length">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Comments</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Width">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Store Account Balance</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Height">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Credit Limit:</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Company Name:</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Account:</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Override Default Tax For :</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Taxable:</label>
                                            <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="inputPassword3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Other:</label>
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