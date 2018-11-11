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
                                            <li class="breadcrumb-item"><a href="{{ url('Useraccessright') }}">List of User</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Permission</li>
                                        </ol>
                                    </nav>
                                    <div class="panel-body table-responsive">
                                        <table class="table table-bordered projects" id="datatable-buttons">
                                                <thead>
                                                    <tr style="border-bottom:3pt solid #22d4ae;">
                                                        <th style="width: 1%;text-align:center">ID</th>   
                                                        <th style="text-align:left;white-space: nowrap;overflow: hidden;r" colspan="2">FuncationName</th> 
                                                    </tr>
                                                    @foreach ($mlist[0] as $key=>$val)
                                                    <tr>
                                                        <td style="vertical-align: middle;">{{$val->id}}</td>
                                                        <td style="vertical-align: middle;"> {{ $val->FuncationName }}</td>
                                                        <td>
                                                         <table class="table">
                                                            <tr>
                                                                <td>FuncationName</td>
                                                                <td style="text-align:center">Type</td>
                                                                <td style="text-align:center">Action</td>
                                                            </tr>                                
                                                            @foreach($mlist[1] as $key=>$valsub)   
                                                                @foreach ($valsub as $key=>$vl)
                                                                @if($key==$val->id)                                                                
                                                                    @foreach ($vl as $v) 
                                                                    <tr>
                                                                        <td><i class="{{ $v->IconName }}" style="font-size:8px;"></i> {{$v->FuncationName}}</td> 
                                                                        <td style="text-align:center">1</td>                                                       
                                                                        <td style="text-align:center;">
                                                                            <input type="checkbox">
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach  
                                                                 
                                                                @endif                 
                                                                @endforeach 
                                                            @endforeach
                                                            
                                                         </table>
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