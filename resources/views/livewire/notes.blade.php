
<x-slot name="header">
    <div class="d-flex flex">
        <a href="{{route('dashboard')}}" class="font-semibold text-lg text-gray-400 leading-tight mx-3">
            {{ __(' الرئيسية') }}
        </a> ·
        <h2 class="font-semibold text-lg text-gray-800 leading-tight mx-3">
            {{ __('الاخبار') }}
        </h2>
    </div>

</x-slot>
<div class="container mx-auto pb-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="sm:flex justify-between mb-5">
                    <div class="mb-5">
                        <h3 class="text-4xl font-weight-bolder text-black mb-5"> اخر الاخبار</h3>
                        <p class="mt-1 text-md text-gray-500">
                            تصفح اخر الاخبار .
                        </p>
                    </div>
                </div>

                <div class="sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                  <div class="grid md:grid-cols-3 text-right gap-6">
                      @foreach($notes as $note)
                          <div class="mx-2 bg-white rounded-5">
                          <!--Card 1-->
                          <div class="max-w-sm rounded overflow-hidden shadow-lg border border-2 rounded-5">
                              @if($note->image != 'filled')
                              <img class="w-full h-72" src="{{asset('storage/notes/'.$note->image)}}" alt="{{$note->title}}">
                              @else
                                  <img class="w-full h-72" src="{{asset('assets/img/gallery/3515462.svg')}}" alt="{{$note->title}}">
                              @endif
                              <div class="px-3 py-4 h-28">
                                  <div class="font-bold text-xl mb-2 text-indigo-900">{{$note->title}}</div>
                                  <p class="text-gray-500 text-base">
                                      {!! \Illuminate\Support\Str::words($note->text,5, ' ...')  !!}
                                  </p>
                              </div>
                              <div class="px-6 pt-4 mb-4 pb-4 text-center">
                                  <a href="{{route('notes.show',$note->id)}}" class="mx-2 text-center text-md items-center px-8 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">مشاهدة</a>
                                 @if($note->vote)
                                  <a href="{{route('notes.show',$note->id)}}" class="mx-2 text-md items-center px-10 py-2 bg-red-600 rounded-md font-semibold text-white hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900">صوت</a>
                                @endif
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
                </div>
            </div>
        </div></div>





</div>
</div>


