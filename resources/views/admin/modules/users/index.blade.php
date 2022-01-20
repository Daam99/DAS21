<x-admin-app-layout>  
    <x-slot name="title">
        Users
    </x-slot>

    
    <!-- Start content -->
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Users</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">{{ config('app.name', 'DASS21') }}</a>
                            </li>
                            <li>
                                <a href="#">Users </a>
                            </li>
                            <li class="active">
                                All Users
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
                                            <th data-priority="1">id</th>
                                            <th data-priority="2">Name</th>
                                            <th data-priority="3">Email</th>
                                            <th data-priority="4">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($users as $user)
                                        <tr class="gradeX">                         
                                            <td>{{$user -> id}}</td>
                                            <td>{{$user -> name}}</td>
                                            <td>{{$user -> email}}</td>
                                            <td>
                                                @foreach($user -> getRoleNames() as $role)
                                                {{$role}}
                                                @endforeach
                                                <a  href="" data-toggle="modal" data-target=".bs-example-modal-sm{{$user -> id}}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>     
                                        </tr>
                                        <div class="modal fade bs-example-modal-sm{{$user -> id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Change Role</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('changeRole') }}">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{$user -> id}}">
                                                            <label>Select Role</label>
                                                            <select class="form-control" name="role">
                                                                @foreach($roles as $role)
                                                                <option value="{{$role -> name}}">{{$role -> name}}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                            <div style="text-align: right; padding-top: 10px">
                                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
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
    
    <x-slot name="footer_part">
        <script type="text/javascript">
            
        </script>
    </x-slot>           
</x-admin-app-layout>


        

    