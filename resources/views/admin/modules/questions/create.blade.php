<x-admin-app-layout>  
    <x-slot name="title">
        Questions
    </x-slot>    
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Question</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                {{ config('app.name', 'DASS21') }}
                            </li>
                            <li>
                                Questions
                            </li>
                            <li class="active">
                                Add Question
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
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">Create new Question</h4>

                        <form action="{{URL::to('/admin/questions')}}" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 {{$errors->has('statement') ? 'has-error' : ''}}">
                                            <label for="statement">Statement</label>
                                            <input type="text" name="statement" class="form-control" id="statement" placeholder="Enter Statement" @if (count($errors) > 0) value="{{ old('statement') }}" @endif>
                                            @if ($errors->has('statement'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('statement') }}.</li></ul>
                                            @endif
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->

                                </div> <!-- end col -->                              

                            </div> <!-- end row -->
                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                </button>
                                <a href="{{url('/admin/questions')}}" class="btn btn-default waves-effect m-l-5">
                                                Cancel 
                                </a>
                            </div>
                        </form>
                        <!-- end form -->
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->           
</x-admin-app-layout>