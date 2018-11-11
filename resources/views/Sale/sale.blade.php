@extends('layouts.app')
    @section('content')
       
    <div class="row">
                <nav aria-label="breadcrumb" class="col-md-12">
                    <ol class="breadcrumb" style="background-color:#ffff;">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sales</li>
                    </ol>
                </nav> 
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-shopping-cart"></i> List off Sale</h2>
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

                    <!--List off sale table-->
                    <div class="x_content">
                    <div class="row">
                        <div class="pull-right">
                            <a href="{{route('addsale')}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add Sale</a>
                        </div>
                     </div>
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
  
                <!-- <div class="col-md-4">
                  <div class="x_panel">
                    <div class="x_title">
                     <h2><i class="fa fa-user"></i> Sale Profiles <small></small></h2>
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
                     
                    <form class="form-inline">
                            <div class="form-group">                                
                                <div class="input-group">
                                <div class="input-group-addon" style="font-size:25px;background-color:#489ee7;color:#ffff"><a href="" style="color:#ffff"><i class="fa fa-user"></i></a></div>
                                <input type="text" class="form-control input-lg" style="width:123%" placeholder="Type customer name...">                                
                                </div>
                            </div>
                            
                    </form>

                      <article class="media event">                        
                        <div class="media-body">
                            <a class="pull-left" style="font-weight: bold;">
                                Sales Person:
                            </a>
                            <a class="pull-right" href="#">Tuy Ravy
                            </a>
                        </div>
                      </article>

                      <article class="media event">                        
                        <div class="media-body">
                            <a class="pull-left">
                              Discount all Items by Percent:
                            </a>
                            <a class="pull-right" href="#" style="color:red">Set Discount
                            </a>
                        </div>
                      </article>

                      <article class="media event">                        
                        <div class="media-body">
                            <a class="pull-left">
                            Discount Entire Sale:
                            </a>
                            <a class="pull-right" href="#" style="color:red">Set Discount
                            </a>
                        </div>
                      </article>

                     <article class="media event">                        
                        <div class="media-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background-color:#22d4ae38">
                                    <li class="breadcrumb-item active" aria-current="page">Sub total:</li>
                                    <a class="pull-right" href="#" style="color:blank;font-weight: bold;">$ 2500</a>
                                </ol>                               
                            </nav>
                        </div>
                      </article>                     

                      <article class="media event">                        
                        <div class="media-body">
                            <table class="table table-bordered">
                                <tr style="border-bottom:3pt solid #22d4ae;text-align:center;color:blank;font-weight: bold;">                                    
                                    <td>Tota:</td>
                                    <td>Amount Due</td>
                                </tr>
                                <tr style="text-align:right;">                                    
                                    <td>$ 300</td>
                                    <td>$ 300</td>
                                </tr>
                        </table>          
                        </div>
                      </article>
                      <article class="media event">                        
                      <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Payment Currency</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="USD">
                        </div>
                        <div class="form-group">       
                            <textarea class="form-control" rows="3" placeholder="Comments"></textarea>
                        </div>
                       
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> Show Comments on receipt
                            </label>
                        </div>
                       
                        </form>
                      </article>
                    </div>
                  </div>
                </div> -->
              </div>
          <!-- Button trigger modal -->
        
        
    @endsection