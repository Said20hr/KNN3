<div>
    <x-slot name="header">
        <div class="flex justify-around max-w-3xl mx-auto">
            <a href="{{route('dashboard')}}" class="py-6 font-semibold text-sm text-gray-800 leading-tight mx-0 border-b-4 border-gray-900">
                {{ __(' Deposit funds') }}
            </a>
            <a href="{{route('dashboard')}}" class="py-6 font-semibold text-sm text-gray-400 leading-tight mx-0">
                {{ __(' Withdraw funds') }}
            </a>
            <a href="{{route('dashboard')}}" class="py-6 font-semibold text-sm text-gray-400 leading-tight mx-0">
                {{ __(' Transaction history') }}
            </a>
            <a href="{{route('dashboard')}}" class="py-6 font-semibold text-sm text-gray-400 leading-tight mx-0">
                {{ __(' Status') }}
            </a>
        </div>
    </x-slot>


    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 pb-12 mt-4">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="sm:flex justify-between mb-5">
                    <div class="mb-5">
                        <h3 class="text-xl font-weight-bolder text-black"> Choose deposit method</h3>
                    </div>
                    <div>
                        <x-jet-button>
                            Request a new Investment
                        </x-jet-button>
                    </div>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                  <div class="my-5">
                      <h3 class="text-xl text-gray-700 font-sans">
                          <i class="fa fa-credit-card"></i>
                          Popular
                      </h3>
                      <div class="flex flex-wrap mt-3">
                          <div class="w-1/4 bg-white py-10 px-6 border rounded-md mr-4 hover:bg-blue-100 active:bg-blue-200 active:ring cursor-pointer flex items-center justify-center">
                              <img src="{{asset('assets/img/icons/paypal.svg')}}" alt="paypal" class="w-24 ">
                          </div>
                          <div class="w-1/4 bg-white py-10 px-6 border rounded-md mr-4 hover:bg-blue-100 active:bg-blue-200 active:ring cursor-pointer flex items-center justify-center">
                              <img src="{{asset('assets/img/icons/visa.svg')}}" alt="visa" class="w-24 ">
                          </div>
                          <div class="w-1/4 bg-white py-10 px-6 border rounded-md mr-4 hover:bg-blue-100 active:bg-blue-200 active:ring cursor-pointer flex items-center justify-center">
                              <img src="{{asset('assets/img/icons/Skrill-Logo.svg')}}" alt="Skrill" class="w-24 ">
                          </div>
                      </div>
                  </div>
                    <div class="my-5">
                        <h3 class="text-xl text-gray-700 font-sans">
                            <i class="fab fa-bitcoin"></i>
                            Crypto</h3>
                        <div class="flex flex-wrap mt-3">
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-indigo-100 active:bg-indigo-200 active:ring cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/btc@2x.png" alt="paypal" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">Bitcoin</h6>
                            </div>
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-indigo-100 active:bg-indigo-200 active:ring cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/eth@2x.png" alt="visa" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">Ethereum</h6>
                            </div>
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-indigo-100 active:bg-indigo-200 active:ring cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/ltc@2x.png" alt="visa" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">Litecoin</h6>
                            </div>
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-blue-100 cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/xrp@2x.png" alt="visa" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">Ripple</h6>
                            </div>
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-blue-100 cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/doge@2x.png" alt="visa" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">Dogecoin</h6>
                            </div>
                            <div class="w-1/4 bg-white p-4 border rounded-md mr-4 hover:bg-blue-100 cursor-pointer mb-4">
                                <img src="https://assets.coincap.io/assets/icons/usdt@2x.png" alt="visa" class="w-10 m-auto">
                                <h6 class="text-lg text-center mt-3">USDT</h6>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
