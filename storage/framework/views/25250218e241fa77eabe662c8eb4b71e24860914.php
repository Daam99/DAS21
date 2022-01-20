<?php if (isset($component)) { $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminAppLayout::class, []); ?>
<?php $component->withName('admin-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>  
     <?php $__env->slot('title'); ?> 
        Questions
     <?php $__env->endSlot(); ?>

    
        <!-- Start content -->
        <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Question</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            DAS21
                                        </li>
                                        <li>
                                            Question
                                        </li>
                                        <li class="active">
                                            Edit Question
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
                                    <h4 class="header-title m-t-0">Edit Question</h4>

                                    <form action="<?php echo e(URL::to('/admin/questions')); ?>/<?php echo e($question->id); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('PUT')); ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <div class="form-group m-b-20 <?php echo e($errors->has('statement') ? 'has-error' : ''); ?>">
                                                        <label for="statement">Statement</label>
                                                        <input type="text" name="statement" class="form-control" id="statement" placeholder="Enter statement" <?php if(count($errors) > 0): ?> value="<?php echo e(old('statement')); ?>" <?php else: ?> value="<?php echo e($question->statement); ?>" <?php endif; ?> >
                                                        <?php if($errors->has('statement')): ?>
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required"><?php echo e($errors->first('statement')); ?>.</li></ul>
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

                </div>

        


           
 <?php if (isset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e)): ?>
<?php $component = $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e; ?>
<?php unset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


        

    <?php /**PATH C:\xampp\htdocs\DAS21\resources\views/admin/modules/questions/edit.blade.php ENDPATH**/ ?>