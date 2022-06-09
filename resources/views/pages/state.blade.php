@extends('layouts.layout')

@section('content')
    <main>
      <section class="bg-gradient-to-r from-white via-white to-purple-100">
          <div class="text-center py-12">
              <h1 class="text-5xl my-3 font-semibold text-indigo-900">STATISTICS</h1>
              <h3 class="text-2xl my-3 font-semibold">  Historical performance</h3>
              <p class="text-lg leading-relaxed text-blueGray-400 my-3"> See how investments in loans on Mintos have performed in the past.</p>
          </div>
         <div class="container">
             @livewire('state')
         </div>
        </section>

    </main>
@endsection
