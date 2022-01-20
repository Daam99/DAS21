<x-admin-app-layout>  
    <x-slot name="title">
        Dashboard
    </x-slot>

    
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
					<div class="col-xs-12">
						<div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">{{ config('app.name', 'DASS21') }}</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="active">
                                    Dashboard
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
					</div>
				</div>
                <!-- end row -->

                <div class="row text-center">

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Attempts</p>
                                <h2 class="text-danger"><span data-plugin="counterup">{{$total_attempts}}</span></h2>
                                <!-- <p class="text-muted m-0"><b>Last:</b> 30.4k</p> -->
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Students</p>
                                <h2 class="text-dark"><span data-plugin="counterup">{{$total_students}}</span> </h2>
                                <!-- <p class="text-muted m-0"><b>Last:</b> 1250</p> -->
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Users</p>
                                <h2 class="text-success"><span data-plugin="counterup">{{$total_users}}</span></h2>
                                <!-- <p class="text-muted m-0"><b>Last:</b> 40.33k</p> -->
                            </div>
                        </div>
                    </div><!-- end col -->

                    <!-- <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Request Per Minute</p>
                                <h2 class="text-warning"><span data-plugin="counterup">652</span> </h2>
                                <p class="text-muted m-0"><b>Last:</b> 956</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Users</p>
                                <h2 class="text-primary"><span data-plugin="counterup">3245</span> </h2>
                                <p class="text-muted m-0"><b>Last:</b> 20k</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">New Downloads</p>
                                <h2 class="text-danger"><span data-plugin="counterup">78541</span> </h2>
                                <p class="text-muted m-0"><b>Last:</b> 50k</p>
                            </div>
                        </div>
                    </div> -->

                </div>
                <!-- end row -->


                




            </div> <!-- container -->

        </div> <!-- content -->

        


           
</x-admin-app-layout>


        

    