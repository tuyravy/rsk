@extends('layouts.app')
    @section('content')
        <div role="main">
            <div class="">
              <div class="clearfix"></div>  
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                           
                        <div class="x_title">
                                <span class="glyphicon glyphicon-align-justify"></span><span style="margin-left:10px;">Add Permission</span>
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
                                            <li class="breadcrumb-item active" aria-current="page">List of User</li>
                                            
                                        </ol>
                                    </nav>
                                    <div class="panel-body table-responsive">
                                        <table class="table table-bordered projects" id="datatable-buttons">
                                                <thead>
                                                    <tr style="border-bottom:3pt solid #22d4ae;">
                                                        <th style="width: 1%;text-align:center">ID</th>   
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;r">User Name</th>
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;">Email</th>
                                                        <th style="text-align:center">License Key</th>
                                                        <th style="text-align:center">Modifiredate</th>
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;">Modifire by</th>
                                                        <th style="text-align:center">Action</th>
                                                    </tr>
                                                    @foreach($userlist as $row)
                                                        <tr>
                                                            <td>{{$row->id}}</td>
                                                            <td>{{$row->name}}</td>
                                                            <td>{{$row->email}}</td>
                                                            <td style="text-align:center">{{$row->licensekey}}</td>
                                                            <td style="text-align:center">{{$row->created_at}}</td>
                                                            <td>{{$row->Modifireby}}</td>
                                                            <td style="text-align:center;">
                                                                <a href="" style="font-size:16px;padding:3px;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                <a href="" style="font-size:16px;padding:3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                <a href="{{ url('addpermission') }}" style="font-size:16px;padding:3px;"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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