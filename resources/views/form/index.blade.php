<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filkom Titip </title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image" href="{{ asset('frontend/assets/img/logo/filkomtitip.ico') }}">
    </head>

    <body>
      <div>
        <div class="py-16 px-4 md:px-6 2xl:px-0 flex justify-center items-center 2xl:mx-auto 2xl:container">

            <div class="flex flex-col justify-center items-center w-full space-y-9">
                <div class="flex justify-center flex-col items-center space-y-2">
                    <button class="flex flex-row items-center text-gray-600 dark:text-white hover:text-gray-500 space-x-1">
                        <svg class="fill-stroke" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91681 7H11.0835" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.91681 7L5.25014 9.33333" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.91681 7.00002L5.25014 4.66669" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a href="{{ route('cart.index') }}"><p class="text-sm leading-none">Back</p></a>
                    </button>
                    <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 dark:text-gray-50" style="color: #333333">Checkout</p>
                </div>
    
                <div class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-3/5">
                  {{-- Form start --}}
                    <form action="{{ route('form.wait') }}" method="get" class="px-8 pb-8 bg-gray-100 dark:bg-gray-800 flex flex-col lg:w-full xl:w-full">
                      
                      <div class="mt-8">
                          <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="" id="" placeholder="No Telp" required/>
                      </div>
  
                      <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Address</label>
                      <div class="mt-2 flex-col">
                          <div>
                              <input class="border rounded-tl rounded-tr border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="" id="" placeholder="Streets, blocks, house number" required/>
                          </div>
                          <div class="flex-row flex">
                              <input class="border rounded-bl border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="" id="" placeholder="City" required/>
                              <input class="border rounded-br border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="" id="" placeholder="Zip Code" required/>
                          </div>
                      </div>
  
                      <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Notes</label>
                      <div class="mt-2 flex-col">
                          <div>
                              <input class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="" id="" placeholder="Black house, beside mosque, etc." />
                          </div>
                      </div>
  
                      <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Shipments</label>
                      <div class="mt-2 flex-col">
                          <div class="relative">
                              <select name="courier_type" class="text-left border rounded-tr rounded-tl border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600 bg-white" aria-label="Default select example" required>
                                  <option disabled selected value="">Select Courier Type</option>
                                  <option value="sameday">Same Day</option>
                                  <option value="reguler">Reguler (1-3 Days)</option>     
                              </select>
                          </div>
                      </div>
  
                      <button class="mt-8 border border-transparent hover:border-gray-300 bg-gray-900 hover:bg-white text-white hover:text-gray-900 flex justify-center items-center py-4 rounded w-full">
                          <div>
                             <a href="{{ route('form.wait') }}"><p class="text-base leading-4">Pay </p></a> 
                          </div>
                      </button>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>