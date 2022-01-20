<x-admin-app-layout>  
    <x-slot name="title">
        Answers
    </x-slot>    
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Answer</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                {{ config('app.name', 'DASS21') }}
                            </li>
                            <li>
                                Answers
                            </li>
                            <li class="active">
                                Add Answer
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
                        <h4 class="header-title m-t-0">Create new Answer</h4>

                        <form action="{{URL::to('/admin/answers')}}" method="POST">
                            @csrf 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 {{$errors->has('number') ? 'has-error' : ''}}">
                                            <label for="number">Number</label>
                                            <input type="text" name="number" class="form-control" id="number" placeholder="Enter Number" @if (count($errors) > 0) value="{{ old('number') }}" @endif>
                                            @if ($errors->has('number'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('number') }}.</li></ul>
                                            @endif
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->
                                </div> <!-- end col --> 

                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 {{$errors->has('text') ? 'has-error' : ''}}">
                                            <label for="text">Text</label>
                                            <input type="text" name="text" class="form-control" id="text" placeholder="Enter Text" @if (count($errors) > 0) value="{{ old('text') }}" @endif>
                                            @if ($errors->has('text'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('text') }}.</li></ul>
                                            @endif
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 {{$errors->has('name') ? 'has-error' : ''}}">
                                            <label for="name">Name</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name" @if (count($errors) > 0) value="{{ old('name') }}" @endif>
                                            @if ($errors->has('name'))
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}.</li></ul>
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