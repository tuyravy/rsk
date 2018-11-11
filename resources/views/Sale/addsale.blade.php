@extends('layouts.app')
    @section('content')
    <link href="{{ asset('Thirdparty/css/custom_page.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> 
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <div role="main">
                <div class="">
                <div class="clearfix"></div>  
                    <div class="row">
                        <nav aria-label="breadcrumb" class="col-md-12">
                            <ol class="breadcrumb" style="background-color:#ffff;">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('sale') }}">Sales</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Sale</li>
                            </ol>
                        </nav> 
                        <div class="col-md-12">
                            <div class="x_panel">                            
                            <div class="x_title">
                              <h2> <i class="fa fa-list-ul"></i> Sale Information (Fields in red are required)</h2>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-6" id="adv-search">
                                                <input type="text" class="form-control" placeholder="Search by Items Name or QRCode" />
                                                <div class="input-group-btn">
                                                    <div class="btn-group" role="group">
                                                        <div class="dropdown dropdown-lg">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                             <form class="form-horizontal" role="form">
                                                                <div class="form-group">
                                                                    <label for="filter">Filter by</label>
                                                                    <select class="form-control">
                                                                        <option value="0" selected>All Snippets</option>
                                                                        <option value="1">Featured</option>
                                                                        <option value="2">Most popular</option>
                                                                        <option value="3">Top rated</option>
                                                                        <option value="4">Most commented</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="contain">Author</label>
                                                                    <input class="form-control" type="text" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="contain">Contains the words</label>
                                                                    <input class="form-control" type="text" />
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <tr style="border-bottom:3pt solid #22d4ae;text-align:center;background-color:#74b8f3;color:#ffff">
                                                        <td>#</td>
                                                        <td style="text-align:left">Product Code</td>
                                                        <td>Product Name</td>
                                                        <td>Unit Price</td>
                                                        <td>Qty</td>
                                                        <td>Discount</td>
                                                        <td>Product Tax</td>
                                                        <td>Subtotal</td>
                                                    </tr>
                                                    <tr style="text-align:center">
                                                        <td>1</td>
                                                        <td>#AC001</td>
                                                        <td style="text-align:left">Computer</td>
                                                        <td>$ 500</td>
                                                        <td>2</td>
                                                        <td>10%</td>
                                                        <td>1%</td>
                                                        <td>$ 900</td>
                                                    </tr>  
                                                    <tr style="text-align:center">
                                                        <td>1</td>
                                                        <td>#AC001</td>
                                                        <td style="text-align:left">Computer</td>
                                                        <td>$ 500</td>
                                                        <td>2</td>
                                                        <td>10%</td>
                                                        <td>1%</td>
                                                        <td>$ 900</td>
                                                    </tr>   
                                                    <tr style="text-align:center">
                                                        <td>1</td>
                                                        <td>#AC001</td>
                                                        <td style="text-align:left">Computer</td>
                                                        <td>$ 500</td>
                                                        <td>2</td>
                                                        <td>10%</td>
                                                        <td>1%</td>
                                                        <td>$ 900</td>
                                                    </tr>                                        
                                                    <tr style="text-align:center" class="active">
                                                        <td colspan="3" style="text-align:right">Total:</td>  
                                                        <td>2</td>                                          
                                                        <td>2</td>
                                                        <td>10%</td>
                                                        <td>1%</td>
                                                        <td>$ 900</td>
                                                    </tr>
                                                </table>
                                                <br/>
                                            </div>
                                          
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Sale Date *</label>
                                                <input type="text" id="datestart" class="form-control date" placeholder="<?php echo date("d/m/Y")?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Saleman</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Project Name</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Warehouse Name *</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Reference No</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reference No">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Customer</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Company Name</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Branch Name</label>
                                                <div class="row-fluid">
                                                    <select class="selectpicker" id="brname" data-show-subtext="true" data-live-search="true" name="brname" required>
                                                        <option data-subtext="Project name" value="All">Select</option>
                                                        <option value="All">Project HO</option>
                                                        <option value="All">Project AO</option>
                                                        <option value="All">Project AG</option>
                                                    </select>
                                                </div>
                                            </div>                                           
                                        </div>
                                       
                                    <div class="row">
                                            <div class="form-group col-md-2">
                                                <label for="exampleInputEmail1">Payment Terms</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Payment Terms">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="exampleInputEmail1">Delivery by</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Delivery by">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Delivery_reff_no</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="delivery_reff_no">
                                            </div>  
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Delivery_cost</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="delivery_cost">
                                            </div>                                           
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Delivery_address</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Delivery_note</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Document</label>
                                                    <div class="input-group">                                                       
                                                        <input type="file" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                        <div class="input-group-addon btn-primary" style="background-color:#337ab7;"><a href="" style="color:#ffff;"><i class="fa fa-plus"></i> add more</a></div>
                                                    </div>
                                            </div>    
                                                       
                                        </div>
                                        <br/>   
                                        <div class="row">
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-undo"></i> Back</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                <button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add Sale</button>
                                                

                                            </div>
                                           
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--List of sale-->
                    <div class="row">
                        <div class="col-md-12">
                        <div class="x_panel">                           
                                <div class="x_title">
                                <h2><i class="fa fa-list-ul"></i> List off Sale</h2>
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
                                        <div class="row">                                                                   
                                         <div class="panel-body table-responsive">
                                            <table class="table table-bordered projects" id="datatable-buttons">
                                                    <thead>
                                                        <tr style="border-bottom:3pt solid #22d4ae;white-space: nowrap;overflow: hidden;">
                                                            <th style="width: 1%;text-align:center">#</th> 
                                                            <th style="text-align:center">Action</th>
                                                            <th style="width: 1%;text-align:center">Sate Date</th>   
                                                            <th style="text-align:left;">Sale ID</th>                                                        
                                                            <th style="text-align:center">Customer</th>
                                                            <th style="text-align:center">Project</th>
                                                            <th style="text-align:center">Company Name</th>
                                                            <th style="text-align:center">Branch Name</th>                                                           
                                                            <th style="text-align:center">Sale Man</th>
                                                            <th style="text-align:center">Total Amount</th>
                                                            <th style="text-align:center">Total Discount</th>
                                                            <th style="text-align:center">Total due amount</th>
                                                            <th style="text-align:center">Vat amount</th>
                                                            <th style="text-align:center">Sale due date</th>
                                                            <th style="text-align:center">Total paid amount</th>
                                                            <th style="text-align:center">Warehouse Name</th>
                                                           
                                                           

                                                        </tr>   
                                                        <tr>
                                                            
                                                            <td>1</td>
                                                            <td>

                                                                  <div class="btn-group show-on-hover">
                                                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                        Action <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="#">Sale Detail</a></li>
                                                                        <li><a href="#">View Payments</a></li>
                                                                        <li><a href="#">Add Payments</a></li>
                                                                       
                                                                    </ul>
                                                                    </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>                                                           
                                                            
                                                        </tr>        
                                                        <tr>
                                                            
                                                            <td>2</td>
                                                            <td>

                                                                  <div class="btn-group show-on-hover">
                                                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                        Action <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="#">Sale Detail</a></li>
                                                                        <li><a href="#">View Payments</a></li>
                                                                        <li><a href="#">Something else here</a></li>
                                                                       
                                                                    </ul>
                                                                    </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>                                                           
                                                            
                                                        </tr>         
                                                        <tr>
                                                            
                                                            <td>3</td>
                                                            <td>

                                                                  <div class="btn-group show-on-hover">
                                                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                        Action <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="#">Sale Detail</a></li>
                                                                        <li><a href="#">View Payments</a></li>
                                                                        <li><a href="#">Something else here</a></li>
                                                                       
                                                                    </ul>
                                                                    </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>                                                           
                                                            
                                                        </tr>                                                     
                                                    </thead>
                                                <tbody id="reportsinterbranch">
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--End off Sale-->

                </div>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
            var jqOld = jQuery.noConflict();
            jqOld(function() {
                jqOld("#datestart" ).datepicker({ dateFormat: 'yy-mm-dd' });
            });
            jqOld(function() {
                jqOld("#dateend" ).datepicker({ dateFormat: 'yy-mm-dd' });
            });
        
        </script>
  
  @endsection