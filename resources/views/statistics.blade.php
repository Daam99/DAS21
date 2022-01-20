<x-app-layout>
    <style type="text/css">
        
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attempts') }}
        </h2>
    </x-slot>

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
                        @foreach($scores as $key=>$score)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{++$key}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p>{{$score->depression}}</p>
                                <p>{{$score->depression_result}}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p>{{$score->anxiety}}</p>
                                <p>{{$score->anxiety_result}}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <p>{{$score->stress}}</p>
                                <p>{{$score->stress_result}}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$score->created_at->isoFormat('MMMM Do YYYY')}}
                            </td>                          
                        </tr>
                        @endforeach
                    <!-- More items... -->
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <x-slot name="footer_part">
        <script src="{{ asset('adminAssets/assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript">
            
        </script>
    </x-slot>
</x-app-layout>
