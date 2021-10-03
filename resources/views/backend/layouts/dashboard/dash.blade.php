@extends('backend.master')
@section('content')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-warning">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total User</div>
                                    <div class="stat-digit"> {{$user}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Complaint</div>
                                    <div class="stat-digit"> {{$complaint}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-info">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Farming Tips</div>
                                    <div class="stat-digit"> {{$farmingtip}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-success">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Ad</div>
                                    <div class="stat-digit"> {{$advertisement}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>



    
    @endsection



    