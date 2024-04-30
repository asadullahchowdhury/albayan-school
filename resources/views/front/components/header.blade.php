<header class="header absolute w-full">
    <div class="bg-[#212E84] w-full h-5"></div>
    <div class="bg-[#19BFBE] w-full h-[45px]"></div>
    <div class="container px-4">
        {{--Top header start--}}
        <div class="top-header-btn-grp  sm:px-5 flex gap-1 relative top-[-25px]">
            <button class="bg-white sm:w-[45px] w-[40px] text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/twitter.svg')}}" alt="twitter">
            </button>
            <button class="bg-white sm:w-[45px] w-[40px] text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/youtube.svg')}}" alt="youtube">
            </button>
            <button class="bg-white sm:w-[45px] w-[40px] text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/instagram.svg')}}" alt="instagram">
            </button>

            <button
                class="bg-theme-purple hover:bg-theme-purple/90 ms-4 text-white font-bold py-2 sm:px-10 px-3 sm:text-base text-sm rounded-full transition-colors duration-300">
                اتصل بنا
            </button>

            <button
                class="bg-theme-purple hover:bg-theme-purple/90 ms-2 text-white font-bold py-2 sm:px-10 px-3 sm:text-base text-sm rounded-full transition-colors duration-300">
                الموهوبات
            </button>

        </div>
        {{--Top header end  --}}

        {{--Main header start--}}
        <div class="main-header grid grid-cols-12 gap-4">
            <div class="xl:col-span-9 lg:col-span-10 col-span-3 xl:mt-5">
                <div class="lg:grid hidden grid-cols-7 xl:gap-4 gap-3">
                    {{--Facilities--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-[#E87CD1] 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/facilities.svg')}}" alt="fac">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            مرافق البيان
                        </div>

                        <div class="xl:w-[2px] h-5 bg-[#2E84B7] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Study--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-theme-purple 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/study.svg')}}" alt="study">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            أنشطة دراسية
                        </div>

                        <div class="xl:w-[2px] h-5 bg-[#E9A870] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Honors--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-[#E16363] 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/honors.svg')}}" alt="honors">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            تكريم و
                            فعاليات
                        </div>

                        <div class="xl:w-[2px] h-5 bg-[#E87CD1] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Admission--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-theme-purple 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/admission.svg')}}" alt="admission">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            القبول و
                            التسجيل
                        </div>

                        <div class="xl:w-[2px] h-5 bg-[#F8CC00] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Projects--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-[#F1B330] 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/projects.svg')}}" alt="projects">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            المشاريع
                            التعليمية
                        </div>

                        <div class="xl:w-[2px] h-5 bg-theme-purple absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Grades--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-[#B5D56A] 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/facilities.svg')}}" alt="fac">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            المراحل
                            الدراسية
                        </div>

                        <div class="xl:w-[2px] h-5 bg-primary absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Statement--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div
                            class="bg-[#84BED6] 2xl:w-[65px] xl:w-[60px] 2xl:h-[65px]  xl:h-[60px] lg:w-[50px] lg:h-[50px] rounded-full flex justify-center items-center">
                            <img class="xl:w-[35px] xl:h-[35px] w-[25px] h-[25px]"
                                 src="{{asset('images/home/statement.svg')}}" alt="statement">
                        </div>

                        <div
                            class="title 2xl:text-base text-sm group-hover:text-black transition text-[#777777] mt-2 font-bold">
                            حياة البيان
                        </div>
                    </a>
                </div>

                <div class="lg:hidden">
                    <!-- Sidebar Toggle Button -->
                    <button class="bg-primary/60 shadow-xl hover:shadow-2xl transition-all duration-300 hover:bg-primary/80 text-white px-4 py-2 mt-4 ml-4 rounded-md focus:outline-none" onclick="navBar()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

            </div>

            {{--Logo--}}
            <a href="javascript:void(0)" class="logo xl:col-span-3 lg:col-span-2 col-span-9 ms-auto ">
                <img class="" src="{{asset('/images/logo.png')}}" alt="logo">
            </a>
        </div>
        {{--Main header end  --}}


    </div>

    <!-- Sidenav  start-->
    <div
        class="sidenav bg-theme-purple/90 text-center fixed top-0 bottom-0 left-[-100%] transition-all duration-300 text-white h-full w-full z-20 lg:hidden">
        <div class="p-4">
            <h1 class="text-xl inline-block font-semibold">
                {{--Logo--}}
                <a href="javascript:void(0)" class="logo inline">
                    <img src="{{asset('/images/home/logo-white-text.svg')}}" alt="logo">
                </a></h1>

            <a class="absolute top-3 p-3 end-3 hover:-rotate-180 transition-all duration-300" href="javascript:void(0)"
               onclick="navBar()">
                <img class="w-10" src="{{asset('images/home/x.svg')}}" alt="x">
            </a>

        </div>
        <ul class="grid sm:grid-cols-3 justify-center grid-cols-2 gap-5 overflow-auto p-4">
            {{--Facilities--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-[#E87CD1] w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="w-[25px] h-[25px]" src="{{asset('images/home/facilities.svg')}}" alt="fac">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold"> مرافق البيان
                </div>
            </a>

            {{--Study--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-theme-purple w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="xl:25px] h-[25px]" src="{{asset('images/home/study.svg')}}" alt="study">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold"> أنشطة دراسية
                </div>
            </a>

            {{--Honors--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-[#E16363] w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="w-[25px] h-[25px]" src="{{asset('images/home/honors.svg')}}" alt="honors">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold"> تكريم و
                    فعاليات
                </div>
            </a>

            {{--Admission--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-theme-purple w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="xl:25px] h-[25px]" src="{{asset('images/home/admission.svg')}}" alt="admission">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold"> القبول و
                    التسجيل
                </div>
            </a>

            {{--Projects--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-[#F1B330] w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="w-[25px] h-[25px]" src="{{asset('images/home/projects.svg')}}" alt="projects">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold">المشاريع
                    التعليمية
                </div>
            </a>

            {{--Grades--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid">
                <div class="bg-[#B5D56A] w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="w-[25px] h-[25px]" src="{{asset('images/home/facilities.svg')}}" alt="fac">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold">المراحل
                    الدراسية
                </div>
            </a>

            {{--Statement--}}
            <a href="javascript:void(0)" class="header-item mb-3 group relative justify-items-center grid ">
                <div class="bg-[#84BED6] w-[50px] h-[50px] rounded-full flex justify-center items-center">
                    <img class="w-[25px] h-[25px]" src="{{asset('images/home/statement.svg')}}" alt="statement">
                </div>

                <div class="title text-sm group-hover:text-primary transition text-white mt-2 font-bold">حياة البيان
                </div>
            </a>
        </ul>
    </div>
    <!-- Sidenav  end  -->

</header>

<script>

    function navBar() {
        if ($('.sidenav').hasClass('left-0')) {
            $('.sidenav').removeClass('left-0')
            $('.sidenav').addClass('left-[-100%]')
        } else {
            $('.sidenav').addClass('left-0')
            $('.sidenav').removeClass('left-[-100%]')
        }
    }

</script>
