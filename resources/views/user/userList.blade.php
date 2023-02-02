@extends('layouts.app')
@section('content')

<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange" />
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">User List</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card widget-flat">
                <div class="card-body mh-100">
                    <button class="btn btn-sm outline-success" >New User</button>
                    <div class="float-end">
                        <i class="mdi mdi-account-multiple widget-icon"></i>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <td class="col">#</td>
                                <td class="col">Username</td>
                                <td class="col">Full Name</td>
                                <td class="col ">IC Number</td>
                                <td class="col">Email</td>
                                <td class="col text-center">status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>FirdausRazib</td>
                                <td>Muhammad Firdaus Bin Mohd Razib @ Mohd Razi</td>
                                <td>011206050411</td>
                                <td>firdausrazib06@gmail.com</td>
                                <td class="d-flex justify-content-center"><button class="btn btn-sm btn-warning" >Unactive</button></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>FirdausRazib</td>
                                <td>Muhammad Firdaus Bin Mohd Razib @ Mohd Razi</td>
                                <td>011206050411</td>
                                <td>firdausrazib06@gmail.com</td>
                                <td class="d-flex justify-content-center"><button class="btn btn-sm btn-success">Active</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-0 text-muted">
                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>
        <!-- container -->
    </div>

    @endsection