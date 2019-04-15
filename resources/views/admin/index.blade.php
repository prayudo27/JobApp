@extends('admin.masterApp') 
@section('content')
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-menu a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    /* .dropdown:hover .dropdown-menu {
        display: block;
    } */
</style>
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List User Unread</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">CV</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($admin as $admin) @foreach ($admin->resume as $resumes)
                            <tr>
                                <td>{!! $admin->name!!}</td>
                                <td>{!! $admin->email!!}</td>
                                @if ($admin->status==1)
                                <td>Ready</td>
                                @else
                                <td>Not Ready</td>
                                @endif
                                <td>
                                    <div class="dropdown">
                                        <div class="dropdown-trigger">
                                            <button type="button" class="button" data-toggle="dropdown" aria-haspopup="true" aria-controls="dropdown-menu">
                                            <span>Status CV</span>
                                            <span class="icon is-small">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                    </button>
                                            <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-content">

                                                    <a class="dropdown-item" href="{{route('adminAccept',$admin->id )}}">Accept</a>
                                                    <a class="dropdown-item" href="{{route('adminUnread',$admin->id )}}">Unread</a>
                                                    <a class="dropdown-item" href="{{route('adminReject',$admin->id )}}">Reject</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form method="" action="#">
                                        {{ csrf_field() }} {{method_field('DELETE')}}
                                        <a href="{{url('adminShow',$admin->id)}}" class="btn btn-success btn-sm">View</a>


                                        <a href="{{asset($resumes->file)}}" class="btn btn-primary btn-sm">Download CV</a>


                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection