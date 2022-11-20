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
                    <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 dark:text-gray-50" style="color: #333333">Waiting for the Payments</p>
                </div>
    
                <div class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-3/5">
                  <div class="px-8 pb-8 bg-gray-100 dark:bg-gray-800 flex flex-col lg:w-full xl:w-full">

                    
                    <div class="mt-4 flex-col space-y-2">
                        
                        <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Kode Pembayaran</label>
                        <div class="bg-white border rounded-tl rounded-tr border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600">80777085211572977                             
                        </div>
                        <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Total Harga</label>
                        <div class="bg-white border rounded-tl rounded-tr border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600">1.500.030                             
                        </div>
                      
                        <button class="flex flex-row items-center text-gray-600 dark:text-white hover:text-gray-500 space-x-1 pt-5">
                          <svg class="fill-stroke" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.91681 7H11.0835" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M2.91681 7L5.25014 9.33333" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M2.91681 7.00002L5.25014 4.66669" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <a href="{{ route('orders.index') }}"><p class="text-sm leading-none">Already Paid</p></a>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>