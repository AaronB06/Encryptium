<?php session_start();
include('../database/mongodb.php');


$totalBonafideRes = $bonafideCollection-> countDocuments();
$totalRequests = $requestsCollection-> countDocuments();
$totalPending = $requestsCollection-> countDocuments(['status' => 'pending']);
$totalDone = $requestsCollection-> countDocuments(['status' => 'done']);
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href= "styles.css">
    <link rel = "stylesheet" href= "C.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  

</head>
<body >

<!--Navbar-->
<nav class="fixed w-full z-20  top-0 start-0  h-40">
<div class='py-2 bg-[#5E6E70] text-white text-center px-10 '>
      <p class='text-sm sample'>Open hours of Barangay Pembo Monday - Friday 8:00 AM - 6:00 PM</p>
    </div>
<header class=' py-4 px-4 sm:px-10 bg-white font-sans min-h-[70px] shadow-md'>
    <div class='flex flex-wrap items-center relative gap-x-4 gap-y-3'>
      <a href="javascript:void(0)"><img src="img/PEMBO -TAGUIG.png" alt="logo" class='h-12' />
      </a>
      <a href="javascript:void(0)"><img src="img/City_of_Taguig_Seal.png" alt="logo" class='h-12' />
      </a>
      <div id="collapseMenu"
        class='lg:!flex lg:flex-auto lg:ml-12 max-lg:hidden max-lg:w-full max-lg:absolute max-lg:top-9 max-sm:top-10 max-lg:bg-white max-lg:p-4 max-lg:mt-6 max-lg:border'>
        <ul class='lg:flex lg:space-x-8 max-lg:space-y-2'>
          
        </ul>
        <ul class='lg:flex lg:items-center  max-lg:block lg:space-x-8 ml-auto'>
        <li class='max-lg:border-b max-lg:py-2'>
            <a href='index.php'
              class='transition-all ease-in-out duration-300 lg:hover:text-white hover:text-white
           bg-Transparent text-gray-600 hover:bg-[#0298AA] block font-bold text-[15px] px-1.5 py-2  hover:rounded-md
           text-sm rounded-sm hover:px-10'>Home</a>
          </li>
        <li class='max-lg:border-b max-lg:py-2 '><a href='about.php'
              class='text-white bg-[#0298AA]  block font-bold text-[15px]  py-2 rounded-md
           text-sm px-10 '>About</a>
          </li>
        <li class='max-lg:border-b max-lg:py-2'><a href='members.php'
              class='transition-all ease-in-out duration-300 lg:hover:text-white hover:text-white
           bg-Transparent text-gray-600 hover:bg-[#0298AA] block font-bold text-[15px] px-1.5 py-2  hover:rounded-md
           text-sm rounded-sm hover:px-10'>Officials</a>
          </li>
        
          <li class='max-lg:border-b max-lg:py-2 max-lg:mt-2'><a href='Contact.php'
              class='transition-all ease-in-out duration-300 lg:hover:text-white hover:text-white 
           bg-Transparent text-gray-600 hover:bg-[#0298AA] hover:rounded-md block font-bold text-[15px] px-1.5  py-2 
           text-sm rounded-sm hover:px-10 '>Contacts</a>
          </li>
        </ul>
      </div>
      <div class="border-l border-[#333] h-6 max-lg:hidden"></div>
      <div class='flex items-center ml-auto'>
        
        <button
          class='px-4 py-2 text-sm rounded-sm font-bold text-white border-2 border-[#0298AA]
           bg-[#0298AA] transition-all ease-in-out duration-300 hover:bg-transparent  hover:text-[#333333]'><a href='../public/user_login.php' >Log
        in</a></button>
        <button id="toggle" class='lg:hidden ml-7'>
          <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>
</nav>
<!--Page Loader-->
<div class="loader"></div>

<!-- component -->
<section class="mt-30 py-8 bg-cover bg-no-repeat overflow-hidden f"  style="background-image: url(img/pembo\ tapat.jpg); ">

            
          
         
</section>





    
   

<!--version-->
<section class="py-12 lg:py-24 bg-gray">
    
<div class="inline-flex items-center justify-center w-full mt-[150px] ">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mono font-bold border-teal-400  dark:text-gray-200">
    Barangay Captain
</h1>
</div>

  <div class="container mx-auto px-4">
    <div class=" pt-16">
      <div class="max-w-lg mx-auto lg:max-w-none">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
            <div class="max-w-xl">
            <h2 class="text-3xl font-extrabold"></h2>
              <p class="text-lg text-black mb-10 ml-20">Kim Abbang started serving the public in 1996 as Kagawad of the Sangguniang Kabataan of Barangay Pembo while finishing his bachelor’s degree in UMak. He worked overseas and in the local government until he was appointed as Punong Barangay in January 2023 and elected in October 2023.</p>

            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div class="lg:max-w-md lg:ml-auto">
              <img class="rounded-3xl w-[350px] h-full" src="img/pembo.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap mb-32 mt-14 -mx-8">
      <div class="w-full lg:w-1/2 px-8 ">
        <img class="rounded-3xl w-[350px] h-[300px] mb-8 object-center ml-20" src="img/tulong.jpg" alt="">
      </div>
      <div class="w-full lg:w-1/2 ">
      
        <p class="text-black text-lg px-10 mr-15">During his leadership, Barangay 
          Pembo received several awards and recognitions from:</p>
          <ul class="ml-5 mt-5">
                <li class="flex items-center  mb-4">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="20" rx="10" fill="#BEF264"></rect>
                    <path d="M14.8 6.40002L8.19995 13L5.19995 10" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <span class="ml-3 text-lg ">The Department of Environment and Natural Resources for actively participating in the awarding of free patents of unregistered lands</span>
                </li>
                <li class="flex items-center mb-4">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="20" rx="10" fill="#BEF264"></rect>
                    <path d="M14.8 6.40002L8.19995 13L5.19995 10" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <span class="ml-3 text-lg"> The Department of Labor and Employment for the Barangay’s involvement in the Technical Advisory Visit Program.</span>
                </li>
                <li class="flex items-center mb-4">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="20" rx="10" fill="#BEF264"></rect>
                    <path d="M14.8 6.40002L8.19995 13L5.19995 10" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <span class="ml-3 text-lg">Barangay Pembo was awarded by the Gawad Kalikasan Awards as the cleanest and greenest barangay in Makati.</span>
                </li>
              </ul>
      </div>
    </div>

    <div class="container mx-auto px-4">
    <div class="">
      <div class="max-w-lg mx-auto lg:max-w-none">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
            <div class="max-w-xl">
            <h2 class="text-3xl font-extrabold">2024 Remarkable Alumni Heron Awardees</h2>
              <p class="text-lg text-gray-700 mb-10">Kap. Abbang partnered with UMak in providing several Gender 
                and Development seminars. He also sought regular assistance from the UMak School of Law – Center 
                for Clinical Legal Education and Legal Aid Services in providing legal assistance to the underprivileged 
                residents of Pembo. He encourages out-of-school youth and other residents of the Barangay to enroll in the
                 technical-vocational, 
                baccalaureate, and graduate programs of the University.</p>

            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div class="lg:max-w-md lg:ml-auto">
              <img class="rounded-3xl w-[350px] h-full" src="img/umak kim abbang.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    
 

</section>
















<!--Back-to-top-->
<button
  type="button"
  data-twe-ripple-init
  data-twe-ripple-color="light"
  class="!fixed bottom-5 end-5 hidden rounded-full bg-[#0298AA] p-3 text-xs font-medium uppercase leading-tight
   text-white shadow-md transition duration-150 ease-in-out hover:bg-cyan-600 hover:shadow-lg 
   focus:bg-cyan-600 focus:shadow-lg focus:outline-none 
  focus:ring-0 active:bg-cyan-600 active:shadow-lg "
  id="btn-back-to-top">
  <span class="[&>svg]:w-4 ">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="3"
      stroke="currentColor">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
    </svg>
  </span>
</button>



<!-- Footer -->
<footer class="font-[sans-serif] bg-[#5E6E70] p-10 mt-5">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-10">
        <div class="xl:col-span-2">
          <a href='javascript:void(0)'><img src="img/PEMBO -TAGUIG.png" alt="logo" class='w-48' /></a>
          <ul class="mt-10 flex space-x-6">
            <li>
              <a href='javascript:void(0)'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="fill-gray-300 hover:fill-white w-6 h-6"
                  viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href='javascript:void(0)'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  class="fill-gray-300 hover:fill-white w-6 h-6" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href='javascript:void(0)'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  class="fill-gray-300 hover:fill-white w-6 h-6" viewBox="0 0 24 24">
                  <path
                    d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z" />
                </svg>
              </a>
            </li>
            <li>
              <a href='javascript:void(0)'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                  class="fill-gray-300 hover:fill-white w-6 h-6" viewBox="0 0 24 24">
                  <path
                    d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-white font-semibold text-lg relative max-sm:cursor-pointer">Services <svg
            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
            class="sm:hidden absolute right-0 top-1 fill-[#d6d6d6]" viewBox="0 0 24 24">
            <path
              d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
              data-name="16" data-original="#000000"></path>
          </svg>
          </h4>
          <ul class="mt-4 space-y-5">
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Barangay Clearance</a>
            </li>
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Barangay Indigency</a>
            </li>
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Barangay Certificate</a>
            </li>
            
            
          </ul>
        </div>
        
        <div>
          <h4 class="text-white font-semibold text-lg relative max-sm:cursor-pointer">Pembo <svg
            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
            class="sm:hidden absolute right-0 top-1 fill-[#d6d6d6]" viewBox="0 0 24 24">
            <path
              d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
              data-name="16" data-original="#000000"></path>
          </svg>
          </h4>
          <ul class="space-y-5 mt-4 max-sm:hidden">
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>About us</a>
            </li>
            <li>
              <a href='#stats' class='hover:text-white text-gray-300 text-sm'>Number of Resident</a>
            </li>
            
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>News and Updates</a>
            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-white font-semibold text-lg relative max-sm:cursor-pointer">Additional <svg
            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
            class="sm:hidden absolute right-0 top-1 fill-[#d6d6d6]" viewBox="0 0 24 24">
            <path
              d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
              data-name="16" data-original="#000000"></path>
          </svg>
          </h4>
          <ul class="space-y-5 mt-4 max-sm:hidden">
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>FAQ</a>
            </li>
            
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Sitemap</a>
            </li>
            <li>
              <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
      <hr class="mt-8 border-gray-300" />
      <div class="md:flex md:item-center mt-8">
        <ul class="md:flex md:space-x-6 max-md:space-y-2">
          <li>
            <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Terms of Service</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Privacy Policy</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='hover:text-white text-gray-300 text-sm'>Security</a>
          </li>
        </ul>
        <p class='text-gray-300 text-sm ml-auto max-md:mt-5'>Copyright © 2023<a href='https://readymadeui.com/'
          target='_blank' class="hover:underline mx-1"> Barangay Pembo</a>All Rights Reserved.</p>
      </div>
    </footer>



    
    <script src="Javas.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <script>
       AOS.init();
    </script>
</body>
</html>