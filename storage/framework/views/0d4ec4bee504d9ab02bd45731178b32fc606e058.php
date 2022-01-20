<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <style type="text/css">
        
    </style>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Attempts')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-7">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> -->
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Depression
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Anxiety
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Stress
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                          </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php echo e(++$key); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p><?php echo e($score->depression); ?></p>
                                <p><?php echo e($score->depression_result); ?></p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p><?php echo e($score->anxiety); ?></p>
                                <p><?php echo e($score->anxiety_result); ?></p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p><?php echo e($score->stress); ?></p>
                                <p><?php echo e($score->stress_result); ?></p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php echo e($score->created_at->isoFormat('MMMM Do YYYY')); ?>

                            </td>                          
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- More items... -->
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
     <?php $__env->slot('footer_part'); ?> 
        <script src="<?php echo e(asset('adminAssets/assets/js/jquery.min.js')); ?>"></script>
        <script type="text/javascript">
            
        </script>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\DAS21\resources\views/statistics.blade.php ENDPATH**/ ?>