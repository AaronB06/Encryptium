<?php session_start();
include('./database/mongodb.php');


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
              class='text-white bg-[#0298AA]  block font-bold text-[15px]  py-2 rounded-md
           text-sm px-10'>Home</a>
          </li>
        <li class='max-lg:border-b max-lg:py-2 '><a href='about.php'
              class='transition-all ease-in-out duration-300 lg:hover:text-white hover:text-white
               bg-Transparent text-gray-600 hover:bg-[#0298AA]  block font-bold text-[15px] px-1.5 py-2 hover:rounded-md
           text-sm hover:px-10 '>About</a>
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
<section class="mt-30 py-8 bg-cover bg-no-repeat overflow-hidden  f"  style="background-image: url(img/pembo\ tapat.jpg); ">
<div class="relative">
    <div class="relative container px-4 mx-auto">
      <div class="max-w-3xl mt-40">
        <div class="pl-8 md:pl-12 lg:pl-24 border-l-2 border-gray-700 mb-16 text-[#5E6E70]">
          <h1 class="font-heading  xs:text-6xl md:text-4xl xl:text-6xl font-bold text-slate-50 mb-8 sm:mb-14">
            <span class>Welcome to the Official website</span>
            <span class="font-serif italic"><br>Barangay Pembo</br></span>
          </h1>
        </div>
        <div class="lg:flex mb-20 items-center">
          <div class="max-w-md mb-12 lg:mb-0 lg:mr-8">
            <p class="text-xl font-semibold text-white">Pembo used to be a military reservation
               of the elite Armed Forces of the Philippines cracked unit, 
               the First Ranger Regiment code – named “PANTHERS”. 
              The word “Pembo” only military is an acronym for PANTHERS ENLISTED MEN’S BARRIO.</p>
          </div>
          <div>
            
           
                <a class="inline-flex py-4 px-6 items-center text-sm text-[#1d294f] hover:text-white  font-semibold bg-white border-2 border-[#5E6E70] hover:border-[#0298AA]  rounded-full transition duration-200 hover:bg-[#0298AA]" href="about.php">
                <span class="mr-4">Learn More</span>
              <span>
                <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.83 5.28999L2.59 1.04999C2.49704 0.956266 2.38644 0.881872 2.26458 0.831103C2.14272 0.780334 2.01202 0.754196 1.88 0.754196C1.74799 0.754196 1.61729 0.780334 1.49543 0.831103C1.37357 0.881872 1.26297 0.956266 1.17 1.04999C0.983753 1.23736 0.879211 1.49081 0.879211 1.75499C0.879211 2.01918 0.983753 2.27263 1.17 2.45999L4.71 5.99999L1.17 9.53999C0.983753 9.72736 0.879211 9.98081 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.70999C6.92373 6.61703 6.99813 6.50643 7.04889 6.38457C7.09966 6.26271 7.1258 6.13201 7.1258 5.99999C7.1258 5.86798 7.09966 5.73728 7.04889 5.61542C6.99813 5.49356 6.92373 5.38296 6.83 5.28999Z" fill="currentColor"></path>
                </svg>
              </span>
            
              </a>
            
          
         
</section>



<!--Statistics-->
<section id="stat">
<div class="inline-flex items-center justify-center w-full mt-[150px] ">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mono font-bold border-teal-400  dark:text-gray-200">
    Statistics
</h1>
</div>
<section class="text-gray-700 body-font  ">
  <div class="container px-5 py-24 mx-auto ">
   
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900 align-middle justify-center">
          <span class="flex justify-center align-middle tabular-nums text-black text-3xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:<?php echo $totalBonafideRes ?>]'">
                            <span class=" text-black supports-[counter-set]:sr-only"><?php echo $totalBonafideRes ?></span>
                        </span>

          </h2>
          <p class="leading-relaxed">Total Resisdents</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
        <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
        fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  
        <path d="M14 3v4a1 1 0 0 0 1 1h4" />  <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />  
        <line x1="3" y1="12" x2="21" y2="12" />  <line x1="6" y1="16" x2="6" y2="18" />  
        <line x1="10" y1="16" x2="10" y2="22" />  
        <line x1="14" y1="16" x2="14" y2="18" />  <line x1="18" y1="16" x2="18" y2="20" /></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900 align-middle justify-center">
          <span class="flex justify-center align-middle tabular-nums text-black text-3xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:<?php echo $totalRequests ?>]'">
                            <span class=" text-black supports-[counter-set]:sr-only"><?php echo $totalRequests ?></span>
                        </span>

          </h2>
          <p class="leading-relaxed">Total Requests</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
        <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/>
</svg>

          <h2 class="title-font font-medium text-3xl text-gray-900 align-middle justify-center">
          <span class="flex justify-center align-middle tabular-nums text-black text-3xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:<?php echo $totalPending ?>]'">
                            <span class=" text-black supports-[counter-set]:sr-only"><?php echo $totalPending ?></span>
                        </span>

          </h2>
          <p class="leading-relaxed">Total Pending</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
        <svg class="text-indigo-500 w-12 h-12 mb-3 inline-block"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none"
          d="M0 0h24v24H0z"/>  <path d="M14 3v4a1 1 0 0 0 1 1h4" />  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />  
        <path d="M9 15l2 2l4 -4" /></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900 align-middle justify-center">
          <span class="flex justify-center align-middle tabular-nums text-black text-3xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:<?php echo $totalDone ?>]'">
                            <span class=" text-black supports-[counter-set]:sr-only"><?php echo $totalDone ?></span>
                        </span>

          </h2>
          <p class="leading-relaxed">Total Done</p>
        </div>
      </div>
    </div>
  </div>
</section>



    <!--version2
<div class="container my-24 mx-auto md:px-6">
  
  <section class="mb-32 text-center">
  <div class="inline-flex items-center justify-center w-full mb-7">
  <h2 class="text-3xl font-extrabold underline decoration-[#0298AA] decoration-4 underline-offset-8 mb-10 ">General Information</h2>
</div>
    <div class="grid lg:grid-cols-3 lg:gap-x-12" >
      <div class="mb-16 lg:mb-0" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div
          class="block h-full rounded-lg bg-[#0298AA] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 border-2 border-black">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md border-2 border-black">
            <svg class="h-10 w-10 text-slate-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
</svg>
            </div>
          </div>
          <div class="p-6 ">
            <h3 class="mb-4 text-2xl font-bold text-primary  justify-center flex ">
            <span class="flex tabular-nums text-white text-5xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:48]'">
                            <span class=" text-white supports-[counter-set]:sr-only">48</span>K+
                        </span>
            </h3>
            <h5 class="mb-4 text-lg font-medium text-white">Barangay Population</h5>
          </div>
        </div>
      </div>

      <div class="mb-16 lg:mb-0" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div
          class="block h-full rounded-lg bg-[#0298AA] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 border-2 border-black">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md  border-2 border-black">
            <svg class="h-10 w-10 text-slate-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18.9 7a8 8 0 0 1 1.1 5v1a6 6 0 0 0 .8 3" />  <path d="M8 11a4 4 0 0 1 8 0v1a10 10 0 0 0 2 6" />  <path d="M12 11v2a14 14 0 0 0 2.5 8" />  <path d="M8 15a18 18 0 0 0 1.8 6" />  <path d="M4.9 19a22 22 0 0 1 -.9 -7v-1a8 8 0 0 1 12 -6.95" /></svg>
            </div>
          </div>
          <div class="p-6">
            <h3 class="mb-4 text-2xl font-bold text-primary  flex justify-center">
            <span class="flex tabular-nums text-white text-5xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:<?php echo $totalBonafideRes ?>]'">
                            <span class=" text-white supports-[counter-set]:sr-only"><?php echo $totalBonafideRes ?></span>
                        </span>
            </h3>
            <h5 class="mb-4 text-lg font-medium text-white">Number of Registered Voter</h5>
            <p class="text-neutral-500 dark:text-neutral-300">
            </p>
          </div>
        </div>
      </div>

      <div class="mb-16 lg:mb-0" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div
          class="block h-full rounded-lg bg-[#0298AA] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700  border-2 border-black">
          <div class="flex justify-center">
            <div class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md border-2 border-black">
            <svg class="h-10 w-10 text-slate-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" 
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
            <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="18" y1="6" x2="18" y2="6.01" />  
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />  
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />  
            <line x1="9" y1="4" x2="9" y2="17" />  
            <line x1="15" y1="15" x2="15" y2="20" /></svg>
            </div>
          </div>
          <div class="p-6">
            <h3 class="mb-4 text-2xl font-bold text-primary  flex justify-center">
            <span class="flex tabular-nums text-white text-5xl text-center font-extrabold mb-2 transition-[_--num] duration-[3s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:14]'">
                            <span class=" text-white supports-[counter-set]:sr-only">14</span>
                        </span>
            </h3>
            <h5 class="mb-4 text-lg font-medium text-white">Number of Zones</h5>
            <p class="text-neutral-500 dark:text-neutral-300">
              
            </p>
          </div>
        </div>
      </div>l
    </div>
  </section>
</div> -->


    
   
</section><!--End-->
<!--version-->


<section class="py-12 lg:py-24 bg-gray">

<div class=" font-[sans-serif] text-black ">
<div class="inline-flex items-center justify-center w-full mt-[150px] ">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mono font-bold border-teal-400  dark:text-gray-200">
    Punong Barangay
</h1>
</div>
            <div class="text-center max-w-xl mx-auto mb-12">
              
            
                 </div>
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 items-center gap-8 max-w-4xl">
                  
                    <div class="mx-auto">
                    
                        <img src='img/KAP K PIC.JPG' class="w-[350px] up rounded-lg shadow-[-20px_20px_0px_rgba(23,219,220,1)]" />
                    </div>
                    
                    <div>
                    
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-[#0298AA] inline rotate-180" viewBox="0 0 475.082 475.081">
                            <path d="M164.454 36.547H54.818c-15.229 0-28.171 5.33-38.832 15.987C5.33 63.193 0 76.135 0 91.365v109.632c0 15.229 5.327 28.169 15.986 38.826 10.66 10.656 23.606 15.988 38.832 15.988h63.953c7.611 0 14.084 2.666 19.414 7.994 5.33 5.325 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.413 51.675-14.275 14.271-31.499 21.409-51.678 21.409h-18.27c-4.952 0-9.233 1.813-12.851 5.427-3.615 3.614-5.424 7.898-5.424 12.847v36.549c0 4.941 1.809 9.233 5.424 12.848 3.621 3.613 7.898 5.427 12.851 5.427h18.271c19.797 0 38.688-3.86 56.676-11.566 17.987-7.707 33.546-18.131 46.68-31.265 13.131-13.135 23.553-28.691 31.261-46.679 7.707-17.987 11.562-36.877 11.562-56.671V91.361c0-15.23-5.33-28.171-15.987-38.828s-23.602-15.986-38.827-15.986zm294.635 15.987c-10.656-10.657-23.599-15.987-38.828-15.987H310.629c-15.229 0-28.171 5.33-38.828 15.987-10.656 10.66-15.984 23.601-15.984 38.831v109.632c0 15.229 5.328 28.169 15.984 38.826 10.657 10.656 23.6 15.988 38.828 15.988h63.953c7.611 0 14.089 2.666 19.418 7.994 5.324 5.328 7.994 11.8 7.994 19.417v9.131c0 20.177-7.139 37.397-21.416 51.675-14.274 14.271-31.494 21.409-51.675 21.409h-18.274c-4.948 0-9.233 1.813-12.847 5.427-3.617 3.614-5.428 7.898-5.428 12.847v36.549c0 4.941 1.811 9.233 5.428 12.848 3.613 3.613 7.898 5.427 12.847 5.427h18.274c19.794 0 38.684-3.86 56.674-11.566 17.984-7.707 33.541-18.131 46.676-31.265 13.134-13.135 23.562-28.695 31.265-46.679 7.706-17.983 11.563-36.877 11.563-56.671V91.361c-.003-15.23-5.328-28.171-15.992-38.827z" data-original="#000000"></path>
                        </svg>
                        <p class="text-lg mt-6 leading-relaxed text-black">Maraming Salamat po sa patuloy ninyong pagtitiwala. Sama-sama po tayo tungo sa isang "Makulay, Mabuhay sa isang Masaya at Nagkakaisang Barangay Pembo".</p>
                        <div class="mt-6">
                            <p class="text-xl font-semibold">Hon. Kim M. Abbang</p>
                            <p class="text-sm text-black">Punong Barangay</p>
                            <a href="punong_barangay.php"><button class="cursor-pointer py-3 px-8 w-[300px] mt-5 bg-[#0298AA] text-white text-base font-semibold transition-all duration-500 block text-center  hover:bg-indigo-700 mx-auto lg:mx-0">See more</button></a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
 

    


    
 

</section>








<!-- ====== About Section End -->
<section class="bg-gray-50 py-16">
  <div class="container px-4 mx-auto">
    <div class="flex items-center flex-wrap mb-32  -mx-8">
      <div class="w-full lg:w-1/2 p-8">
        <img class="rounded-3xl w-full" src="img/PEMBO COUNCIL 2024 PNG.png" alt="">
      </div>
      <div class="w-full lg:w-1/2 p-8">
        <div class="py-1 px-3 rounded-lg border-2 border-[#0298AA] bg-orange-50 inline-flex items-center gap-2 mb-6 mt-12">
          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewbox="0 0 8 8" fill="none"><circle cx="4" cy="4" r="3" fill="#0298AA"></circle></svg>
          <span class="text-black text-sm font-medium">About Us</span>
        </div>
        <h1 class="text-xl lg:text-2xl font-bold font-heading mb-6 max-w-md lg:max-w-2xl">PEMBO COUNCIL 2024</h1>
        <p class="text-gray-600 text-lg mb-12">We focus on our commitment to serving our community. Our goal is clear: to ensure that every person in our barangay receives the support and assistance they need. Let us work together, listen to each other's needs, and dedicate ourselves to providing exceptional service to all. Together, we can make a meaningful difference in the lives of our people.</p>
      </div>
    </div>   
    <div class="inline-flex items-center justify-center w-full ">
    <hr class="w-full h-[5px] my-8 bg-[#0298AA] border-5 dark:bg-gray-700">
    <span class="absolute px-3 text-3xl font-extrabold  text-gray-900 -translate-x-1/2  left-1/2 dark:text-white dark:bg-gray-900"></span>
</div>
    <div class="flex flex-wrap mb-16 -mx-4">
      <div class="w-full lg:w-1/2 p-4">
        <div class="  rounded-3xl p-8">
          <div class="rounded-2xl bg-[#0298AA] w-14 h-14 flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
              <path d="M11.0001 2.66699V29.3337H10.4134C5.56008 29.3337 2.66675 26.4403 2.66675 21.587V10.4137C2.66675 5.56033 5.56008 2.66699 10.4134 2.66699H11.0001Z" fill="#FFF2D6"></path>
              <path d="M28.8333 10.4137V14.5003H13.5V3.16699H21.5867C23.9139 3.16699 25.7113 3.85875 26.9264 5.07388C28.1416 6.289 28.8333 8.08643 28.8333 10.4137Z" fill="#FFF2D6" stroke="#FFF2D6"></path>
              <path d="M29.3333 17V21.5867C29.3333 26.44 26.44 29.3333 21.5867 29.3333H13V17H29.3333Z" fill="#FFF2D6"></path>
            </svg>
          </div>
          
          <div class="flex mb-4">
            <div class="w-2 h-6 bg-[#0298AA] transform -translate-x-8"></div>
            <h2 class="text-2xl font-bold font-heading">Mission</h2>
          </div>
          <p class="text-gray-600">Barangay Pembo's mission is innovative transformation and global change through 
            adopting modernization and open sourcing, sustainably holistic, morally self- replicating. 
            Highest of good of all solutions founded on comprehensive and modifiable community, 
            models duplicated globally that include sustainable development goals for infrastructure, 
            food, education and arts, 
            peace and order disaster resilience, economics and fulfilled living.</p>
        </div>
      </div>
      <div class="w-full lg:w-1/2 p-4">
        <div class="  rounded-3xl p-8">
          <div class="rounded-2xl bg-[#0298AA] w-14 h-14 flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
              <path d="M11.0001 2.66699V29.3337H10.4134C5.56008 29.3337 2.66675 26.4403 2.66675 21.587V10.4137C2.66675 5.56033 5.56008 2.66699 10.4134 2.66699H11.0001Z" fill="#FFF2D6"></path>
              <path d="M28.8333 10.4137V14.5003H13.5V3.16699H21.5867C23.9139 3.16699 25.7113 3.85875 26.9264 5.07388C28.1416 6.289 28.8333 8.08643 28.8333 10.4137Z" fill="#FFF2D6" stroke="#FFF2D6"></path>
              <path d="M29.3333 17V21.5867C29.3333 26.44 26.44 29.3333 21.5867 29.3333H13V17H29.3333Z" fill="#FFF2D6"></path>
            </svg>
          </div>
          <div class="flex mb-4">
            <div class="w-2 h-6 bg-[#0298AA] transform -translate-x-8"></div>
            <h2 class="text-2xl font-bold font-heading">Vision</h2>
          </div>
          <p class="text-gray-600">Barangay Pembo's vision is to be Tourism Hub of Makati City 
            with disciplined and God loving citizens living in sustainable and competitive economy with 
            clean and green environment and disaster-resilient 
            infrastructure led by transparent and accountable public servants.</p>
        </div>
      </div>
    </div>
    
   
    <div class="flex flex-wrap mb-32 -mx-4">
      <div class="w-full lg:w-1/3 p-4">
        <img class="h-full w-full object-cover rounded-3xl" src="img/saved member.jpg" alt="">
      </div>
      <div class="w-full lg:w-1/3 p-4">
        <img class="h-full w-full object-cover rounded-3xl" src="img/memebers.jpg" alt="">
      </div>
      <div class="w-full lg:w-1/3 p-4">
        <img class="h-full w-full object-cover rounded-3xl" src="img/saved member.jpg" alt="">
      </div>
    </div>
<!--
    <h2 class="text-4xl font-bold font-heading text-center mb-4">Meet the Counicls</h2>
    <div class="mb-16 flex justify-center"><a class="w-full sm:w-auto text-center h-14 inline-flex items-center justify-center py-3 px-5 rounded-full bg-[#0298AA] border border-black shadow text-sm font-semibold text-white hover:bg-orange-600 focus:ring focus:ring-orange-200 transition duration-200" href="#">Careers</a></div>
    <div class="flex flex-wrap pb-32 -mx-4">
    <div class="slide-cont swiper">
  <div class="slide-content">
    <div class="card-wrap swiper-wrapper">
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/KAP K PIC.JPG" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kim M.Abbang </h2>
  <p class="description">Punong Barangay</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/Arcilla_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kgd. Michael R. Arcilla</h2>
  <p class="description">Committee Chairman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/Keith_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kgd. Keith P. Diaz</h2>
  <p class="description">Committee Chairman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/Dexter (FInal).png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kgd. Dexter S. Miranda</h2>
  <p class="description">Committee Chairman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/rosalyn_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kgd. Rosalyn N. Lapasaran</h2>
  <p class="description">
Committee Chairwoman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/cristy_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Cristy M. Licunan</h2>
  <p class="description">Barangay Treasurer</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/Ronaldo_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Kgd. Ronaldo A. Villanueva</h2>
  <p class="description">Committee Chairman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/Brideggte_Final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Hon. Bridgette Lindsay S. Sison</h2>
  <p class="description">SK Chairwoman</p>
  
</div>
      </div>
      <div class="cardz swiper-slide">
        <div class="image-content">
          <span class="overlay"></span>
            <div class="card-image">
              <img src="img/lailane_final.png" alt="" class="card-img">
            </div>
        </div>
<div class="card-content">
  <h2 class="name">Lalaine E. Asidao</h2>
  <p class="description">Barangay Secretary</p>
  
</div>
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="  swiper-pagination"></div>
</div>
      
  </div> -->
</section> 

<section class="py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center flex-col lg:flex-row md:mt-20">
                <div class="w-full lg:w-1/2">
                    <h2
                        class="font-manrope text-5xl text-gray-900 font-bold leading-[4rem] mb-7 text-center lg:text-left">
                        BARANGAY COUNCILS</h2>
                        <p class="text-lg text-gray-500 mb-16 text-center lg:text-left">These people work on making our
                        barangay safe and best.</p>
                    
                    <a href="../public/user_login.php"><button class="cursor-pointer py-3 px-8 w-60 bg-[#0298AA] text-white text-base font-semibold transition-all duration-500 block text-center rounded-full hover:bg-indigo-700 mx-auto lg:mx-0">See more</button></a>
                </div>
                <div class="w-full lg:w-1/2 lg:mt-0 md:mt-40 mt-16 max-lg:max-w-2xl">
                    <div class="grid grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 gap-8">
                        <img src="img/Arcilla_final.png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0 bg-cyan-500" />
                        <img src="img/lailane_final.png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mx-auto bg-cyan-500 " />
                        <img src="img/cristy_final.png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0 md:ml-0 bg-cyan-500" />
                        <img src="img/Vincente_final.png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0 md:ml-auto bg-cyan-500" />
                        <img src="img/Dexter (FInal).png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover md:-mt-20 mx-auto min-[450px]:mr-0 md:mx-auto bg-cyan-500" />
                        <img src="img/rosalyn_final.png" alt="Team tailwind section"
                            class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0 bg-cyan-500" />

                    </div>
                </div>
            </div>
        </div>
    </section>


  

<!-- Services -->
<section id="services">
<div class=" bg-gray-50"  >
<div class="inline-flex items-center justify-center w-full mt-[150px] ">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mono font-bold border-teal-400  dark:text-gray-200">
    Services
</h1>
</div>

<div class="cont">
  <div class="box " data-aos="flip-left" data-aos-duration="1000">
    <div class="icon">1</div>
    <div class="cont1">
      <h3>Barangay Clearance</h3>
      <p></p>
      <a href="../public/user_login.php">Request</a>

    </div>
  </div>
  <div class="box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300"
>
    <div class="icon">2</div>
    <div class="cont1">
      <h3>Barangay Certificate</h3>
      <p></p>
      <a href="../public/user_login.php">Request</a>

    </div>
  </div>
  <div class="box" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400"
>
    <div class="icon">3</div>
    <div class="cont1">
      <h3>Barangay Indigency</h3>
      <p></p>
      <a href="../public/user_login.php">Request</a>

    </div>
  </div>

</div>
</div>
</section>


<!--Contact Section-->
<section class="bg-white dark:bg-gray-900">
<div class="inline-flex items-center justify-center w-full mt-[150px] ">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mono font-bold border-teal-400  dark:text-gray-200">
    Contact
</h1>
</div>
    <div class="container px-6 py-12 mx-auto">
        <div>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">Our friendly team would love to hear from you.</p>
        </div>

        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">pembo.dilg@gmail.com </p>
                </div>

                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Office</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Located At.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Blk 204 Lot 1&2 Plaza Carriaga St., Cor. Sampaguita St., Z-12 Pembo, Taguig City</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Admin Office: 8856-56-72</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Treasurer's Office: 8856-56-69</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Kagawad's Office: 8843-42-92</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Bantay Bayan: 8553-08-46</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Lupon Office: 8824-39-97</p>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1623.756962400853!2d121.05723690692193!3d14.543898985712932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c89203f79909%3A0xe2e126b97cc3c32b!2sPembo%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1712005353085!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <a href='about.php' class='hover:text-white text-gray-300 text-sm'>About us</a>
            </li>
            <li>
              <a href=index.php/#stats' class='hover:text-white text-gray-300 text-sm'>Number of Resident</a>
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