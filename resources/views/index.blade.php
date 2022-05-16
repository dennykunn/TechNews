<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechNews</title>
    {{-- FlowBiteCSS --}}
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    {{-- TailWind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dropdown:hover > .dropdown-content {
            display: block;
        }

        .bg19 {
            width: 100%;
            height: 470px;
            background-image: linear-gradient(to top right, rgba(162, 0, 255, 0.4), rgba(255, 0, 0, 0.4)), url('assets/bg19.jpg');
            background-position: center;
            background-size: cover;
        }

        .bg19:hover{
            background-image: linear-gradient(to top right, rgba(162, 0, 255, 0), rgba(255, 0, 0, 0)), url('assets/bg19.jpg');
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
        extend: {
            fontFamily: {
            sans: ['Inter', 'sans-serif'],
            },
        }
        }
    }
    </script>
</head>
<body style="font-family: Poppins,Helvetica,Arial,sans-serif;">
    <div class="py-2 bg-blue-600">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between text-sm text-white">
                <div class="space-x-2">
                    <a href="#">Team</a>
                    <a href="#">Advetise</a>
                    <a href="#">FAQ</a>
                    <a href="#">Contact</a>
                </div>
                <div class="flex space-x-3">
                    {{-- Facebook --}}
                    <a href="https://facebook.com" target="_blank" rel="external noopener nofollow" class="jeg_facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    {{-- Twitter --}}
                    <a href="https://twitter.com" target="_blank" rel="external noopener nofollow" class="jeg_twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://instagram.com" target="_blank" rel="external noopener nofollow" class="jeg_instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                    {{-- Pinterest --}}
                    <a href="https://pinterest.com" target="_blank" rel="external noopener nofollow" class="jeg_pinterest">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                        </svg>
                    </a>
                    {{-- Feed --}}
                    <a href="#" target="_blank" rel="external noopener nofollow" class="jeg_pinterest">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z" />
                            <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- NavBar --}}
    <div class="" style="background: linear-gradient(90deg, #4886ff 0%, #45f7dc 100%);">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center text-white">
                <a href="#">
                    <img class="py-4" src="assets/logo.png" alt="">
                </a>

                {{-- DropDown --}}
                <div class="dropdown inline-block relative ml-6">
                    <a href="/">
                        <button class="text-white py-5 px-3 hover:bg-white/10 text-sm font-bold flex items-center">
                            HOME <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </a>
                    <ul class="dropdown-content absolute hidden text-white text-sm bg-[#39434d] w-[200px] z-50">
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 1</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 2</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 3</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 4</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 5</a>
                        </li>
                    </ul>
                </div>
                <!-- End Dropdown menu -->

                {{-- DropDown --}}
                {{-- <div class="dropdown inline-block relative">
                    <a href="#">
                        <button class="text-white py-4 px-3 hover:bg-white/10 text-sm font-bold flex items-center">
                            REVIEW <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </a>
                    <ul class="dropdown-content absolute hidden text-white text-sm bg-[#39434d] w-[1000px]">
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 1</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 2</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 3</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 4</a>
                        </li>
                        <li>
                            <a class="hover:bg-[#47515a] py-2 px-4 block whitespace-no-wrap" href="#">Home - Layout 5</a>
                        </li>
                    </ul>
                </div> --}}
                <!-- End Dropdown menu -->

                {{-- <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white py-4 px-3 hover:bg-white/10 text-sm font-bold flex items-center" type="button">REVIEW <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow mx-auto w-full dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div> --}}

            </div>
        </div>
    </div>

    {{-- MAIN --}}
    <div class="py-8">
        {{-- Carousell --}}
        <div class="max-w-6xl mx-auto">
            {{-- Carousell --}}
            <div id="indicators-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-48 sm:h-64 xl:h-[550px]">
                     <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out bg-cover bg-bottom" style="background-image: linear-gradient(to right, rgba(56, 133, 247, 0.2), rgba(6, 239, 247, 0.2)), url(assets/header1.jpg);" data-carousel-item="active">
                        <div class="ml-10 h-full w-[50%] flex flex-col justify-center space-y-5">
                            <span class="text-white text-xs font-semibold mr-2 w-12 text-center py-0.5 bg-blue-600"> APPLE</span>
                            <a href="#">
                                <p class="text-white text-5xl font-bold">Watch IndieBio Accelerator’s Demo Day Today</p>
                            </a>
                            <p class="text-white text-xs font-semibold uppercase">by Dylan McKenzie September 11, 2017</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div  class="hidden duration-700 ease-in-out bg-cover bg-bottom" style="background-image: linear-gradient(to right, rgba(56, 133, 247, 0.2), rgba(6, 239, 247, 0.2)), url(assets/header2.jpg);" data-carousel-item>
                        <div class="ml-10 h-full w-[50%] flex flex-col justify-center space-y-5">
                            <span class="text-white text-xs font-semibold mr-2 w-12 text-center py-0.5 bg-blue-600"> APPLE</span>
                            <a href="#">
                                <p class="text-white text-5xl font-bold">Shopify CEO attempts to defend continued hosting of Breitbart’s online store</p>
                            </a>
                            <p class="text-white text-xs font-semibold uppercase">by Dylan McKenzie August 30, 2017</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div  class="hidden duration-700 ease-in-out bg-cover bg-bottom" style="background-image: linear-gradient(to right, rgba(56, 133, 247, 0.2), rgba(6, 239, 247, 0.2)), url(assets/header3.jpg);" data-carousel-item>
                        <div class="ml-10 h-full w-[50%] flex flex-col justify-center space-y-5">
                            <span class="text-white text-xs font-semibold mr-2 w-12 text-center py-0.5 bg-blue-600"> APPLE</span>
                            <a href="#">
                                <p class="text-white text-5xl font-bold">SpaceX targets February 18 for Dragon resupply mission to ISS</p>
                            </a>
                            <p class="text-white text-xs font-semibold uppercase">by Dylan McKenzie August 30, 2017</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div  class="hidden duration-700 ease-in-out bg-cover bg-bottom" style="background-image: linear-gradient(to right, rgba(56, 133, 247, 0.2), rgba(6, 239, 247, 0.2)), url(assets/header4.jpg);" data-carousel-item>
                        <div class="ml-10 h-full w-[50%] flex flex-col justify-center space-y-5">
                            <span class="text-white text-xs font-semibold mr-2 w-12 text-center py-0.5 bg-blue-600"> APPLE</span>
                            <a href="#">
                                <p class="text-white text-5xl font-bold">Passwords for social media accounts could be required for some to enter country</p>
                            </a>
                            <p class="text-white text-xs font-semibold uppercase">by Dylan McKenzie August 30, 2017</p>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div  class="hidden duration-700 ease-in-out bg-cover bg-bottom" style="background-image: linear-gradient(to right, rgba(56, 133, 247, 0.2), rgba(6, 239, 247, 0.2)), url(assets/header5.jpg);" data-carousel-item>
                        <div class="ml-10 h-full w-[50%] flex flex-col justify-center space-y-5">
                            <span class="text-white text-xs font-semibold mr-2 w-12 text-center py-0.5 bg-blue-600"> APPLE</span>
                            <a href="#">
                                <p class="text-white text-5xl font-bold">Cinemood secures $2.5M for its mini-projector with kid-friendly content built in</p>
                            </a>
                            <p class="text-white text-xs font-semibold uppercase">by Dylan McKenzie August 30, 2017</p>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex flex-col absolute right-5 top-[40%] z-30 space-y-3 -translate-x-1/2">
                    <button type="button" class="w-4 h-4 border-2 border-white rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-4 h-4 border-2 border-white rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-4 h-4 border-2 border-white rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-4 h-4 border-2 border-white rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-4 h-4 border-2 border-white rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
            </div>
        </div>

        {{-- Iklan --}}
        <div class="my-8">
            <img class="mx-auto" src="assets/iklan.png" alt="">
        </div>

        {{-- News --}}
        <div class="max-w-6xl mx-auto">
            {{-- FeaturedNews --}}
            <p class="uppercase font-semibold text-sm text-gray-700">featured<span class="text-blue-500">news</span></p>
            <div class="flex mt-1">
                <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                <hr class="w-full bg-gray-200 h-[3px] rounded-full">
            </div>

            <div class="flex justify-between mt-8">
                {{-- 1 --}}
                <div class="w-[31.5%]">
                    <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg1.jpg');">
                        <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">applications</span>
                    </div>
                    <a href="#">
                        <p class="text-lg text-gray-700 font-semibold hover:text-blue-500 my-3">To regain advertiser trust, Facebook is tracking ads by the millisecond</p>
                    </a>
                    <div class="flex items-center space-x-4">
                        <p class="text-gray-400 uppercase text-xs font-semibold">
                            BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                        </p>
                        <p class="flex items-center text-gray-500 uppercase text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg> August 30, 2017
                        </p>
                        <p class="flex items-center text-gray-500 uppercase text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                            </svg> 0
                        </p>
                    </div>
                    <p class="text-gray-700 my-3">Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the...</p>
                    <button type="button" class="text-gray-500 border border-gray-500 bg-white hover:bg-blue-600 hover:border-blue-500 hover:text-white font-medium shadow-xl text-xs duration-300 px-5 py-1.5 uppercase">read more</button>

                </div>

                {{-- 2 --}}
                <div class="w-[31.5%] space-y-6">
                    {{-- 1 --}}
                    <div class="flex justify-between">
                        <div class="w-[32%] bg-cover bg-center" style="background-image: url('assets/bg2.jpg')">
                            <div class="flex items-center justify-center h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10 fill-white" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-[65%]">
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">GoPro’s Karma drone is back on sale after design flaw made them fall out of the sky</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> September 1, 2017
                            </p>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="flex justify-between">
                        <img class="w-[32%]" src="assets/bg3.jpg" alt="">
                        <div class="w-[65%]">
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Using a mind reading device, ‘locked-in’ patients told researchers they’re happy</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="flex justify-between">
                        <img class="w-[32%]" src="assets/bg4.jpg" alt="">
                        <div class="w-[65%]">
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Instagram is testing photo albums, because nothing is sacred anymore</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </div>
                    </div>
                    {{-- 4 --}}
                    <div class="flex justify-between">
                        <img class="w-[32%]" src="assets/bg5.jpg" alt="">
                        <div class="w-[65%]">
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Twitter tweaks video again, adding view counts for some users</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3 --}}
                <div class="w-[31.5%]">
                    <ul class="list-disc text-blue-500 space-y-6">
                        {{-- 1 --}}
                        <li>
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Watch Cruise’s self-driving Bolt EV navigate smoothly to SF’s Dolores Park</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </li>
                        {{-- 2 --}}
                        <li>
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Rothenberg Ventures is going back to the same old Rothenberg Ventures</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </li>
                        {{-- 3 --}}
                        <li>
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">Jack Dorsey says he’ll continue running both Square and Twitter</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </li>
                        {{-- 4 --}}
                        <li>
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">The Warby Parker of hair color, Madison Reed, scores new funding and a CMO</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </li>
                        {{-- 5 --}}
                        <li>
                            <a href="#">
                                <p class="text-gray-700 font-semibold hover:text-blue-500">The Analogue Nt Mini is the perfect NES console for video game lovers</p>
                            </a>
                            <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg> August 30, 2017
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- LatestNews and PopulerPost --}}
            <div class="flex justify-between mt-12">
                {{-- 1 --}}
                <div class="w-[63%]">
                    <div>
                        <p class="uppercase font-semibold text-sm text-gray-700">latest<span class="text-blue-500">news</span></p>
                        <div class="flex mt-1">
                            <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                            <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                        </div>
                    </div>

                    {{-- 3Rows --}}
                    <div class="mt-8 space-y-8">
                        {{-- 1 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%]" src="assets/bg6.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">Peanut is a Tinder-like app for making new mom friends</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated...

                                </p>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%]" src="assets/bg7.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">Docker makes secrets management a built-in feature of its enterprise product</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">It's not everyday we found ourselves in a workplace situation that doubles as a full blown ethical conflict. Strech lining...</p>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%]" src="assets/bg8.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">NASA’s concept Europa lander belongs on the cover of a sci-fi pulp</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps...</p>
                            </div>
                        </div>
                    </div>

                    {{-- Iklan --}}
                    <div class="my-8">
                        <img class="mx-auto" src="assets/iklan2.png" alt="">
                    </div>

                    {{-- 3GridCols --}}
                    <div class="grid grid-cols-3 gap-8">
                        {{-- 1 --}}
                        <div class="col-span-1">
                            <div class="w-full h-36 bg-cover relative" style="background-image: url('assets/bg9.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">microsoft</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Apple Watch Series 2 Is Swimproof and Comes With Built-In GPS</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="col-span-1">
                            <div class="w-full h-36 bg-cover relative" style="background-image: url('assets/bg10.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">computers</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Brain science startup NeuroQore hopes its magnets will cure depression</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="col-span-1">
                            <div class="w-full h-36 bg-cover relative" style="background-image: url('assets/bg11.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">computers</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">How big data analytics help hotels gain customers’ loyalty</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-12">

                    {{-- 4Rows --}}
                    <div class="mt-8 space-y-8">
                        {{-- 1 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%] h-48" src="assets/bg12.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">Swiftype launches a new product to help companies search across Dropbox, Office, G Suite and more</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps...</p>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="flex justify-between items-center">
                            <div class="w-[32%] h-48 bg-cover bg-right" style="background-image: url('assets/bg13.jpg')">
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-14 h-14 fill-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">Tesla to ‘hopefully’ launch the Model 3 in India this summer: Elon Musk</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps...</p>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%] h-48" src="assets/bg14.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">China wants to control what apps citizens use. But will Google play ball?</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the...</p>
                            </div>
                        </div>

                        {{-- 4 --}}
                        <div class="flex justify-between items-center">
                            <img class="w-[32%] h-48" src="assets/bg15.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-2xl text-gray-700 font-semibold hover:text-blue-500">Tesla to ‘hopefully’ launch the Model 3 in India this summer: Elon Musk</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps...</p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- 2 --}}
                <div class="w-[33%]">
                    <div>
                        <p class="uppercase font-semibold text-sm text-gray-700">popular post</span></p>
                        <div class="flex mt-1">
                            <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                            <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                        </div>
                    </div>

                    {{-- 5Rows --}}
                    <div class="mt-8">
                        {{-- 1 --}}
                        <div>
                            <img class="h-64 w-full" src="assets/bg16.jpg" alt="">
                            <div class="flex justify-between items-center">
                                <div class="w-[64%]">
                                    <a href="#">
                                        <p class="text-gray-700 text-lg hover:text-blue-500 my-3">To regain advertiser trust, Facebook is tracking ads by the millisecond</p>
                                    </a>
                                </div>
                                <div class="h-[60px] w-[1px] bg-gray-200"></div>
                                <p class="text-gray-300 text-5xl rotate-[15deg] font-semibold text-center mr-5">01</p>
                            </div>
                            <a href="#">
                                <div class="flex items-center text-gray-500 hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 font-bold" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                    </svg>
                                    <p class="uppercase text-xs">2568 shares</p>
                                </div>
                            </a>
                        </div>

                        <hr class="h-[3px] bg-gray-200 rounded-full my-5">

                        <div class="space-y-6">
                            {{-- 2 --}}
                            <div class="flex justify-between">
                                <div class="h-12 w-12 bg-gray-200 rounded-full text-2xl flex items-center justify-center rotate-[10deg] my-auto text-gray-400 hover:text-white hover:bg-blue-500 duration-300 mr-3">02</div>
                                <div class="w-[90%]">
                                    <p class="text-gray-700 hover:text-blue-500">Watch IndieBio Accelerator’s Demo Day Today</p>
                                    <div class="flex items-center mt-1 text-gray-500 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 font-bold" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <p class="uppercase text-xs">2568 shares</p>
                                    </div>
                                </div>
                            </div>

                            {{-- 3 --}}
                            <div class="flex justify-between">
                                <div class="h-12 w-12 bg-gray-200 rounded-full text-2xl flex items-center justify-center rotate-[10deg] my-auto text-gray-400 hover:text-white hover:bg-blue-500 duration-300 mr-3">03</div>
                                <div class="w-[90%]">
                                    <p class="text-gray-700 hover:text-blue-500">Apple Watch Series 2 Is Swimproof and Comes With Built-In GPS</p>
                                    <div class="flex items-center mt-1 text-gray-500 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 font-bold" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <p class="uppercase text-xs">2568 shares</p>
                                    </div>
                                </div>
                            </div>

                            {{-- 4 --}}
                            <div class="flex justify-between">
                                <div class="h-12 w-12 bg-gray-200 rounded-full text-2xl flex items-center justify-center rotate-[10deg] my-auto text-gray-400 hover:text-white hover:bg-blue-500 duration-300 mr-3">04</div>
                                <div class="w-[90%]">
                                    <p class="text-gray-700 hover:text-blue-500">GoPro’s Karma drone is back on sale after design flaw made them fall out of the sky</p>
                                    <div class="flex items-center mt-1 text-gray-500 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 font-bold" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <p class="uppercase text-xs">2568 shares</p>
                                    </div>
                                </div>
                            </div>

                            {{-- 5 --}}
                            <div class="flex justify-between">
                                <div class="h-12 w-12 bg-gray-200 rounded-full text-2xl flex items-center justify-center rotate-[10deg] my-auto text-gray-400 hover:text-white hover:bg-blue-500 duration-300 mr-3">05</div>
                                <div class="w-[90%]">
                                    <p class="text-gray-700 hover:text-blue-500">Fujifilm X-T2 review: The definition of a great camera</p>
                                    <div class="flex items-center mt-1 text-gray-500 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 font-bold" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <p class="uppercase text-xs">2568 shares</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Iklan3 --}}
                    <div class="my-8">
                        <img class="w-full" src="assets/iklan3.jpg" alt="">
                    </div>

                    <div>
                        <p class="uppercase font-semibold text-sm text-gray-700">dont miss</span></p>
                        <div class="flex mt-1">
                            <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                            <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                        </div>
                    </div>

                    {{-- 2Rows --}}
                    <div class="mt-8 space-y-8">
                        {{-- 1 --}}
                        <div class="">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg17.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">apple</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">This gadget is perfect for those who struggle to keep plants alive</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg18.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">microsoft</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Nation’s innovation report card shows it can, and should, do better</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BG19 --}}
            <div class="my-10">
                <a href="#">
                    <div class="bg19 bg-clip-padding p-6">
                        <div class="max-w-2xl flex flex-col items-center justify-center h-full mx-auto">
                            <span class="text-white text-xs font-semibold w-24 text-center py-0.5 bg-blue-600 uppercase">microsoft</span>
                            <p class="text-white font-semibold my-3 text-4xl text-center">Apple Watch Series 2 Is Swimproof and Comes With Built-In GPS</p>
                            <div class="flex items-center justify-center space-x-4 my-3">
                                <p class="text-white uppercase text-xs font-semibold">
                                    BY DYLAN MCKENZIE
                                </p>
                                <p class="flex items-center text-white uppercase text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-white mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- 3GridCols --}}
            <div class="grid grid-cols-3 gap-8">
                {{-- 1 --}}
                <div class="col-span-1">
                    <p class="uppercase font-semibold text-sm text-gray-700">apple</p>
                    <div class="flex mt-1">
                        <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                        <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                    </div>
                    <div class="space-y-8">
                        {{-- 1 --}}
                        <div>
                            <div class="mt-8 w-full h-48 bg-cover relative" style="background-image: url('assets/bg20.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">apple</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 hover:text-blue-500 my-3 text-lg">Watch IndieBio Accelerator’s Demo Day Today</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Dropcap the popularization of the “ideal measure” has led to advice such as “Increase font size for large screens and...</p>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg23.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">Shopify CEO attempts to defend continued hosting of Breitbart’s online store</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg24.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">SpaceX targets February 18 for Dragon resupply mission to ISS</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2 --}}
                <div class="col-span-1">
                    <p class="uppercase font-semibold text-sm text-gray-700">microsoft</p>
                    <div class="flex mt-1">
                        <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                        <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                    </div>
                    <div class="space-y-8">
                        {{-- 1 --}}
                        <div>
                            <div class="mt-8 w-full h-48 bg-cover relative" style="background-image: url('assets/bg21.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">microsoft</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 hover:text-blue-500 my-3 text-lg">Apple Watch Series 2 Is Swimproof and Comes With Built-In GPS</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Strech...</p>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg25.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">Cinemood secures $2.5M for its mini-projector with kid-friendly content built in</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg26.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">Twitter tweaks video again, adding view counts for some users</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3 --}}
                <div class="col-span-1">
                    <p class="uppercase font-semibold text-sm text-gray-700">photography</p>
                    <div class="flex mt-1">
                        <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                        <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                    </div>
                    <div class="space-y-8">
                        {{-- 1 --}}
                        <div>
                            <div class="mt-8 w-full h-48 bg-cover relative" style="background-image: url('assets/bg22.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">photography</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 hover:text-blue-500 my-3 text-lg">The Warby Parker of hair color, Madison Reed, scores new funding and a CMO</p>
                                </a>
                                <div class="flex items-center space-x-4 my-3">
                                    <p class="text-gray-400 uppercase text-xs font-semibold">
                                        BY <span class="text-blue-500">DYLAN MCKENZIE</span>
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg> August 30, 2017
                                    </p>
                                    <p class="flex items-center text-gray-500 uppercase text-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        </svg> 0
                                    </p>
                                </div>
                                <p class="text-gray-700">Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps...</p>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg27.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">Jack Dorsey says he’ll continue running both Square and Twitter</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="flex justify-between">
                            <img class="w-[32%]" src="assets/bg28.jpg" alt="">
                            <div class="w-[65%]">
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500">Passwords for social media accounts could be required for some to enter country</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> August 30, 2017
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Iklan --}}
            <div class="my-16">
                <img class="mx-auto" src="assets/iklan4.jpg" alt="">
            </div>

            {{-- TheReviews --}}
            <div>
                <div>
                    <p class="uppercase font-semibold text-sm text-gray-700">the<span class="text-blue-500">reviews</span></p>
                    <div class="flex mt-1">
                        <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                        <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                    </div>
                </div>
                {{-- 3GridCols - 2Rows --}}
                <div class="grid grid-cols-3 gap-8 mt-8">
                    {{-- 1 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg29.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">camera</span>
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-14 h-14 fill-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">Fujifilm X-T2 review: The definition of a great camera</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- 2 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg30.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">smartphone</span>
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-14 h-14 fill-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">Google Pixel review: It’s as good as the iPhone 7 Plus</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- 3 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg31.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">gaming</span>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">Sony Playstation 4 Pro review : Worthy of an upgrade?</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- 4 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg32.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">gaming</span>
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-14 h-14 fill-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">Battlefield 1 review: The best WW1 game shooter</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- 5 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg33.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">laptop</span>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">macOS Sierra review: Mac users get a modest update this year</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- 6 --}}
                    <div class="col-span-1">
                        <a href="#">
                            <div class="w-full h-64 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)),url('assets/bg34.jpg');">
                                <span class="text-white absolute top-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">audio</span>
                                <div class="absolute bottom-4 left-2">
                                    <p class="text-white font-semibold">Bose QuietComfort 35 headphones review</p>
                                    {{-- 5Stars --}}
                                    <div class="flex">
                                        {{-- 1 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 2 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 3 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 4 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        {{-- 5 --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- MoreNews --}}
            <div class="my-12">
                <div>
                    <p class="uppercase font-semibold text-sm text-gray-700">more<span class="text-blue-500">news</span></p>
                    <div class="flex mt-1">
                        <hr class="w-10 bg-blue-500 h-[3px] rounded-full">
                        <hr class="w-full bg-gray-200 h-[3px] rounded-full">
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-8 mt-8">
                    {{-- 1 --}}
                    <div>
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg35.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">security</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Indian government feels cyber attacks heat with over 700 websites hacked in four years</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 2 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg36.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">applications</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Flipboard fights back with major change for readers</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 3 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg37.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">gear</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">How the GoPro Karma Compares to the DJI Phantom 4</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 4 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg38.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">gaming</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">This gaming smartwatch has Atari classics built right in</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 5 --}}
                    <div>
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg39.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">applications</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Microsoft Office beta testers will soon get MacBook Pro Touch Bar support</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 6 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg40.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">applications</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Browsing Pinterest is about to get as easy as snapping a pic</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 7 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: url('assets/bg41.jpg');">
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">security</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Intel meeting with Trump turned into a really awkward infomercial</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                    {{-- 8 --}}
                    <div class="">
                        <a href="#">
                            <div class="w-full h-48 bg-cover relative" style="background-image: linear-gradient(to top, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url('assets/bg42.jpg');">
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10 fill-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                                    </svg>
                                </div>
                                <span class="text-white absolute bottom-4 left-2 text-xs font-semibold px-2 text-center py-0.5 bg-blue-600 uppercase">computers</span>
                            </div>
                            <div>
                                <a href="#">
                                    <p class="text-gray-700 font-semibold hover:text-blue-500 my-3">Silicon Valley is struggling to work together against Trump’s havoc</p>
                                </a>
                                <p class="flex items-center text-gray-500 uppercase text-xs mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 fill-blue-500 mr-1" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg> September 1, 2017
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- LoadMore --}}
            <div class="flex items-center justify-between">
                <hr class="w-1/3">
                <button class="border border-gray-300 text-gray-700 hover:text-white hover:bg-blue-500 duration-200 py-1.5 w-[330px] uppercase text-xs">load more</button>
                <hr class="w-1/3">
            </div>
        </div>

    </div>

    {{-- Footer 1 --}}
    <div class="py-8 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-4 gap-14">
                <div class="col-span-1">
                    <div>
                        <a href="#">
                            <img src="assets/logofooter.png" alt="">
                        </a>
                        <p class="mt-6 cl
                        text-gray-700">We bring you the best Premium WordPress Themes that perfect for news, magazine, personal blog, etc. Check our landing page for details.
                        </p>
                    </div>
                    <div class="mt-8 text-gray-700 font-bold">
                        <p>Follow Us</p>
                        <div class="grid grid-cols-5 gap-3 mt-4">
                            {{-- Facebook --}}
                            <div class="col-span-1 p-2 bg-gray-200">
                                <a href="https://facebook.com" target="_blank" rel="external noopener nofollow" class="jeg_facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-700 mx-auto" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                            </div>
                            {{-- Twitter --}}
                            <div class="col-span-1 p-2 bg-gray-200">
                                <a href="https://twitter.com" target="_blank" rel="external noopener nofollow" class="jeg_twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-700 mx-auto" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                </a>
                            </div>
                            {{-- Instagram --}}
                            <div class="col-span-1 p-2 bg-gray-200">
                                <a href="https://instagram.com" target="_blank" rel="external noopener nofollow" class="jeg_instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-gray-700 mx-auto" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                            </div>
                            {{-- Behance --}}
                            <div class="col-span-1 p-2 bg-gray-200">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 fill-gray-700 mx-auto" viewBox="0 0 16 16">
                                        <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                                      </svg>
                                </a>
                            </div>
                            {{-- Feed --}}
                            <div class="col-span-1 p-2 bg-gray-200">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-gray-700 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z" />
                                        <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="text-blue-500 font-bold">Categories</h3>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2 mt-6">
                        {{-- Apple --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Apple</a>
                        </div>
                        {{-- Laptop --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Laptop</a>
                        </div>
                        {{-- Application --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Application</a>
                        </div>
                        {{-- Microsoft --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Microsoft</a>
                        </div>
                        {{-- Audio --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Audio</a>
                        </div>
                        {{-- Photography --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Photography</a>
                        </div>
                        {{-- Camera --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Camera</a>
                        </div>
                        {{-- Reviews --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Reviews</a>
                        </div>
                        {{-- Computers --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Computers</a>
                        </div>
                        {{-- Security --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Security</a>
                        </div>
                        {{-- Gaming --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Gaming</a>
                        </div>
                        {{-- Smartphone --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Smartphone</a>
                        </div>
                        {{-- Gear --}}
                        <div class="col-span-1 font-semibold hover:text-blue-500">
                            <a href="#">Gear</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="text-blue-500 font-bold">Categories</h3>
                    <div class="flex flex-wrap mt-6 gap-2">
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500 capitalize">apple watch 2</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">Best iPhone 7 Deals</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500 capitalize">buying guides</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">CES 2017</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">iOS 10</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">iPhone 7</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">Nintendo Switch</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">Playstation 4 Pro</span>
                        <span class="text-gray-700 duration-200 hover:text-white text-sm px-2.5 text-center py-1 bg-gray-200 hover:bg-blue-500">Silicon Valley</span>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="text-blue-500 font-bold">Newsletter</h3>
                    <div class="mt-8 space-y-4">
                        <p class="text-gray-700">
                            Get JNews's monthly newsletter direct to your inbox, sign up now.
                        </p>
                        <div class="flex items-center max-w-md mx-auto bg-white">
                            <div class="w-[70%]">
                                <input type="search" class="w-full px-4 py-2 border-y-2 border-l-2 border-gray-300" placeholder="Your email address">
                            </div>
                            <div class="w-[30%]">
                                <button type="submit" class="flex items-center font-semibold text-sm bg-blue-500 justify-center py-[12px] w-full text-white uppercase">
                                    do it
                                </button>
                            </div>
                        </div>
                        <p class="text-gray-700 text-xs">
                            Join over 200K subscribers!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer 2 --}}
    <div class="py-6">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <p class="text-gray-500 text-xs">© 2022 <a href="#" class="text-black hover:underline">JNews</a> - Premium WordPress news & magazine theme by <a href="#" class="text-black hover:underline">Jegtheme</a>.</p>
            <div class="flex space-x-2 text-gray-700 text-sm">
                <a href="#" class="hover:underline">Team</a>
                <span>/</span>
                <a href="#" class="hover:underline">Advetise</a>
                <span>/</span>
                <a href="#" class="hover:underline">FAQ</a>
                <span>/</span>
                <a href="#" class="hover:underline">Contact</a>
            </div>
        </div>
    </div>


















    {{-- FlowBiteJS --}}
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    {{-- TailwindElement --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>
