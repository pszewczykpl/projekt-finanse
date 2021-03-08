<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h3>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
          @foreach($paydayloans as $paydayloan)
          <div class="flex flex-wrap -mx-2 overflow-hidden shadow-md rounded border border-opacity-95 p-2 mb-5 items-center">

              
              <div class="my-2 px-2 w-full overflow-hidden md:w-5/6">
                <div class="flex flex-wrap -mx-2 overflow-hidden">

                  <div class="flex flex-wrap my-2 px-2 w-1/2 overflow-hidden md:w-1/4 justify-center md:justify-start">
                    <img class="h-16" src="{{ Storage::url($paydayloan->logo) }}" />
                  </div>
                
                  <div class="my-2 px-2 w-1/2 overflow-hidden md:w-1/4">
                    <div class="flex flex-wrap -mx-1 overflow-hidden">
                      <div class="my-1 w-full overflow-hidden text-center">
                        Kwota pożyczki
                      </div>
                      <div class="w-full overflow-hidden text-center">
                        <span class="font-bold">{{ $paydayloan->amount_min }}zł - {{ $paydayloan->amount_max }}zł</span>
                      </div>
                    </div>
                  </div>
                
                  <div class="my-2 px-2 w-1/2 overflow-hidden md:w-1/4">
                    <div class="flex flex-wrap -mx-1 overflow-hidden">

                      <div class="my-1 w-full overflow-hidden text-center">
                        Okres pożyczki
                      </div>
                    
                      <div class="w-full overflow-hidden text-center">
                        <span class="font-bold">{{ $paydayloan->term }} dni</span>
                      </div>
                    
                    </div>
                  </div>
                
                  <div class="my-2 px-2 w-1/2 overflow-hidden md:w-1/4">
                    <div class="flex flex-wrap -mx-1 overflow-hidden">

                      <div class="my-1 w-full overflow-hidden text-center">
                        RRSO
                      </div>
                    
                      <div class="w-full overflow-hidden text-center">
                        <span class="font-bold">{{ $paydayloan->rrso }}%</span>
                      </div>
                    
                    </div>
                  </div>

                  <div class="px-2 w-full flex flex-wrap overflow-hidden justify-center md:justify-start pt-1">
                    @if($paydayloan->without_bik)
                      <div class="flex justify-center items-center font-medium py-1 px-2 mb-1 bg-white rounded-full text-purple-700 bg-purple-100 border border-purple-200 mr-1">
                        <div class="text-xs font-normal leading-none max-w-full flex-initial">
                            Bez BIK
                        </div>
                      </div>
                    @endif
        
                    @if($paydayloan->payout_15m)
                      <div class="flex justify-center items-center font-medium py-1 px-2 mb-1 bg-white rounded-full text-purple-700 bg-purple-100 border border-purple-200 mr-1">
                        <div class="text-xs font-normal leading-none max-w-full flex-initial">
                            Wypłata w 15 minut
                        </div>
                      </div>
                    @endif
        
                    @if($paydayloan->first_free)
                      <div class="flex justify-center items-center font-medium py-1 px-2 mb-1 bg-white rounded-full text-purple-700 bg-purple-100 border border-purple-200 mr-1">
                        <div class="text-xs font-normal leading-none max-w-full flex-initial">
                            Pierwsza darmowa
                        </div>
                      </div>
                    @endif

                    <a href="{{ route('paydayloans.show', $paydayloan->id) }}">
                      <div class="flex justify-center items-center font-medium py-1 px-2 mb-1 bg-white rounded-full text-gray-700 bg-gray-100 border border-gray-200 mr-1">
                        <div class="text-xs font-normal leading-none max-w-full flex-initial">
                            Pokaż więcej szczegółów
                        </div>
                      </div>
                    </a>

                  </div>
                
                </div>
              </div>
            
              <div class="my-2 px-2 w-full overflow-hidden md:w-1/6">

                <div class="flex flex-wrap -mx-3 overflow-hidden text-center justify-center">

                  <a href="{{ $paydayloan->url_application }}">
                    <button
                      class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-500 rounded-full shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none"
                    >
                      Złóż wniosek
                    </button>
                  </a>
                  </div>
                
                  <div class="px-3 flex w-full overflow-hidden justify-center items-center pt-1">
                    @for($i=0;$i<6;$i++)
                        <svg class="mx-px w-3 h-3 fill-current 
                          @if($i<$paydayloan->rating)
                            text-yellow-500
                          @else
                            text-gray-400
                          @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    @endfor
                    <span class="text-xs pl-1">({{ $paydayloan->votes }} ocen)</span>
                  </div>
                
                </div>


                
              </div>
              @endforeach
            
            </div>
          

        </div>
      </section>

    
</x-app-layout>