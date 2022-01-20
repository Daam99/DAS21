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
                        <h4 class="page-title">Questions</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">{{ config('app.name', 'DASS21') }}</a>
                            </li>
                            <li>
                                <a href="#">Questions </a>
                            </li>
                            <li class="active">
                                All Questions
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
                                            <th data-priority="1">ID</th>
                                            <th data-priority="2">Statement</th>
                                            <th data-priority="3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($questions as $question)
                                        <tr class="gradeX">                                                
                                            <td>{{$question -> id}}</td>
                                            <td>{{$question -> statement}}</td>
                                            <td class="actions">                                               
                                                <a  href="{{URL::to('/admin/questions')}}/{{$question -> id}}/edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                
                                                <a href="">
                                                    <i  onclick="return deleteQuestion({{$question->id}});" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                </a>                                                            
                                            </td>
                                            <form id="delete-form{{$question->id}}" action="{{url('/admin/questions')}}/{{$question->id}}" method="post">
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
    <x-slot name="footer_part">
        <script type="text/javascript">
            var deleteQuestion = function(id){
            if (confirm('Are you sure you want to delete this?')) {
                event.preventDefault();
                document.getElementById('delete-form'+id).submit(); 
                }           
            }
        </script>
    </x-slot>           
</x-admin-app-layout>


        

    