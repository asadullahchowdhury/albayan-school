<header class="header absolute w-full">
    <div class="bg-[#212E84] w-full h-5"></div>
    <div class="bg-[#19BFBE] w-full h-[45px]"></div>
    <div class="container px-4">
        {{--Top header start--}}
        <div class="top-header-btn-grp  px-5 flex gap-1 relative top-[-25px]">
            <button class="bg-white text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/twitter.svg')}}" alt="twitter">
            </button>
            <button class="bg-white text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/youtube.svg')}}" alt="youtube">
            </button>
            <button class="bg-white text-white font-bold rounded-full flex items-center">
                <img src="{{asset('/images/home/instagram.svg')}}" alt="instagram">
            </button>

            <button
                class="bg-theme-purple hover:bg-theme-purple/90 ms-4 text-white font-bold py-2 px-10 rounded-full transition-colors duration-300">
                اتصل بنا
            </button>

            <button
                class="bg-theme-purple hover:bg-theme-purple/90 ms-2 text-white font-bold py-2 px-10 rounded-full transition-colors duration-300">
                الموهوبات
            </button>

        </div>
        {{--Top header end  --}}

        {{--Main header start--}}
        <div class="main-header grid grid-cols-12 gap-4">
            <div class="col-span-9 mt-5">
                <div class="grid grid-cols-7  gap-4">
                    {{--Facilities--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-[#E87CD1] w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/facilities.svg')}}" alt="fac">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold"> مرافق البيان
                        </div>

                        <div class="w-[2px] h-5 bg-[#2E84B7] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Study--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-theme-purple w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/study.svg')}}" alt="study">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold"> أنشطة دراسية
                        </div>

                        <div class="w-[2px] h-5 bg-[#E9A870] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Honors--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-[#E16363] w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/honors.svg')}}" alt="honors">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold"> تكريم و
                            فعاليات
                        </div>

                        <div class="w-[2px] h-5 bg-[#E87CD1] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Admission--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-theme-purple w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/admission.svg')}}" alt="admission">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold"> القبول و
                            التسجيل
                        </div>

                        <div class="w-[2px] h-5 bg-[#F8CC00] absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Projects--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-[#F1B330] w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/projects.svg')}}" alt="projects">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold">المشاريع
                            التعليمية
                        </div>

                        <div class="w-[2px] h-5 bg-theme-purple absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Grades--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-[#B5D56A] w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/facilities.svg')}}" alt="fac">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold">المراحل
                            الدراسية
                        </div>

                        <div class="w-[2px] h-5 bg-primary absolute bottom-0 right-[-16px]"></div>
                    </a>

                    {{--Statement--}}
                    <a href="javascript:void(0)" class="header-item group relative justify-items-center grid">
                        <div class="bg-[#84BED6] w-[65px] h-[65px] rounded-full flex justify-center items-center">
                            <img src="{{asset('images/home/statement.svg')}}" alt="statement">
                        </div>

                        <div class="title group-hover:text-black transition text-[#777777] mt-2 font-bold">حياة البيان
                        </div>
                    </a>
                </div>
            </div>

            {{--Logo--}}
            <a href="javascript:void(0)" class="logo col-span-3 ms-auto">
                <img src="{{asset('/images/logo.png')}}" alt="logo">
            </a>
        </div>
        {{--Main header end  --}}
    </div>
</header>
