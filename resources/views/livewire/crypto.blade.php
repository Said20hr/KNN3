<div wire:init="loadData">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8" >
                <div class="overflow-hidden">
                    <table class="min-w-full border bg-white ">
                        <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                                Rank
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                                Price
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                                Volume
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-4 py-4 text-left">
                                Change(24Hr)
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Trade
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($crypto)
                            @foreach($crypto as $asset)
                                <tr class="border transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-indigo-900">#{{$asset->rank}}</td>
                                    <td class="text-sm flex items-center px-6 py-4 whitespace-nowrap">
                                        <img class="w-10" src="https://assets.coincap.io/assets/icons/{{strtolower($asset->symbol)}}@2x.png" alt="{{$asset->name}} logo">
                                        <div class="block">
                                            <div class="text-gray-800 font-semibold px-2">{{$asset->name}}</div>
                                            <div class="text-gray-600 font-medium px-2 text-xs">{{$asset->symbol}}</div>
                                        </div>
                                    </td>
                                    <td class="text-lg text-indigo-900 px-4 py-4 font-sans">
                                        {{number_format($asset->priceUsd,2,'.')}} <span class="font-sans">$</span>
                                    </td>
                                    <td class="text-base text-gray-700 px-4 py-4 whitespace-nowrap font-semibold">
                                        <span class="font-bold">$</span>{{number_format($asset->marketCapUsd/1000000000,2,'.') }}b
                                    </td>
                                    <td class="text-base {{$asset->changePercent24Hr < 0 ? 'text-red-500' :'text-emerald-500'}} px-4 py-4 whitespace-nowrap font-semibold">
                                        <i class="fa fa-arrow-up"></i>
                                        {{number_format($asset->changePercent24Hr,2,'.') }}%
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap font-semibold">
                                        <a href="#" class="btn btn-success">Trade</a>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            @for($i=0;$i<=3;$i++)
                                <tr class="border transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-4 py-4">
                                        <div class="bg-gray-200 w-8 h-4 animate-pulse rounded-full"></div>
                                    </td>
                                    <td class="px-6 py-4 w-96">
                                        <div class="flex items-center">
                                            <div class="bg-gray-200 h-12 w-12 animate-pulse rounded-full mb-2"></div>
                                            <div class="ml-2">
                                                <div class="bg-gray-200 h-3 animate-pulse rounded-full w-40 mb-2"></div>
                                                <div class="bg-gray-200 h-2 animate-pulse rounded-full w-24"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="bg-gray-200 w-16 h-4 animate-pulse rounded-full"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="bg-gray-200 w-16 h-4 animate-pulse rounded-full"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="bg-gray-200 w-20 h-4 animate-pulse rounded-full"></div>
                                    </td>
                                    <td class="px-5 py-4">
                                        <div class="bg-gray-200 w-20 h-10 animate-pulse rounded-xl"></div>
                                    </td>
                                </tr>
                            @endfor
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




