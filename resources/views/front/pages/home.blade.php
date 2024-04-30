@extends('front.app')
@section('content')

    <div class="home">

        <!--Hero section start-->
        <div class="hero-section pt-[280px] w-full md:h-[75vh] bg-bottom bg-cover bg-no-repeat"
             style="background-image: url({{asset('images/hero-bg.png')}})">
            <div class="container md:px-10 px-5 relative w-full h-full ">

                <!--Hero slider start-->
                <div class="hero-slider-wrapper w-full">
                    <div class="owl-carousel w-full hero-slider">
                        <div class="slider-item w-full bg-cover bg-center leading-3 h-[435px] rounded-t-[50px] place-items-center flex flex-col justify-center"
                             style="background-image: url({{asset('images/slider-1.png')}})">
                            <div class="hero-title font-bold lg:text-9xl md:text-8xl text-7xl text-[#B5D56A]">40</div>
                            <p class="text-theme-purple lg:text-[38px] md:text-[28px] font-bold">عامًا من العطاء</p>
                        </div>
                         <div class="slider-item w-full bg-cover bg-center leading-3 h-[435px] rounded-t-[50px] place-items-center flex flex-col justify-center"
                             style="background-image: url({{asset('images/slider-1.png')}})">
                            <div class="hero-title font-bold lg:text-9xl md:text-8xl text-7xl text-[#B5D56A]">40</div>
                            <p class="text-theme-purple lg:text-[38px] md:text-[28px] font-bold">عامًا من العطاء</p>
                        </div>
                         <div class="slider-item w-full bg-cover bg-center leading-3 h-[435px] rounded-t-[50px] place-items-center flex flex-col justify-center"
                             style="background-image: url({{asset('images/slider-1.png')}})">
                            <div class="hero-title font-bold lg:text-9xl md:text-8xl text-7xl text-[#B5D56A]">40</div>
                            <p class="text-theme-purple lg:text-[38px] md:text-[28px] font-bold">عامًا من العطاء</p>
                        </div>
                         <div class="slider-item w-full bg-cover bg-center leading-3 h-[435px] rounded-t-[50px] place-items-center flex flex-col justify-center"
                             style="background-image: url({{asset('images/slider-1.png')}})">
                            <div class="hero-title font-bold lg:text-9xl md:text-8xl text-7xl text-[#B5D56A]">40</div>
                            <p class="text-theme-purple lg:text-[38px] md:text-[28px] font-bold">عامًا من العطاء</p>
                        </div>
                    </div>
                </div>

                <!--Hero slider end  -->


                <div
                    class="bg-theme-purple z-10 relative text-end ps-10 md:pe-20 pe-10 md:scale-100 scale-105 py-6 rounded-[16px] bottom-[40px] md:left-[-40px] md:block grid gap-5">
                    <div class="font-bold text-white md:text-[20px]">مطلوب معلمة رياضات لقسم المتوسط</div>
                    <div
                        class="bg-[#B5D56A] text-[#2E84B7] fw-bold md:text-[28px] px-6 py-[10px] rounded-[16px] md:absolute md:end-[-70px] top-[10px]">
                        الجديد
                    </div>
                </div>
            </div>
        </div>
        <!--Hero section end  -->

        <!--Description section start-->
        <div class="container md:px-10 px-5 md:my-20 my-10">
            <div class="grid xl:grid-cols-2 xl:gap-10 gap-5">
                <div class="">
                    <img class="rounded-[42px] w-full" src="{{asset('images/image-1.png')}}" alt="img1">
                </div>

                <p class="text-end xl:text-[20px] font-bold xl:mt-10">
                    الرحمن، الذي علم القرآن وخلق الإنسان، منحه نعمة البيان التي تعزز مكانته في الدنيا
                    والآخرة وتظهر عظمة الخالق في تعليمه أساليب اللغة والتعبير. البيان يجمع بين
                    القدرات اللغوية لترجمة المعارف بوضوح، السلوكية لعكس شخصية متميزة، العلمية
                    لتحويل العلوم إلى تطبيقات عملية، والتفاعلية للتعامل مع مختلف شرائح المجتمع.
                    مدارس البيان، التي تفتح أبوابها سنويًا لتربية جيل واعد، مستلهمة من آية قرآنية تحث
                    على الشكر لنعم الله، تُظهر الشكر كدافع لتأسيس هذه المدارس وتربية الأجيال في
                    عالم متغير
                </p>
            </div>
        </div>
        <!--Description section end  -->

        <!--Facilities sections start-->
        <div class="container md:my-20 xl:px-0 px-10">
            <div class="grid lg:grid-cols-3 md:mt-20 mt-10">
                <div
                    class="grid justify-items-center align-items-center bg-primary sm:px-20 px-5 py-5 lg:py-8  text-center rounded-[20px] text-white">
                    <div class="icon mb-4"><img src="{{asset('images/home/diamond.svg')}}" alt="diamond"></div>
                    <h4 class="text-[29px] font-semibold mb-5">قيمنا</h4>
                    <p>الإحلاص – الاستقامة – العدل - المسؤولية المجتمعية - الإبداع – المشورة</p>
                </div>

                <div
                    class="grid lg:scale-[1.2] scale-[1.1] shadow-2xl justify-items-center align-items-center bg-[#D4E5EA] sm:px-20 px-5 py-5 lg:py-8  text-center rounded-[20px] text-theme-purple">
                    <div class="icon mb-4"><img src="{{asset('images/home/eye.svg')}}" alt="eye"></div>
                    <h4 class="text-[29px] font-semibold mb-5">رؤيتنا</h4>
                    <p>مجمع تربوي علمي متميز ضمن منظومة
                        إسلامية عالمية </p>
                </div>

                <div
                    class="grid justify-items-center align-items-center bg-primary sm:px-20 px-5 py-5 lg:py-8  text-center rounded-[20px] text-white">
                    <div class="icon mb-4"><img src="{{asset('images/home/diamond.svg')}}" alt="diamond"></div>
                    <h4 class="text-[29px] font-semibold mb-5">قيمنا</h4>
                    <p>الإحلاص – الاستقامة – العدل - المسؤولية المجتمعية - الإبداع – المشورة</p>
                </div>
            </div>
        </div>
        <!--Facilities sections end  -->

        <!--Summary section start-->
        <div class="container-fluid bg-primary md:my-20 my-10">
            <div class="container py-10 md:px-10 px-5">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4">

                    <div class="bg-white rounded-[20px] grid grid-cols-3 gap-4 text-end p-4">
                        <div class="text-[#E9A870] col-span-2">
                            <h3 class="text-[40px] font-bold leading-[1]">9999</h3>
                            <p class="text-[23px] font-semibold">عدد الخريجيون</p>
                        </div>
                        <div class="grid justify-content-center place-items-center">
                            <img src="{{asset('images/home/graduation-hat-orange.svg')}}" alt="hat">
                        </div>
                    </div>

                    <div class="bg-white rounded-[20px] grid grid-cols-3 gap-4 text-end p-4">
                        <div class="text-[#E16363] col-span-2">
                            <h3 class="text-[40px] font-bold leading-[1]">4568</h3>
                            <p class="text-[23px] font-semibold">البرامج التعليمية</p>
                        </div>
                        <div class="grid justify-content-center place-items-center">
                            <img src="{{asset('images/home/rating.svg')}}" alt="rating">
                        </div>
                    </div>

                    <div class="bg-white rounded-[20px] grid grid-cols-3 gap-4 text-end p-4">
                        <div class="text-theme-purple col-span-2">
                            <h3 class="text-[40px] font-bold leading-[1]">453</h3>
                            <p class="text-[23px] font-semibold">عدد المعلمين</p>
                        </div>
                        <div class="grid justify-content-center place-items-center">
                            <img src="{{asset('images/home/teacher.svg')}}" alt="hat">
                        </div>
                    </div>

                    <div class="bg-white rounded-[20px] grid grid-cols-3 gap-4 text-end p-4">
                        <div class="text-primary col-span-2">
                            <h3 class="text-[40px] font-bold leading-[1]">7856</h3>
                            <p class="text-[23px] font-semibold">إجمالي الطلاب</p>
                        </div>
                        <div class="grid justify-content-center place-items-center">
                            <img src="{{asset('images/home/table.svg')}}" alt="table">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Summary section end  -->

        <!--Services section start-->
        <div class="container md:px-10 px-5 md:my-20 my-10">
            <div class="text-center">
                <h1 class="font-bold md:text-[40px] text-[30px] text-theme-purple mb-5">الخدمات الالكترونية</h1>
            </div>


            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4">
                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#F0C24B] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/result.svg')}}" alt="result">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">النتائج
                        الدراسية</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#E16363] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/library.svg')}}" alt="library">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">المكتبة
                        الإلكترونية</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#E9A870] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/book.svg')}}" alt="book">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">المناهج
                        التعليمية</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#B5D56A] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/user-green.svg')}}" alt="user-green">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">التعليم
                        الإلكتروني</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-primary text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/flag.svg')}}" alt="flag">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">American
                        Diploma</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-theme-purple text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/globe.svg')}}" alt="globe">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">English
                        Department</h1>
                </div>

                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#E87CD1] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/graduation-hat-pink.svg')}}" alt="graduation-hat-pink">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">برنامج الخريجات</h1>
                </div>


                <div class="p-3 grid grid-cols-3 text-white rounded-[36px] place-items-center bg-[#84BED6] text-end">
                    <div class="bg-white w-[80px] h-[80px] rounded-full grid place-items-center">
                        <img src="{{asset('images/home/question.svg')}}" alt="question">
                    </div>
                    <h1 class="font-bold lg:text-[30px] md:text-[25px] text-[20px] pe-3 col-span-2">بنك الأسئلة</h1>
                </div>
            </div>
        </div>
        <!--Services section end  -->

        <!--Blog/ News section start-->
        <div class="container-fluid md:p-10 p-5 bg-[#DAEBF0]">
            <div class="container md:p-10">

                <div class="text-center relative lg:block grid grid-cols-3">
                    <button type="button"
                            class="bg-primary hover:bg-primary/80 transition-all  text-white font-bold py-4 md:px-10 px-3 rounded-full lg:absolute start-0 lg:block lg:order-1 order-2 sm:col-span-1 col-span-2 lg:mb-0 mb-5">
                        المزيد من الأخبار
                    </button>
                    <h1 class="font-bold md:text-[40px] text-[30px] text-theme-purple mb-5 lg:order-2 order-1 col-span-3">
                        الخدمات الالكترونية</h1>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 lg:gap-10 gap-5">

                    <div class="each-blog rounded-[36px] group lg:mb-0 mb-[-30px]">
                        <div class="blog-content rounded-[36px] overflow-hidden relative">
                            <img
                                class="w-full group-hover:scale-[1.2] duration-500 transition-all h-[320px] object-cover"
                                src="{{asset('images/news-1.png')}}" alt="news1">
                            <div
                                class="bg-[#E9A870] p-4 absolute top-[20px] left-[20px] w-[90px] h-[90px] rounded-2xl font-bold text-white text-lg text-center leading-5">
                                30 Aug 2024
                            </div>
                        </div>

                        <button type="button"
                                class="bg-[#E9A870] hover:bg-[#CF874C] transition-all text-white font-bold py-4 px-10 rounded-full w-full relative top-[-30px]">
                            مبارك لقسم المسار الدولي
                        </button>
                    </div>

                    <div class="each-blog rounded-[36px] group lg:mb-0 mb-[-30px]">
                        <div class="blog-content rounded-[36px] overflow-hidden relative">
                            <img
                                class="w-full group-hover:scale-[1.2] duration-500 transition-all h-[320px] object-cover"
                                src="{{asset('images/news-2.png')}}" alt="news">
                            <div
                                class="bg-[#2E84B7] p-4 absolute top-[20px] left-[20px] w-[90px] h-[90px] rounded-2xl font-bold text-white text-lg text-center leading-5">
                                30 Aug 2024
                            </div>
                        </div>

                        <button type="button"
                                class="bg-[#2E84B7] hover:bg-[#2c78a5] transition-all text-white font-bold py-4 px-10 rounded-full w-full relative top-[-30px]">
                            الاختبارات الوطنية (نافس)
                        </button>
                    </div>

                    <div class="each-blog rounded-[36px] group lg:mb-0 mb-[-30px]">
                        <div class="blog-content rounded-[36px] overflow-hidden relative">
                            <img
                                class="w-full group-hover:scale-[1.2] duration-500 transition-all h-[320px] object-cover"
                                src="{{asset('images/news-3.png')}}" alt="news1">
                            <div
                                class="bg-[#E87CD1] p-4 absolute top-[20px] left-[20px] w-[90px] h-[90px] rounded-2xl font-bold text-white text-lg text-center leading-5">
                                30 Aug 2024
                            </div>
                        </div>

                        <button type="button"
                                class="bg-[#E87CD1] hover:bg-[#d46cbe] transition-all text-white font-bold py-4 px-10 rounded-full w-full relative top-[-30px]">
                            جدول الاختبار النصفي
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Blog/ News section end  -->

        <!--Certificate section start-->
        <div class="container lg:my-10 my-10 px-10">
            <div class="text-center">
                <h1 class="font-bold md:text-[40px] text-[30px] text-theme-purple">الخدمات الالكترونية</h1>
            </div>

            <div class="certificate-slider-wrapper w-full sm:px-10 px-5">
                <div class="certificate-slider owl-carousel grid gap-5 grid-cols-4">
                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-1.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#EE3224] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                فازت مدارس البيان بالمركز الثاني على مستوى المملكة في مسابقة روبوت عسير (VEX 2013)
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-2.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#EF6F21] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">شهادة الآيزو</div>
                            <p>
                                حصول البيان على تجديد شهادة الآبزو لمدة 3 سنوات
                                2022 - 2025
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-3.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#7E7E7E] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                حصول البيان على شهادة الاعتماد
                                الأكاديمي لمدة 5 سنوات
                                2023 - 2028
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-4.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#5A4643] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                بجائزة التربية والتعليم للتميز
                                عام 1432هـ - 2011م
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-1.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#EE3224] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                فازت مدارس البيان بالمركز الثاني على مستوى المملكة في مسابقة روبوت عسير (VEX 2013)
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-2.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#EF6F21] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">شهادة الآيزو</div>
                            <p>
                                حصول البيان على تجديد شهادة الآبزو لمدة 3 سنوات
                                2022 - 2025
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-3.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#7E7E7E] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                حصول البيان على شهادة الاعتماد
                                الأكاديمي لمدة 5 سنوات
                                2023 - 2028
                            </p>
                        </div>
                    </div>

                    <div class="each-certificate">
                        <div
                            class="certificate-img rounded-[20px] p-3 bg-[#EFF6F8] grid place-items-center mx-5 relative top-[35px]">
                            <img class="w-[165px] h-[100px] object-contain" src="{{asset('images/certificate-4.png')}}"
                                 alt="">
                        </div>
                        <div
                            class="certificate-content min-h-[180px] pt-10 p-3 bg-[#5A4643] rounded-[20px] text-white text-end">
                            <div class="font-bold text-[19px] mb-2">مسابقة روبوت عسير</div>
                            <p>
                                بجائزة التربية والتعليم للتميز
                                عام 1432هـ - 2011م
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Certificate section end  -->


    </div>

    <script>
        $(document).ready(function () {
            $('.hero-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                items: 1
            })

            $('.certificate-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navText:[
                    `<img src="{{asset('images/home/chevron-p.svg')}}" alt=""/>`,
                    `<img class="rotate-180" src="{{asset('images/home/chevron-p.svg')}}" alt=""/>`
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1023: {
                        items: 3
                    },
                    1024: {
                        items: 4
                    }
                }
            })
        });


    </script>
@endsection
