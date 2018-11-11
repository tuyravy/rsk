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
                               <h2><i class="fa fa-list-ul"></i> List off items</h2>
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
                                             <div class="pull-right">
                                                <a href="{{route('additem')}}" class="btn btn-success"><i class="fa fa-plus"></i> New Item</a>
                                                <button class="btn btn-default" type="submit"><i class="fa fa-cog"></i></button>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                        <table class="table table-bordered projects" id="datatable-buttons">
                                                <thead>
                                                    <tr style="border-bottom:3pt solid #22d4ae;">
                                                        <th style="width: 1%;text-align:center">Actions</th>   
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;r">Item Id</th>                                                        
                                                        <th style="text-align:center">Item Name</th>
                                                        <th style="text-align:center">Cost Price</th>
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;">Selling Price</th>
                                                        <th style="text-align:center">Quantity</th>
                                                        <th style="text-align:center">Product ID</th>
                                                        <th style="text-align:center">Category</th>
                                                        <th style="text-align:center">Supplier</th>
                                                        <th style="text-align:center">Tax Group</th>
                                                        <th style="text-align:center">Prices Include Tax</th>
                                                        <th style="text-align:center">Promo Price</th>
                                                    </tr>   
                                                    <tr>
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
           </div>
       </div>

          <!-- Button trigger modal -->

    @endsection