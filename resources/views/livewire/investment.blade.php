<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-12">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="sm:flex justify-between mb-5">
                    <div class="mb-5">
                        <h3 class="text-xl font-weight-bolder text-black"> Investment history</h3>
                            <p class="mt-1 text-md text-gray-500">
                                Browse your last Investments
                            </p>
                        </div>
                        <div>
                            <x-jet-button>
                               Request a new Investment
                            </x-jet-button>
                        </div>
                    </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    @if($investissment->count() > 0)
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal text-right bg-white">
                            <thead>
                            <tr class="">
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">#</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Pack</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Amount</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Period</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Profit</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Net profit</th>
                                <th class="text-right px-3 py-3 bg-indigo-500 text-left text-lg font-semibold text-white uppercase">Status</th>
                                <th class="px-5 py-3 bg-indigo-500"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($investissment as $invest)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                        <a href="{{route('investment.show',$invest->id)}}">{{$loop->index+1}}#</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                        <a href="{{route('investment.show',$invest->id)}}">{{$invest->pack->name}}</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap mr-2">   {{number_format($invest->price,0,',','') }} USD</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$invest->created_at->format('Y/m/d')}}  </p>
                                        <p class="text-gray-600 whitespace-no-wrap text-sm">{{$invest->created_at->diffInDays(Carbon\Carbon::now())}} Day </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md text-right">
                                        {{$invest->pack->percent}} %
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap mr-2">   {{number_format($invest->profit,0,',','') }} USD</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        @if($invest->status)
                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Active</span>
                                        </span>
                                        @else
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span class="absolute inset-0 bg-red-600 opacity-50 rounded-full"></span>
                                                <span class="relative">Canceled</span>
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <div class="text-center justify-center items-center mx-auto py-6">
                            <img src="{{asset('assets/img/icons/SVG/Investment-plan.svg')}}" alt="Investment-plan" class="w-40 mx-auto">
                            <div class="font-bold text-2xl my-3">No Investment plan found</div>
                            <div class="font-medium my-3 text-sm">You don't have any investment item so far, Click here to request a new investment</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


