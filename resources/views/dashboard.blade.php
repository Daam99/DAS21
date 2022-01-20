<x-app-layout>
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Questionnaire') }}
        </h2>
    </x-slot>

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
                <form method="POST" action="{{ route('submitAnswers') }}">
                    @csrf
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
                            @foreach($all_questions as $key=>$question)
                            <tr class="tr-custom-height">
                                <td class="first-td">{{++$key}}</td>
                                <td class="td-border statement-td">{{$question->statement}}<input class="statement_id" type="hidden" name="statement_id[]" value="{{$question->id}}"></td>
                                @foreach($all_answers as $key=>$answer)
                                <td class="td-border answer-td">
                                    <!-- <input type="radio" name="rGroup{{$question->id}}" value="{{$answer->id}}"   /> -->
                                    <label class="container">
                                      <input type="radio" class="checkbox"  name="answer{{$question->id}}" value="{{$answer->id}}">
                                      <span class="checkmark"></span>
                                    </label>
                                </td>
                                @endforeach
                                <!-- <td class="td-border answer-td">1</td>
                                <td class="td-border answer-td">2</td>
                                <td class="td-border answer-td">3</td> -->
                            </tr>
                            @endforeach
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
    <x-slot name="footer_part">
        <script src="{{ asset('adminAssets/assets/js/jquery.min.js') }}"></script>
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
                @foreach($all_questions as $key=>$question)
                form_data.append('answer{{$question->id}}', $('input[name="answer{{$question->id}}"]:checked').val());
                
                @endforeach
                $.ajax(
                {
                    url: '{{ route('submitAnswers') }}',
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
                @foreach($all_questions as $key=>$question)
                $('input[name="answer{{$question->id}}"]:checked').attr("checked", false);;
                
                @endforeach
                $('#score_div').hide();
                $('#submit_btn').prop('disabled', true);
            })
            $(".checkbox").change(function() {    
                var condition = true;
                @foreach($all_questions as $key=>$question)
               
                if ($('input[name="answer{{$question->id}}"]').is(":checked")) {
                   // do something
                } else {
                    condition = false;
                }
                @endforeach
                console.log(condition);
                if ( condition ) {
                    $('#submit_btn').prop('disabled', false);
                }
            })
        </script>
    </x-slot>
</x-app-layout>
