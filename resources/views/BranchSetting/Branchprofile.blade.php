@extends('layouts.app')
    @section('content')
        <div role="main">
            <div class="">
              <div class="clearfix"></div>  
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                           
                        <div class="x_title">
                                <span class="glyphicon glyphicon-align-justify"></span><span style="margin-left:10px;">Branch Setting</span>
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
                                    <nav aria-label="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb" style="background-color:#ffff;">
                                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Branch Profile</li>
                                        </ol>
                                    </nav>
                                  
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Branch Name</label>
                                                <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Branch Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Attach Image logo</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">License Key</label>
                                                <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="License Key">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Web Site</label>
                                                <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Web Site">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Phone Number">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                        <br/>
                                        <div class="col-md-12">
                                        <table class="table table-bordered projects" id="datatable-buttons">
                                                <thead>
                                                    <tr style="border-bottom:3pt solid #22d4ae;">
                                                        <th style="width: 1%;text-align:center">ID</th>   
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;r">Branch Name</th>                                                        
                                                        <th style="text-align:center">License Key</th>
                                                        <th style="text-align:center">Web Site</th>
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;">Phone Number</th>
                                                        <th style="text-align:center">Action</th>
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