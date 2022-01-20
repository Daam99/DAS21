<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <style type="text/css">
        .td-border{
            border: 1px solid black;
        }
        .tr-custom-height{
            border: 1px solid black;
        }
        .first-td{
            border-left: 1px solid white;
            border-top: 1px solid white;
            border-bottom: 1px solid white;
        }
        .answer-td{
            width: 30px;
            text-align: center;
            cursor: pointer;
        }
        .statement-td{
            padding-left: 10px;
        }
        /* The container */
        .container {
            /*display: block;*/
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 4px;
            left: 4px;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Questionnaire')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-7">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> -->
                <div class="p-6 bg-white border-b border-gray-200" style="font-size: 13px;">
                    <p>Please read each statement and circle a number 0, 1, 2 or 3 which indicates how much the statement applied to you 
                    over the past week. There are no right or wrong answers. Do not spend too much time on any statement.</p>
                    
                    <p>The rating scale is as follows:</p>
                    <p>0 Did not apply to me at all - NEVER</p>
                    <p>1 Applied to me to some degree, or some of the time - SOMETIMES</p>
                    <p>2 Applied to me to a considerable degree, or a good part of time - OFTEN</p>
                    <p>3 Applied to me very much, or most of the time - ALMOST ALWAYS</p>
                </div>
                <form method="POST" action="<?php echo e(route('submitAnswers')); ?>">
                    <?php echo csrf_field(); ?>
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                        <!-- <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr> -->
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td></td>
                                <td></td>
                                <td>N</td>
                                <td>S</td>
                                <td>O</td>
                                <td>AA</td>
                            </tr>
                            <?php $__currentLoopData = $all_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="tr-custom-height">
                                <td class="first-td"><?php echo e(++$key); ?></td>
                                <td class="td-border statement-td"><?php echo e($question->statement); ?><input class="statement_id" type="hidden" name="statement_id[]" value="<?php echo e($question->id); ?>"></td>
                                <?php $__currentLoopData = $all_answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="td-border answer-td">
                                    <!-- <input type="radio" name="rGroup<?php echo e($question->id); ?>" value="<?php echo e($answer->id); ?>"   /> -->
                                    <label class="container">
                                      <input type="radio" class="checkbox"  name="answer<?php echo e($question->id); ?>" value="<?php echo e($answer->id); ?>">
                                      <span class="checkmark"></span>
                                    </label>
                                </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <td class="td-border answer-td">1</td>
                                <td class="td-border answer-td">2</td>
                                <td class="td-border answer-td">3</td> -->
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- <tr class="tr-custom-height">
                                <td class="first-td">2</td>
                                <td class="td-border">I was aware of dryness of my mouth</td>
                                <td class="td-border">0</td>
                                <td class="td-border">1</td>
                                <td class="td-border">2</td>
                                <td class="td-border">3</td>
                            </tr>
                            <tr>
                                <td class="first-td">3</td>
                                <td class="td-border">I couldn’t seem to experience any positive feeling at all</td>
                                <td class="td-border">0</td>
                                <td class="td-border">1</td>
                                <td class="td-border">2</td>
                                <td class="td-border">3</td>
                            </tr> -->
                        </tbody>
                    </table>
                    
                </form>
                <div style="text-align: right;">
                    <button disabled="true"  id="submit_btn" class="my-6 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
                    <button  id="reset_btn" class="my-6 inline-flex items-center px-4 py-2 bg-red-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Reset</button>
                </div>
                
            </div>
            <div class="pl-12 pb-16 bg-white border-b border-gray-200" id="score_div" style="display: none;">
                <p>Depression Score = <b id="depression_score"></b>. This is a <span id="depression_result"></span> level.</p>

                <p>Anxiety Score = <b id="anxiety_score"></b>. This is a <span id="anxiety_result"></span> level.</p>

                <p>Stress Score = <b id="stress_score"></b>. This is a <span id="stress_result"></span> level.</p>
            </div>
        </div>
    </div>
     <?php $__env->slot('footer_part'); ?> 
        <script src="<?php echo e(asset('adminAssets/assets/js/jquery.min.js')); ?>"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit_btn').click(function(){
                $('#score_div').hide();
                var statement_id = $('input[name="statement_id[]').map(function(){return $(this).val();}).get();
                var form_data = new FormData();
                form_data.append('statement_id', statement_id);
                <?php $__currentLoopData = $all_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                form_data.append('answer<?php echo e($question->id); ?>', $('input[name="answer<?php echo e($question->id); ?>"]:checked').val());
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                $.ajax(
                {
                    url: '<?php echo e(route('submitAnswers')); ?>',
                    type: 'post',  
                    dataType: 'json',
                    contentType: false,
                    processData: false,            
                    data: form_data,
                    success: function(response){
                        console.log(response)
                            $('#depression_score').html(response.depression);
                            $('#anxiety_score').html(response.anxiety);
                            $('#stress_score').html(response.stress);
                            $('#depression_result').html(response.depression_result);
                            $('#anxiety_result').html(response.anxiety_result);
                            $('#stress_result').html(response.stress_result);
                            $('#score_div').show();
                            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
                                                 
                    },
                });
            });
            $('#reset_btn').click(function(){
                <?php $__currentLoopData = $all_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                $('input[name="answer<?php echo e($question->id); ?>"]:checked').attr("checked", false);;
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                $('#score_div').hide();
                $('#submit_btn').prop('disabled', true);
            })
            $(".checkbox").change(function() {    
                var condition = true;
                <?php $__currentLoopData = $all_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                if ($('input[name="answer<?php echo e($question->id); ?>"]').is(":checked")) {
                   // do something
                } else {
                    condition = false;
                }
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                console.log(condition);
                if ( condition ) {
                    $('#submit_btn').prop('disabled', false);
                }
            })
        </script>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\DAS21\resources\views/dashboard.blade.php ENDPATH**/ ?>