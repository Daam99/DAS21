<x-admin-app-layout>  
    <x-slot name="title">
        Attempts
    </x-slot>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="
https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    
    <!-- Start content -->
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Attempts</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">{{ config('app.name', 'DASS21') }}</a>
                            </li>
                            <li>
                                <a href="#">Attempts </a>
                            </li>
                            <li class="active">
                                All Attempts
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
                                <table id="tech-companies-1" class="table  table-striped display nowrap"  class="">
                                    <thead>
                                        <tr>
                                            <th data-priority="1">id</th>
                                            <th data-priority="1">Student</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="1">Depression</th>
                                            <th data-priority="1">Anxiety</th>
                                            <th data-priority="1">Stress</th>
                                            <th data-priority="1">Date</th>
                                            <!-- <th data-priority="3">Actions</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($attempts as $attempt)
                                        <tr class="gradeX">                                                
                                            <td>{{$attempt -> id}}</td>
                                            <td>{{$attempt->user->name}}</td>
                                            <td>{{$attempt->user->email}}</td>
                                            <td><p>{{$attempt->score->depression}}</p>
                                                <p>{{$attempt->score->depression_result}}</p>
                                            </td>
                                            <td><p>{{$attempt->score->anxiety}}</p>
                                                <p>{{$attempt->score->anxiety_result}}</p>
                                            </td>
                                            <td><p>{{$attempt->score->stress}}</p>
                                                <p>{{$attempt->score->stress_result}}</p>
                                            </td>
                                            <td>{{$attempt->created_at->isoFormat('MMMM Do YYYY')}}</td>
                                            <!-- <td class="actions">                                               
                                                <a  href="{{URL::to('/admin/attempts')}}/{{$attempt -> id}}/edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                
                                                <a href="">
                                                    <i  onclick="return deleteAttempt({{$attempt->id}});" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                </a>                                                            
                                            </td> -->
                                            <!-- <form id="delete-form{{$attempt->id}}" action="{{url('/admin/attempts')}}/{{$attempt->id}}" method="post">
                                                {{csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th data-priority="1">id</th>
                                            <th data-priority="1">Student</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="1">Depression</th>
                                            <th data-priority="1">Anxiety</th>
                                            <th data-priority="1">Stress</th>
                                            <th data-priority="1">Date</th>
                                        </tr>
                                    </tfoot>
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
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
        <script type="text/javascript">
            var deleteattempt = function(id){
            if (confirm('Are you sure you want to delete this?')) {
                event.preventDefault();
                document.getElementById('delete-form'+id).submit(); 
                }           
            }
            $(document).ready(function() {
                $('#tech-companies-1').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'pdf'
                    ]
                } );
            } );
        </script>
    </x-slot>           
</x-admin-app-layout>