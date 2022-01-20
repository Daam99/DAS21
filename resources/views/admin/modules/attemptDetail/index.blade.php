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
                                    <h4 class="page-title">Roles</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">{{ config('app.name', 'DASS21') }}</a>
                                        </li>
                                        <li>
                                            <a href="#">Roles </a>
                                        </li>
                                        <li class="active">
                                            All Roles
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                             @if (session('status'))
                                <div class="alert alert-success" style="margin-bottom: 0px;">
                                    {{ session('status') }}
                                </div>
                                <br>
                            @endif
                            <div class="col-sm-12">
                                <div class="card-box">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                        <th data-priority="1">Name</th>
                                                        <th data-priority="3">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($roles as $role)
                                                    <tr class="gradeX">                                                
                                                        <td>{{$role -> name}}</td>
                                                        <td class="actions">                                               
                                                            <a  href="{{URL::to('/admin/roles')}}/{{$role -> id}}/edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            
                                                            <!-- <a href="">
                                                                <i  onclick="return deleteRole({{$role->id}});" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                            </a>  -->                                                           
                                                        </td>
                                                        <form id="delete-form{{$role->id}}" action="{{url('/admin/roles')}}/{{$role->id}}" method="post">
                                                            {{csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                        </form>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

        


           
</x-admin-app-layout>


        

    