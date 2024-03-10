<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <title>NCLEX-RN Tutors</title>
</head>
<body>

<style>
/* Hide scrollbar for Firefox */
.h-80::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for WebKit-based browsers (Chrome, Safari, Opera) */
.h-80 {
    scrollbar-width: none;
}

/* Hide scrollbar for Internet Explorer and Edge */
.h-80 {
    -ms-overflow-style: none;
}

/* CSS for animation */
@keyframes scroll {
    0% { transform: translateX(0); }
    50% { transform: translateX(-30px); }
    100% { transform: translateX(0); }
}

.animate-scroll {
    animation: scroll 3s infinite; /* Adjust animation duration as needed */
}
</style>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-15" alt="Flowbite Logo"> --}}
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NCLEX-RN TUTORS</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="#joinclass" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Join Class</a>
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
        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
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


<section class="bg-white pt-20 dark:bg-gray-900 ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

<div class="flex flex-col sm:flex-row justify-between sm:py-24 py-12 items-center">
    <!-- Image div with responsive classes -->
    <div class="sm:order-first mb-10 lg:mb-0 lg:w-auto">
        <img src="{{asset('images/Design(1).png')}}" class="h-full rounded" alt="Image" style="width: 700px">
    </div>

    <!-- Content div with responsive classes -->
    <div class="flex flex-col justify-center sm:pt-10 items-center sm:text-center">
        <h1 class="mb text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Personal coaching. Guidance through the NCLEX preparation and registration process.</h1>
        <p class="mb-10 pt-10 text-lg font-normal text-gray-500 lg:text-xl sm:px-3 lg:px-24 dark:text-gray-200">Because NCLEX is such a personal journey we provide individualized education guidance and support preparing you to face the Mountain that is NCLEX with confidence.</p>
        <a href="#packages" class="inline-flex justify-center items-center py-4 px-5 text-lg font-medium text-center text-white shadow-lg rounded-lg bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                View Products
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
        </a>
    </div>
</div>



<div class="flex justify-center gap-16 bg-gray-25 py-12">
<p class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Affordable NCLEX-RN Preparation Classes.
</span>
</p>
<p class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Live Classes Online
</span>
</p>
<p class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
Onboarding to be a USRN after passing NCLEX.
</span>
</p>




</div>

<div class="bg-gray-5 pt-20">

<h2 class="mb-10 text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Why Prepare for your NCLEX Test with us.</h2>

{{-- <div id="accordion-color" class="pt-10" data-accordion="collapse" data-active-classes="bg-gray-100 dark:bg-gray-800 text-blue-600 dark:text-white">
  <h2 id="accordion-color-heading-j">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-j" aria-expanded="true" aria-controls="accordion-color-body-j">
      <span></span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-j" class="hidden" aria-labelledby="accordion-color-heading-j">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <p class="mb-2 text-gray-500 dark:text-gray-400"></p>
    </div>
  </div>
  <h2 id="accordion-color-heading-22">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-22" aria-expanded="false" aria-controls="accordion-color-body-22">
      <span></span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-22" class="hidden" aria-labelledby="accordion-color-heading-22">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400"> </p>
    </div>
  </div>
  <h2 id="accordion-color-heading-33">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-33" aria-expanded="false" aria-controls="accordion-color-body-33">
      <span></span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-33" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400"></p>

    </div>
  </div>
</div> --}}
<div id="accordion-color" class="pt-10" data-accordion="collapse" data-active-classes="bg-gray-100 dark:bg-gray-800 text-blue-600 dark:text-white">
  <h2 id="accordion-color-heading-q">
    <p type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-q" aria-expanded="false" aria-controls="accordion-color-body-q">
        Q - bank :
        Access to 2000+ practice questions curated help you covering all the systems and all client need areas as per the NCBSN standards.
    </p>
  </h2>
  <h2 id="accordion-color-heading-w">
    <p type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-w" aria-expanded="false" aria-controls="accordion-color-body-w">
        Live Classes : Interactive classes that cover topics tested in the NCLEX exam . We also cover test taking skills.
    </p>
  </h2>
  <h2 id="accordion-color-heading-e">
    <p type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-e" aria-expanded="false" aria-controls="accordion-color-body-e">
        Extensive database of NGN : An extensive database of NGN practice questions and access to computer adaptive exams to evaluate your readiness for the exam.
    </p>
  </h2>

</div>
</div>
    

<section class="bg-white pt-16 dark:bg-gray-900">
    <h5 class="mb-10 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-white">Get personalized tutoring that accelerates your progress towards your goals.</h5>
    <div class="flex flex-col items-center justify-center lg:flex-row">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:pr-8 lg:flex-9">
            <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Our tutoring services are tailored to your individual needs, ensuring that you achieve your goals in a timely manner. Our NCLEX-RN tutors are highly knowledgeable in test preparation and strategy, providing you with expert guidance. With personalized study plans and targeted tutoring, we will equip you with the necessary skills to excel in the areas you require the most assistance. Approach your exam with self-assurance, as we guarantee your success.</p>
        </div>
        
        <img src="/images/animated-female-nurse-nobg.png" class="h-30 rounded mb-5 lg:mb-0 lg:w-auto" alt="" style="width: 300px">
        {{-- <img src="{{asset('images/animated-female-nurse-nobg.png')}}" class="h-30 rounded mb-5 lg:mb-0 lg:w-auto" alt="" style="width: 300px"> --}}
    </div>
</section>


<button>

<a href="#packages" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
START YOUR CLASSES
</span>
</a>

</button>

<section class="pt-5">
    <div class="py-8  mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-purple-100 shadow-xl dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-200 shadow-lg text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    NCLEX Question Bank
                </a>
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Next Generation NCLEX Question Bank</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4">Get ready for a whole new level of NCLEX with The Next Generation! Explore creative question formats like case studies, extended multiple response, and more.
                    Boost your readiness for the NCLEX-RN exam by exploring the diverse item types in our Q-Bank, ensuring thorough comprehension and self-assurance.
                </p>
                
            </div>
            <div class="bg-blue-100 shadow-xl dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-200 shadow-lg text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    CAT
                </a>
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Computer Adaptive Testing (CAT)</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4">Take your test preparation to the next level with our Adaptive (CAT) NCLEX practice tests, helping you evaluate your readiness and enhance your performance.</p>
                
            </div>
            <div class="bg-pink-100 shadow-xl dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-blue-200 shadow-lg text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Live Classes
                </a>
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Live Classes and Prerecorded Videos</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4">Revamp your NCLEX preparation strategy by incorporating our captivating, interactive, and pre-recorded review videos. These meticulously crafted resources are specifically tailored to expedite your NCLEX readiness. Our dynamic video series meticulously covers the crucial and frequently examined topics, guaranteeing your success on the exam from the very first attempt.</p>
            </div>
            <div class="bg-green-100 shadow-xl dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-purple-200 shadow-lg text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Readiness Evaluations
                </a>
                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Unlimited Readiness Evaluations</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4">Participate in limitless readiness evaluations customized for NCLEX preparation. With every examination, acquire a predictive score and methodically monitor your advancement. By closely monitoring your outcomes, develop the assurance to determine exactly when you are ready to excel in your examination.</p>
            </div>
        </div>
    </div>
</section>

<section class=" px-16 bg-purple-100 py-24 rounded-xl">
    
<h5 class="mb-10 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white">Everything you need to succeed</h5>
<div class="w-full text-wrap py-12 px-8 bg-white border border-gray-200 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700">
  {{-- <div class="overflow-x-auto bg-gray-200 rounded-lg" style="max-width: 100%; -ms-overflow-style: none; scrollbar-width: none;"> --}}
    <div class="overflow-x-auto max-w-full bg-gray-200 rounded-lg sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl relative" style="-ms-overflow-style: none; scrollbar-width: none;"> <!-- Adjust max-width as needed -->
    <ul class="flex justify-between px-8 text-sm font-medium text-center text-gray-500 border-b border-gray-200  dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="me-2">
            <div class="flex items-center">
                <img src="/images/ngn.png" class="h-8 w-auto hidden sm:block mr-2" alt=""> 
                {{-- <img src="{{ asset('images/ngn.png') }}" class="h-8 w-auto hidden sm:block mr-2" alt="">  --}}
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    NGN (Next Generation NCLEX) Ready
                </button>
            </div>
        </li>
        <li class="me-2">
            <div class="flex items-center">
                {{-- <img src="/images/content.png" class="h-8 w-auto hidden sm:block mr-2" alt="">  --}}
                <img src="{{ asset('images/content.png') }}" class="h-8 w-auto hidden sm:block mr-2" alt=""> 
                <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    Content-rich Rationales
                </button>
            </div>
        </li>
        <li class="me-2">
            <div class="flex items-center">
                {{-- <img src="/images/customized.png" class="h-8 w-auto mr-2 hidden sm:block" alt=""> --}}
                <img src="{{ asset('images/customized.png') }}" class="h-8 w-auto mr-2 hidden sm:block" alt="">
                <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    Customized Studying
                </button>
            </div>
        </li>
        <li class="me-2">
            <div class="flex items-center"> <!-- Container for image and button text -->
                {{-- <img src="/images/unlimited.png" class="h-8 w-auto mr-2 hidden sm:block" alt=""> <!-- Adjust the height and width as needed --> --}}
                <img src="{{ asset('images/unlimited.png') }}" class="h-8 w-auto mr-2 hidden sm:block" alt=""> <!-- Adjust the height and width as needed -->
                <button id="service-tab" data-tabs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    Unlimited Readiness Assessments
                </button>
            </div>
        </li>
        <li class="me-2">
            <div class="flex items-center"> <!-- Container for image and button text -->
                {{-- <img src="/images/performance.png" class="h-8 w-auto mr-2 hidden sm:block" alt=""> <!-- Adjust the height and width as needed --> --}}
                <img src="{{ asset('images/performance.png') }}" class="h-8 w-auto mr-2 hidden sm:block" alt=""> <!-- Adjust the height and width as needed -->
                <button id="statistic-tab" data-tabs-target="#statistic" type="button" role="tab" aria-controls="statistic" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                    Performance Insights
                </button>
            </div>
        </li>

    </ul>
  </div>
    <div id="defaultTabContent p-10">
        <div class="hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">The Next Generation NCLEX is designed to be NGN Ready. It introduces various innovative item formats such as case studies, extended multiple response, matrix multiple response, and the unique bow-tie, among others.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">It is important to familiarize yourself with each of these item types within the nclex-rntutors.com Q-Bank in order to have a comprehensive understanding and build confidence for the actual exam.</span>
                </li>
                
            </ul>
        </div>
        <div class="hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
            <ul role="list" class="space-y-6 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse ">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight"> In addition to the innovative item formats, the nclex-rntutors.com Q-Bank also provides content-rich answer rationales. These rationales go beyond the basics and not only clarify the reason behind correct and incorrect choices, but also enrich your knowledge by offering valuable insights to enhance your study sessions.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse ">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">To ensure a holistic understanding, multimedia tools such as images, tables, charts, and videos are seamlessly integrated throughout the Q-Bank.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight"> Each practice question comes with a clear video explanation that is tailored to deepen your understanding of NCLEX topics. This visual method enhances retention and prepares you for success in the exam.</span>
                </li>
            </ul>
        </div>
        <div class="hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Make your practice sessions unique by selecting the particular subjects you want to focus on.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Select from a range of NCLEX test areas that correspond to related disciplines, themes, and lessons. Create the perfect practice exam that focuses on the areas that need the most attention from you.</span>
                </li>
                
            </ul>
        </div>
        <div class="hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="service" role="tabpanel" aria-labelledby="statistics-tab">
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Use our readiness exams at any time to gauge your level of NCLEX readiness. You can start as many readiness assessments as there are questions in your nclex-rntutors.com Question Bank.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight"> Our sophisticated software creates an 85-question fake NCLEX that closely resembles the nuances of the real test. Get an understanding of your pass likelihood after finishing, with scores ranging from low to very high.</span>
                </li>
                
            </ul>
        </div>
        <div class="hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistic" role="tabpanel" aria-labelledby="statistics-tab">
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">With our comprehensive data, you can keep an eye on your areas of strength and identify those that need more attention.</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight"> Learn how you performed on each question in the complete question bank. The intuitive dashboard shows you your performance in each area using graphics. Check your dashboard frequently to see your consistent advancement and increasing proficiency over time.</span>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<button class="pt-20">

<a href="#packages" class="relative inline-flex items-center justify-center p-0.5 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
REGISTER NOW
</span>
</a>

</button>
</section>


<section>
<h5 id="packages" class="mb-5 pt-20 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-3xl dark:text-white">Our Packages</h5>

  <div class="flex justify-center items-cente">

  
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-8 gap-5 py-24">
    

<div class="w-full max-w-sm p-4 mb-5 bg-white border border-blue-700 rounded-lg shadow-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-4 text-xl font-medium text-blue-700 dark:text-blue-400">Basic plan</h5>
<div class="flex items-baseline text-gray-900 dark:text-white">
<span class="text-3xl text-blue-600 font-semibold">$</span>
<span class="text-5xl font-extrabold tracking-tight">100</span>

</div>
<ul role="list" class="space-y-5 my-7">
<li class="flex items-center">
<svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Duration: 30 days</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access to the full question bank</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Detailed answer explanations</span>
</li>
<li class="flex ">
<svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">Performance tracking and analytics</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">Email support</span>
</li>


</ul>
<a href="#joinclass" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</a>
</div>




<div class="w-full max-w-sm p-4 mb-5 bg-white border border-green-700 rounded-lg shadow-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-4 text-xl font-medium text-bold text-green-700 dark:text-green-800">Standard plan</h5>
<div class="flex items-baseline text-gray-900 dark:text-white">
<span class="text-3xl text-green-600 font-semibold">$</span>
<span class="text-5xl font-extrabold tracking-tight">200</span>
</div>
<ul role="list" class="space-y-5 my-7">
<li class="flex items-center">
<svg class="flex-shrink-0 w-4 h-4 text-green-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Duration: 60 days </span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-green-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">All features of the Basic Package</span>
</li>

<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-green-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">Weekly practice quizzes</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-green-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base text-left font-normal leading-tight text-gray-500 ms-3">Progress reports and personalized study recommendations</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-green-700 dark:text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">Priority email support</span>
</li>

</ul>
<a href="#joinclass" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</a>
</div>


<div class="w-full max-w-sm p-4 bg-white border border-purple-700 rounded-lg shadow-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700">
<h5 class="mb-4 text-xl font-medium text-purple-700 dark:text-purple-800">Premium plan</h5>
<div class="flex items-baseline text-gray-900 dark:text-white">
<span class="text-3xl text-purple-600 font-semibold">$</span>
<span class="text-5xl font-extrabold tracking-tight">300</span>

</div>
<ul role="list" class="space-y-5 my-7">
<li class="flex items-center">
<svg class="flex-shrink-0 w-4 h-4 text-purple-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Duration: 90 days</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-purple-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base text-left font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">All features of the Standard Package</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-purple-600 dark:text-purple-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base text-left font-normal leading-tight text-gray-500 ms-3">Live virtual classes with expert instructors</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-purple-600 dark:text-purple-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">One-on-one coaching sessions
</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-purple-600 dark:text-purple-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base text-left font-normal leading-tight text-gray-500 ms-3">Access to exclusive study materials and resources</span>
</li>
<li class="flex">
<svg class="flex-shrink-0 w-4 h-4 text-purple-600 dark:text-purple-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
</svg>
<span class="text-base font-normal leading-tight text-gray-500 ms-3">24/7 live chat support</span>
</li>
</ul>
<a href="#joinclass" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</a>
</div>

</div>
  </div>
</section>


<h3 id="joinclass" class="text-center text-2xl text-bold py-5">Join Class</h3>
<div class="mx-auto mb-10 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="/request-token" method="POST" >
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create an account</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
        </div>
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
            <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
        </div>
        <div>
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your number</label>
            <!-- <input type="number" name="number" id="number" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required /> -->
            <div class="relative">
        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
            </svg>
        </div>
        <input type="text" id="number" name="number" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123-456-7890" required />
    </div>
        </div>
        <!-- <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
        </div> -->
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Account</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Already registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Login</a>
        </div>
    </form>
</div>
<hr class="h-px  bg-blue-500 w-80 mb-10 mx-auto border-0 dark:bg-gray-700 pb-1">



    </div>
    
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
    
    



<div  id="faqs" class="bg-gray-5 pt-5 px-5 lg:px-16">
<h2 class="mb-10 text-center text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">FAQs</h2>


<div id="accordion-color" class="pt-10 px-16" data-accordion="collapse" data-active-classes="bg-gray-100 dark:bg-gray-800 text-blue-600 dark:text-white">
  <h2 id="accordion-color-heading-10">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-10" aria-expanded="false" aria-controls="accordion-color-body-10">
      <span>What is the NCLEX-RN exam?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-10" class="hidden" aria-labelledby="accordion-color-heading-1">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The NCLEX-RN is the National Council Licensure Examination for Registered Nurses. The exam tests if someone is prepared to be a nurse.</p>
    </div>
  </div>
  <h2 id="accordion-color-heading-20">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-20" aria-expanded="false" aria-controls="accordion-color-body-20">
      <span>Who gives the NCLEX exams and why?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-20" class="hidden" aria-labelledby="accordion-color-heading-20">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The National Council of State Boards of Nursing (NCSBN) oversees the NCLEX exams in the US to ensure future nurses have the knowledge and skills to safely care for patients.</p>
    </div>
  </div>
  <h2 id="accordion-color-heading-30">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-30" aria-expanded="false" aria-controls="accordion-color-body-30">
      <span>How can I get ready for the NCLEX exams?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-30" class="hidden" aria-labelledby="accordion-color-heading-30">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Start by contacting your state's nursing board to apply for licensure. Then, utilize study resources and courses while familiarizing yourself with the exam content, which covers areas like health promotion, mental and physical well-being, and safe healthcare environments.</p>

    </div>
  </div>
  <h2 id="accordion-color-heading-4">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
      <span>How do I begin my NCLEX application?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">First, choose your preferred state to find out which documents, certifications, or English proficiency tests they require. Once submitted, the process will be monitored, and you'll be informed about any additional documents needed to complete your application.</p>

    </div>
  </div>
  <h2 id="accordion-color-heading-5">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
      <span>Do I need US citizenship or a green card to take the NCLEX?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">It depends on the state. Some states, like New York, Texas, and Illinois, don't require a Social Security Number (SSN) for application.</p>

    </div>
  </div>
  <h2 id="accordion-color-heading-6">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-6">
      <span>Is work experience in my home country required for the NCLEX?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">No, work experience typically isn't needed for NCLEX-US applications. Completing an approved nursing program is essential, but specific requirements vary by state.</p>

    </div>
  </div>
  <h2 id="accordion-color-heading-7">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-7" aria-expanded="false" aria-controls="accordion-color-body-7">
      <span>How much does it cost to apply for the NCLEX?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The cost varies depending on your chosen state and can include fees for registering with the board of nursing, requesting documents from your school, sending those documents, evaluation services, proficiency exams, and additional documents your state might require.</p>

    </div>
  </div>
  <h2 id="accordion-color-heading-8">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-8" aria-expanded="false" aria-controls="accordion-color-body-8">
      <span>What's included in your NCLEX Processing Assistance?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">This service offers help and guidance throughout your application process, from registration to receiving your authorization to take the NCLEX (ATT). While they can't directly handle document submission, they can help you gather everything, ensure it meets state requirements, and understand application details and deadlines. They use live chats and Zoom calls to assist you and keep your application on track.</p>

    </div>
  </div>
</div>
</div>
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
<script>
  const ulElement = document.getElementById('defaultTab');

ulElement.addEventListener('mouseover', () => {
    ulElement.classList.add('animate-scroll'); // Add animation class
});

ulElement.addEventListener('mouseout', () => {
    ulElement.classList.remove('animate-scroll'); // Remove animation class
});
</script>

</body>
</html>