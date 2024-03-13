<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <title>NCLEX-RN Tutors</title>
</head>
<body>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 mb-10 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="{{ asset('images/logo.jpg') }}" class="h-30 rounded mb-5 lg:mb-0 lg:w-auto" alt="" style="width: 100px">
    <span class="self-center text-2xl font-semibold whitespace-nowrap hidden sm:block dark:text-white">NCLEX-RN TUTORS</span>
</a>

  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      {{-- <a href="#joinclass" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Join Class</a> --}}
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
      </li>
      <li>
        <a href="/demo" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Demo</a>
      </li>
      <li>
        <a href="/testimonials" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<section class="bg-white pt-24 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Welcome to NCLEX-RN TUTORS!</h1> 
    </br>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Welcome! Below are some of our materials for your use.</p> 
    </br>
        <a href="https://meet.google.com/mkz-pkkf-ned" class="mb-8 text-lg font-bold text-blue-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Join Class</a>
    </div>


    {{-- <ol class="space-y-4 w-1/2 pt-2 mx-auto mb-10">
    <li>
        <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400" role="alert">
            <div class="flex items-center justify-between">
                <span class="sr-only">Access to Practice Materials </span>
                <h3 class="font-medium">1. Access to Practice Materials: <br> By signing up for a demo account,  you get access a curated selection of practice materials specifically designed for the NCLEX exam.  </h3>
                <!--  -->
            </div>
        </div>
    </li>
    <li>
        <div class="w-full p-4 text-purple-700 border border-purple-400 rounded-lg bg-purple-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400" role="alert">
            <div class="flex items-center justify-between">
                <span class="sr-only">Hands-On Experience:</span>
                <h3 class="font-medium">2. Hands-On Experience:<br> By signing up for a demo account, you get hands-on experience of the platform's features and functionalities. Navigate through the user interface, interact with different tools, and experience the study environment firsthand.</h3>
                <!--  -->
            </div>
        </div>
    </li>
    <li>
        <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400" role="alert">
            <div class="flex items-center justify-between">
                <span class="sr-only">Evaluation of Learning Methodology</span>
                <h3 class="font-medium">3. Evaluation of Learning Methodology: <br> By signing up for a demo account, you can assess the quality of explanations provided for correct and incorrect answers, review performance analytics, and gauge your ability to identify areas of weakness and provide feedback.</h3>
                <!--  -->
            </div>
        </div>
    </li>

</ol> --}}
    <div class="bg-gradient-to-br from-purple-100 to-blue-200 hover:bg-gradient-to-b to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</section>


<footer class="bg-light dark:bg-gray-900 pt-10">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                  {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" /> --}}
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NCLEX-RN Tutors</span>
              </a>
          </div>
          <div class="grid grid-cols- gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#faqs" class="hover:underline">FAQs</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Knowledge Base</a>
                      </li>
                  </ul>
              </div>
              {{-- <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div> --}}
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">NCLEX-RN Tutors. All Rights Reserved.
          </span>
      </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>