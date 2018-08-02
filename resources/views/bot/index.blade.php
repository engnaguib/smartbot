@extends('layout')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{url('/')}}">Home</a>
                    </li>

                    <li>
                        <a href="#">Bot</a>
                    </li>
                    <li class="active"></li>
                </ul><!-- /.breadcrumb -->

            </div>

            <div class="page-content">

                <div class="page-header">
                    <h1>
                        Accounts
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">

                        <div class="row">
                            <div class="col-xs-12">
                                @if(Session::has('success'))
                                <div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>
                                    Done

                                </div>
                                @endif
                                    @if(Session::has('error'))
                                        <div class="alert alert-block alert-success">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>

                                            <i class="ace-icon fa fa-check red"></i>
                                            Try again

                                        </div>
                                    @endif




                                    <div class="table-header">
                                    Results for "Latest Accounts"
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Message</th>
                                            <th>Response</th>
                                            <th>edit</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($all as $item)
                                            <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                            <td>{{$item->message}}</td>
                                            <td>{{$item->response}}</td>
                                                <td><a href="/botbackend/Bot/edit/{{$item->id}}">edit</a> </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    @stop