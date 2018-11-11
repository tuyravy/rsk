@extends('layouts.app')
    @section('content')
        <div role="main">
            <div class="">
              <div class="clearfix"></div>  
                <div class="row">
                        <nav aria-label="breadcrumb" class="col-md-12">
                            <ol class="breadcrumb" style="background-color:#ffff;">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer</li>
                            </ol>
                        </nav>       
                    <div class="col-md-12">
                        <div class="x_panel">
                           
                        <div class="x_title">
                               <h2><i class="fa fa-users"></i> Customers</h2>
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
                                                <a href="{{route('addcustomer')}}" class="btn btn-success"><i class="fa fa-plus"></i> New Customer</a>
                                                <button class="btn btn-default" type="submit"><i class="fa fa-cog"></i></button>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                        <table class="table table-bordered projects" id="datatable-buttons">
                                                <thead>
                                                    <tr style="border-bottom:3pt solid #22d4ae;">
                                                        <th style="width: 1%;text-align:center">Actions</th>   
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;r">Display Name</th>                                                        
                                                        <th style="text-align:center">Person ID</th>
                                                        <th style="text-align:center">E-Mail</th>
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;">Phone Number</th>
                                                        <th style="text-align:center">Last Name</th>
                                                        <th style="text-align:center">First Name</th>
                                                        
                                                    </tr>   
                                                    <tr>
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