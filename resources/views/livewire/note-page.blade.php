

<x-slot name="header">
    <div class="d-flex flex">
        <a href="{{route('dashboard')}}" class="font-semibold text-lg text-gray-400 leading-tight mx-3">
            {{ __(' الرئيسية') }}
        </a> ·
        <h2 class="font-semibold text-lg text-gray-800 leading-tight mx-3">
            {{ __('الرسائل و الاستفسارات') }}
        </h2>
    </div>

</x-slot>
<div class="container mx-auto">
    <div class="max-w-7xl py-10 lg:px-8  ">

        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="flex justify-between mb-5">
                    <div>
                        <h1 class="text-4xl font-weight-bolder text-black mb-3"> {{$note->title}} </h1>
                        <p class="mt-1 text-md text-gray-500">
                             تاريخ الخبر :     <span class="badge badge-pill badge-success">{{$note->created_at->format(' Y /m /d')}}</span>
                        </p>
                    </div>

                </div>

                <div class="max-w-4xl bg-white-100 border-gray-100 mt-5">
                    @if($note->image != 'filled')
                        <img class="w-full border-2 border-gray-200 object-cover" src="{{asset('storage/notes/'.$note->image)}}" alt="{{$note->title}}">
                    @else
                        <img class="w-full border-2 border-gray-200" src="{{asset('assets/img/gallery/3515462.svg')}}" alt="{{$note->title}}">
                    @endif
                    <div class="container grid">
                        <div class="mt-6 mb-5 py-5 sm:p-6 sm:rounded-lg  ">
                            <!-- Last Name -->
                                <div class="text-xl leading-7 leading-tigh text-gray-600 mt-2">
                                    <p>
                                        {!!  $note->text!!}
                                    </p>
                                </div>
                            </div>

                        @if($note->vote)
                                @if(!$voted)
                                <x-jet-action-message class="mr-3" on="saved">
                                    {{ __('تم ارسال التصويت  .') }}
                                </x-jet-action-message>
                                <form wire:submit.prevent="submit" method="POST"
                                      x-data="{ shown: true, timeout: null }"
                                      x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; refresh= true})"
                                      x-show="shown"
                                      x-transition:leave.opacity.duration.1500ms
                                      style="display: none;">
                                <div class="mb-3 border-gray-400 border py-3 px-4 sm:rounded-lg">
                                    <x-jet-label for="vote" value="{{ __('التصويت ') }}" />
                                    <div class="text-lg  text-gray-600 mt-4">
                                        <div class="flex mt-3 gap-6">
                                            <div class="custom-control custom-radio mb-3 mx-5">
                                                <input wire:model="vote" type="radio" id="customRadio1" class="custom-control-input mx-5" value="on">
                                                <label class="custom-control-label px-2" for="customRadio1">موافق</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-5">
                                                <input wire:model="vote" type="radio" id="customRadio2" class="custom-control-input mx-5" value="off">
                                                <label class="custom-control-label px-2" for="customRadio2"> غير مواقف </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 my-4">
                                        <x-jet-button >
                                            {{ __('ارسل') }}
                                        </x-jet-button>
                                    </div>
                                </div>
                            </form>

                            @else
                                <div class="mb-3 bg-gray-100 py-5 px-4 sm:rounded-lg text-red-600 border border-2">
                                    <div class="max-w-7xl text-lg leading-tigh text-red-500 mt-1 font-semibold">
                                        <x-jet-label for="vote" value="{{ __('نتائج التصويت ') }}" />
                                        <div class="text-lg py-6">
                                          <span class="text-gray-900"> تصويتك كان :</span>
                                            @switch($voted->vote)
                                                @case(1)
                                                    <span class="text-green-600">موافق</span>
                                                @break
                                                @case(0)
                                                     <span class="text-red-600">غير موافق</span>
                                                @break
                                            @endswitch
                                        </div>
                                        <div class="w-full bg-grey-light my-5 border border-2 border-indigo-600 border-r rounded">
                                            <div class="bg-indigo-600 text-xs leading-none py-2 text-center text-gray-900 border border-gray-300" style="width:  {{$percent*100/$total}}%">
                                                  {{$percent*100/$total}}% @if($percent*100/$total >0 ){{"موافقين"}} @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        <div class="col-md-2 my-4">
                            <a href="{{route('notes')}}"
                               class="text-center inline-flex items-center
                            px-6 py-2 bg-green-500 border border-transparent rounded-md font-semibold
                             text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                             focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-text-center
                              inline-flex items-center px-6 py-2 bg-green-500 border border-transparent rounded-md
                               font-semibold  text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                               focus:border-gray-900
                            focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                {{ __('العودة') }}
                            </a>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div></div>
</div>
</div>




