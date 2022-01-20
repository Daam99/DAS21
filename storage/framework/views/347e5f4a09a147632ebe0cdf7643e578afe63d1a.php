<?php if (isset($component)) { $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminAppLayout::class, []); ?>
<?php $component->withName('admin-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>  
     <?php $__env->slot('title'); ?> 
        Dashboard
     <?php $__env->endSlot(); ?>

    
        <!-- Start content -->
        <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Roles</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#"><?php echo e(config('app.name', 'DASS21')); ?></a>
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
                             <?php if(session('status')): ?>
                                <div class="alert alert-success" style="margin-bottom: 0px;">
                                    <?php echo e(session('status')); ?>

                                </div>
                                <br>
                            <?php endif; ?>
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
                                                     <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="gradeX">                                                
                                                        <td><?php echo e($role -> name); ?></td>
                                                        <td class="actions">                                               
                                                            <a  href="<?php echo e(URL::to('/admin/roles')); ?>/<?php echo e($role -> id); ?>/edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            
                                                            <!-- <a href="">
                                                                <i  onclick="return deleteRole(<?php echo e($role->id); ?>);" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                            </a>  -->                                                           
                                                        </td>
                                                        <form id="delete-form<?php echo e($role->id); ?>" action="<?php echo e(url('/admin/roles')); ?>/<?php echo e($role->id); ?>" method="post">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('DELETE')); ?>

                                                        </form>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

        


           
 <?php if (isset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e)): ?>
<?php $component = $__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e; ?>
<?php unset($__componentOriginal749747b3cad97a84caef38f50f9a7f98dfdbd64e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


        

    <?php /**PATH C:\xampp\htdocs\DAS21\resources\views/admin/modules/roles/index.blade.php ENDPATH**/ ?>