@extends('layouts.app')

@section('content')
    <div class="panel-header bg-secondary-gradient">
        <div class="page-inner py-5">
           <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
               <div>
                   <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                   <h5 class="text-white op-7 mb-2">Data Statistik Sementara!</h5>
               </div>
           </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row">
                <div class="col-md-4  col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-user text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Users</p>
                                        <h4 class="card-title">{{10}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-user text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Outlet</p>
                                        <h4 class="card-title">{{10}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-user text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Outlet</p>
                                        <h4 class="card-title">{{10}}</h4>
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
