@include('sweetalert::alert')

@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="wrapper-pro">

    <div class="content-inner-all">
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="admin-logo logo-wrap-pro">
                            <a href="#"><img src="admin/img/logo/log.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">list_users</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sparkline13-list shadow-reset">
                                        <div class="sparkline13-hd">
                                            <div class="main-sparkline13-hd">
                                                <h1>List <span class="table-project-n">Users</span> </h1>
                                                <div class="sparkline13-outline-icon">
                                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline13-graph">
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar">
                                                    <select class="form-control">
                                                        <option value="">Export Basic</option>
                                                        <option value="all">Export All</option>
                                                        <option value="selected">Export Selected</option>
                                                    </select>
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="true"></th>
                                                        <th data-field="id">ID</th>
                                                        <th data-field="role_id" data-editable="true">role_id</th>

                                                        <th data-field="name" data-editable="true">Name</th>
                                                        <th data-field="email" data-editable="true">Email</th>
                                                        <th data-field="phone" data-editable="true">Phone</th>
                                                        <th data-field="dateofbirth" data-editable="true">Dateofbirth</th>
                                                        <th data-field="address">address</th>
                                                        <th data-field="created_at">created at</th>
                                                        <th data-field="updated_at">updated at</th>

                                                        <th data-field="action">Action</th>
                                                    </tr>
                                                    </thead>
                                                    @if(Session::has('message'))
                                                        <p style="width: 600px; height: 40px" class="alert alert-info">{{ Session::get('message') }}</p>
                                                    @endif
                                                    @if(Session::has('delete'))
                                                        <p style="width: 600px; height: 20px;  padding: 100px " class="alert alert-info">{{ Session::get('delete') }}
                                                            <button><a href="admin/users/list_users"> cancel</a></button>
                                                            <button> <a href="{{session('alert')}}"></a>Confirm

                                                            </button>
                                                        </p>

                                                    @endif

                                                    <tbody>
                                                    @foreach($listUsers as $key => $users)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{$key +1}}</td>
                                                            <td>
                                                                <?php
                                                                if($users->role_id == 1) {
                                                                    echo "Customer";
                                                                }
                                                                else if ($users->role_id == 0)
                                                                   echo "Manager";
                                                                else
                                                                    echo "staff";
                                                                ?>
                                                            </td>
                                                            <td>{{$users->name}}</td>

                                                            <td>{{$users->email}}</td>

                                                            <td>{{$users->phone}}</td>
                                                            <td>{{$users->dateofbirth}}</td>
                                                            <td>{{$users->address}}</td>
                                                            <td>{{$users->created_at}}</td>
                                                            <td>{{$users->updated_at}}</td>
                                                            <td>
                                                                <a href="{{route('admin.users.edit_users',['id'=>$users->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                                                </a>

                                                                <a href="{{route('admin.users.delete',['id'=>$users->id])}}" class="  btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">{{session('status')}}delete</i>

                                                                </a>

                                                            </td>


                                                        </tr>
                                                    @endforeach

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
        </div>
    </div>
</div>

@endsection



