<?php if (isset($component)) { $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminAppLayout::class, []); ?>
<?php $component->withName('admin-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>  
     <?php $__env->slot('title'); ?> 
        Answers
     <?php $__env->endSlot(); ?>    
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Create New Answer</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <?php echo e(config('app.name', 'DASS21')); ?>

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
                <?php if(session('status')): ?>
                    <div class="alert alert-success" style="margin-bottom: 0px;">
                        <?php echo e(session('status')); ?>

                    </div>
                    <br>
                <?php endif; ?>
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0">Create new Answer</h4>

                        <form action="<?php echo e(URL::to('/admin/answers')); ?>" method="POST">
                            <?php echo csrf_field(); ?> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 <?php echo e($errors->has('number') ? 'has-error' : ''); ?>">
                                            <label for="number">Number</label>
                                            <input type="text" name="number" class="form-control" id="number" placeholder="Enter Number" <?php if(count($errors) > 0): ?> value="<?php echo e(old('number')); ?>" <?php endif; ?>>
                                            <?php if($errors->has('number')): ?>
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required"><?php echo e($errors->first('number')); ?>.</li></ul>
                                            <?php endif; ?>
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->
                                </div> <!-- end col --> 

                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 <?php echo e($errors->has('text') ? 'has-error' : ''); ?>">
                                            <label for="text">Text</label>
                                            <input type="text" name="text" class="form-control" id="text" placeholder="Enter Text" <?php if(count($errors) > 0): ?> value="<?php echo e(old('text')); ?>" <?php endif; ?>>
                                            <?php if($errors->has('text')): ?>
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required"><?php echo e($errors->first('text')); ?>.</li></ul>
                                            <?php endif; ?>
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="p-20">
                                        <div class="form-group m-b-20 <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                            <label for="name">Name</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name" <?php if(count($errors) > 0): ?> value="<?php echo e(old('name')); ?>" <?php endif; ?>>
                                            <?php if($errors->has('name')): ?>
                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required"><?php echo e($errors->first('name')); ?>.</li></ul>
                                            <?php endif; ?>
                                        </div>                                                
                                    </div>
                                    <!-- end class p-20 -->
                                </div> <!-- end col -->                              

                            </div> <!-- end row -->
                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                </button>
                                <a href="<?php echo e(url('/admin/questions')); ?>" class="btn btn-default waves-effect m-l-5">
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
 <?php if (isset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e)): ?>
<?php $component = $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e; ?>
<?php unset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\DAS21\resources\views/admin/modules/answers/create.blade.php ENDPATH**/ ?>