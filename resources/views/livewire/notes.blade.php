
<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="sm:flex justify-between mb-5">
                    <div class="mb-5">
                        <h3 class="text-xl font-weight-bolder text-black"> Top News</h3>
                        <p class="mt-1 text-md text-gray-500">
                          Browse news
                        </p>
                    </div>
                </div>

                <div class="sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    @if(count($notes)>0)
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
                                  <a href="{{route('notes.show',$note->id)}}" class="mx-2 text-center text-md items-center px-8 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">View</a>
                                 @if($note->vote)
                                  <a href="{{route('notes.show',$note->id)}}" class="mx-2 text-md items-center px-10 py-2 bg-red-600 rounded-md font-semibold text-white hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900">Vote</a>
                                @endif
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
                    @else
                        <div class="text-center justify-center items-center mx-auto py-6">
                            <img src="{{asset('assets/img/icons/newspaper.png')}}" alt="Investment-plan" class="w-40 mx-auto">
                            <div class="font-bold text-2xl my-5">No News found</div>
                        </div>

                    @endif


                </div>
            </div>
        </div></div>





</div>
</div>


