<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Oswald:wght@500&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/baotangxoviet/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/4790120988.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> -->
    <title>Bảo Tàng Xô Viết - Nghệ Tĩnh</title>
</head>
<style>
    body {
        font-family: "Oswald", sans-serif;
    }

    .tab-left {
        list-style-type: none;
        font-size: 18px;
        padding: 0;
    }

    .tab-content {
        border-bottom: 1px solid #ccc;
    }

    /* .tab-left li {
        padding: 10px 10px 10px 10px;
    } */

    .post-i {
        margin-left: 11px;
        color: #000000;
        text-decoration: none !important;
    }

    .post-img {
        list-style-type: none;
        padding: 0;

    }

    .post-img li {
        padding: 5px;
        border-bottom: 1px solid #ccc;
    }

    .reset {
        padding: 0;
        margin: 0;
    }

    .post-img img {
        width: 65px !important;
        height: 60px;
        overflow: hidden;
        background: #fbfbfb;
        border: 1px solid #d5d5d5;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        margin-top: 10px;
    }

    .box-post {
        display: flex;
    }

    .box-post p {
        width: 280px;
        margin-left: 9px;
        font-size: 18px;
    }


    .related-post {
        margin-top: 30px;
        border-top: 1px solid #ccc;
    }

    .fix-para {
        /* font-family: 'Roboto', sans-serif; */
        text-align: justify;
    }

    .cut-para {
        display: -webkit-box;
        /* Sử dụng flexible box layout */
        -webkit-box-orient: vertical;
        /* Sắp xếp các phần tử theo chiều dọc */
        -webkit-line-clamp: 3;
        /* Giới hạn số dòng hiển thị */
        overflow: hidden;
        /* Ẩn nội dung vượt quá giới hạn */
        text-overflow: ellipsis;
    }

    .related-post p {
        /* font-weight: bold; */
        width: 600px;
    }

    .content {
        padding-left: 5px;
        overflow: hidden;
        padding: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #cccc;
    }

    .fix-titlee {
        position: absolute;
        font-family: Merriweather;
        text-transform: uppercase;
        font-size: 26px;
        top: 56px;
        font-weight: bold;
        color: red;
        margin-left: 65px;
    }

    .fix-title {
        /* font-family: Merriweather; */
        text-align: justify;
    }

    .content {
        padding-left: 5px;
        overflow: hidden;
        padding: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #cccc;
    }

    .box-video {
        margin-top: 20px;
    }

    .box-video h3 {

        margin: auto;

        font-size: 20px;
        /* border-radius: 3px; */

        display: block;

    }
</style>

<body>
    <div>
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="image-container">
                    <img src="../images/banner wes 1.png" alt="" class="h-auto w-full">
                    <img src="../images/banner wes 2.png" alt="" class="h-auto w-full">
                    <img src="../images/banner wes 3.png" alt="" class="h-auto w-full">
                </div>
            </div>
        </div>

        <nav class="md:mx-auto py-4 nav">
            <div class="container1 mx-auto flex justify-between items-center mx-2 px-2">
                <!-- <img src="./img/logo.png" alt="Tailwindcss Navigation" /> -->

                <ul class="hidden md:flex space-x-6 mx-auto">
                    <!-- @foreach ($danhmuc as $dm)
                    <li><a href="/{{$dm['slug']}}" title="">{{$dm['label']}}</a></li>
                    @endforeach -->
                    <li><a href="/" class="text-white">Trang chủ</a></li>
                    @foreach($danhmuc as $dm)
                    <li class="flex relative group text-white">
                        <a href="/danh-muc/{{$dm['slug']}}" class="mr-1">{{$dm['label']}}</a>
                        @if($dm['kiemtra'] == 1)
                        <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
                        <!-- Submenu starts -->
                        <ul class="start-hov z-50 absolute item-list p-3 w-52 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg  mt-5">
                            @foreach($dm['children'] as $dmc)
                            <li class="text-sm hover:text-black leading-8">
                                <a href="/danh-muc/{{$dmc['slug']}}">{{$dmc['label']}}</a>
                            </li>
                            @endforeach

                        </ul>
                        @endif
                        <!-- Submenu ends -->
                    </li>
                    @endforeach


                    <li id="search" class="relative group text-white">
                        <i class="fa-solid fa-search fa-sm pt-3 search-trigger cursor-pointer"></i>
                        <!-- Biểu tượng tìm kiếm -->
                        <div class="search-box hidden absolute top-10 bg-white p-2 rounded-md shadow-md z-10 pointer">
                            <form action="{{ route('baotangxoviet.posts.searchpost')}}" method="get">
                                @csrf
                                <input type="text" name="search" class="border border-gray-300 text-black" placeholder=" Nhập từ khóa" />
                                <button class="bg-blue-300 px-2 py-1 rounded-md" type="submit">
                                    Tìm kiếm
                                </button>
                            </form>
                        </div>
                    </li>


                </ul>

                <!-- <a href="#" class="bg-red-400 px-5 py-1 rounded-3xl hover:bg-red-500 text-white hidden md:flex" role="button">Sign In</a> -->

                <!-- Mobile menu icon -->
                <button id="mobile-icon" class="lg:hidden fixed">
                    <i onclick="changeIcon(this)" class="fa-solid fa-bars"></i>
                </button>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden flex justify-center mt-3 w-full">
                <div id="mobile-menu" class="mobile-menu absolute top-23 w-full">
                    <!-- add hidden here later -->
                    <ul class="bg-gray-100 shadow-lg leading-9 font-bold h-auto mt-5">
                        <li class="border-b-2 border-t-2 border-white hover:bg-red-400 hover:text-white pl-4">
                            <a href="https://google.com" class="block pl-7 text-white">Trang chủ</a>
                        </li>
                        <li class="border-b-2 border-white hover:text-white">
                            <a href="#" class="block pl-11 text-white">Giới thiệu <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a>

                            <!-- Submenu starts -->
                            <ul class="bg-white text-gray-800 w-full">
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Lời chào của Bảo tàng Xô Viết Nghệ Tĩnh</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Chức năng nhiệm vụ của Bảo tàng Xô Viết Nghệ Tĩnh</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Quá trình hình thành và phát triển của Bảo tàng Xô Viết Nghệ Tĩnh</a>
                                </li>
                            </ul>
                            <!-- Submenu ends -->
                        </li>
                        <li class="border-b-2 border-white hover:text-white">
                            <a href="/bai-viet" class="block pl-11 text-white">Tin tức <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a>

                            <!-- Submenu starts -->
                            <ul class="bg-white text-gray-800 w-full">
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tin hoạt động</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tin trong nước</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tin nước ngoài</a>
                                </li>
                            </ul>
                            <!-- Submenu ends -->
                        </li>

                        <li class="border-b-2 border-white hover:text-white">
                            <a href="#" class="block pl-11 text-white">Hệ thống trưng bày <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a>

                            <!-- Submenu starts -->
                            <ul class="bg-white text-gray-800 w-full">
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Các phòng trưng bày</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Sưu tập hiện vật</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tin trong nước</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tin nước ngoài</a>
                                </li>
                            </ul>
                            <!-- Submenu ends -->
                        </li>

                        <li class="border-b-2 border-white hover:text-white">
                            <a href="#" class="block pl-11 text-white">Nghiên cứu khoa học <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a>

                            <!-- Submenu starts -->
                            <ul class="bg-white text-gray-800 w-full">
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Tọa đàm</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Hội thảo</a>
                                </li>
                                <li class="text-sm leading-8 font-normal hover:bg-slate-200">
                                    <a class="block pl-16 text-white" href="#">Chuyên đề</a>
                                </li>
                            </ul>
                            <!-- Submenu ends -->
                        </li>
                        <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4">
                            <a href="#" class="block pl-7 text-white">Công khai tài chính</a>
                        </li>
                        <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4">
                            <a href="#" class="block pl-7 text-white">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>

    @yield('content')


    <footer class="mt-5">
        <div class="grid grid-cols-12" >
            <div class="col-span-12 bg-footer" style="height: 275px;">
                <div class="container1 mx-auto">
                    <div class="grid grid-cols-12" >
                        <div class="sm:col-span-4 col-span-12 mt-10 mx-auto  " >
                            <div class="flex mb-5 sm:ml-0 ml-3 justify-center" >
                                <a href="">
                                    <img src="../images/a7bfc3d3-ae89-4d32-8223-d567b38a7019-removebg-preview.png" class="" style="height: 70px" alt="">
                                </a>
                                <!-- <div class="pl-3 uppercase font-medium text-white text-lg mt-5">
                                            Bảo tàng xô viết nghệ tĩnh
                                   
                                </div> -->
                            </div>
                            <h2 class="mb-2 sm:ml-0 ml-5 text-gray-600" ><i class="fa-solid fa-location-dot mr-2 "></i>Số 10, đường Đào Tấn, thành phố Vinh, tỉnh Nghệ An</h2>

                            <h2 class="mb-2 sm:ml-0 ml-5 text-gray-600"><i class="fa-solid fa-phone mr-2 "></i>0988.684.510 - 0982.599.345</h2>

                            <h2 class="mb-2 sm:ml-0 ml-5 text-gray-600"><i class="fa-solid fa-envelope mr-2 "></i>Email: huyentrang20385@gmail.com</h2>
                        </div>
                        <div class="sm:col-span-4 col-span-12 mt-5">
                            <div class="follow-footer">
                                <div class="museum-tripadvisor">
                                    <a href="" target="_blank">
                                        <img src="./images/vct.jpg" alt="" style="height: 150px"/>
                                    </a>
                                </div>
                                <h3 class="title-follow-footer text-gray-500">
                                    Theo dõi chúng tôi
                                </h3>
                                <div class="social-footer text-gray-500">
                                    <a href="" target="_blank"><i class="fa-brands fa-facebook-f mr-6 mt-5" ></i></a>
                                    <a href="" target="_blank"><i class="fa-brands fa-twitter mr-6 mt-5"></i></a>
                                    <a href="" target="_blank"><i class="fa-brands fa-pinterest-p mr-6 mt-5"></i></a>
                                    <a href="" target="_blank"><i class="fa-brands fa-youtube mr-6 mt-5"></i></a>
                                </div>
                            </div>

                
                        </div>
                        <div class="sm:col-span-4 col-span-12 px-3   dark:bg-gray-800 sm:rounded-lg sm:block hidden ml-10">
                            <div class="card ">
                                <!-- <h5 class="card-title fix-title text-center font-weight-bold text-danger">
                                        Bản đồ </h5> -->
                                <div class="mt-5">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.8260164523394!2d105.66676880985801!3d18.671801764465872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce66654d5451%3A0xbf080c1b58101bca!2zQuG6o28gdMOgbmcgWMO0IFZp4bq_dCBOZ2jhu4cgVMSpbmg!5e0!3m2!1svi!2s!4v1690445648852!5m2!1svi!2s" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scrollToTopBtn" class="hidden" onclick="scrollToTop()">
            <i class="fa fa-angle-up items-center"></i>
        </div>
    </footer>

    <!-- JSSS -->
    <script>
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollToTopBtn").style.display = "block";
            } else {
                document.getElementById("scrollToTopBtn").style.display = "none";
            }
        }

        function scrollToTop() {
            const scrollDuration = 700; // Thời gian cuộn lên đầu trang (ms)
            const scrollStep = -window.scrollY / (scrollDuration / 15);

            const scrollInterval = setInterval(function () {
                if (window.scrollY !== 0) {
                    window.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15);
        }

    </script>
    <script>
        const searchTrigger =
            document.querySelectorAll(".search-trigger");

        searchTrigger.forEach((trigger) => {
            trigger.addEventListener("click", () => {
                trigger.parentElement.classList.toggle("show-search-box");
            });
        });
    </script>
    <script>
        let carousels = document.querySelectorAll(".js-carousel");

        carousels.forEach((carousel) => {
            let carouselViewPort = carousel.querySelector(".js-carousel-viewport"),
                carouselViewPortWidth = carousel.clientWidth,
                carouselItems = carouselViewPort.children,
                currentSlide = 0,
                itemsInViewDesktop = 4, // Number of items to show on desktop
                itemsInViewMobile = 1, // Number of items to show on mobile
                maxSlides = Math.ceil(carouselItems.length / itemsInViewDesktop);

            function goToSlide(slideIndex) {
                currentSlide = slideIndex % maxSlides;
                carouselViewPort.scrollTo({
                    left: currentSlide * carouselViewPortWidth,
                    behavior: "smooth",
                });
            }

            function options(direction) {
                if (direction === "right") {
                    goToSlide(currentSlide + 1);
                } else if (direction === "left") {
                    goToSlide(currentSlide - 1);
                }
            }

            carousel.addEventListener("mouseover", () => {
                clearInterval(carouselInterval);
            });

            carousel.addEventListener("mouseout", () => {
                startCarousel();
            });

            let carouselInterval;

            function startCarousel() {
                carouselInterval = setInterval(() => {
                    options("right");
                }, 5000); // Change slide every 5 seconds
            }

            startCarousel();

            let carouselBtnRight = carousel.querySelector(".js-carousel-btn-right");
            let carouselBtnLeft = carousel.querySelector(".js-carousel-btn-left");

            carouselBtnRight.addEventListener("click", () => {
                options("right");
            });

            carouselBtnLeft.addEventListener("click", () => {
                options("left");
            });

            // Adjust the number of items to show based on screen size
            function adjustItemsInView() {
                if (window.innerWidth <= 768) {
                    maxSlides = carouselItems.length; // Show all items on mobile
                } else {
                    maxSlides = Math.ceil(carouselItems.length / itemsInViewDesktop);
                }
                goToSlide(0); // Reset to the first slide
            }

            // Call the adjustItemsInView function initially and on window resize
            adjustItemsInView();
            window.addEventListener("resize", adjustItemsInView);
        });
    </script>
    <script>
        const mobile_icon = document.getElementById("mobile-icon");
        const mobile_menu = document.getElementById("mobile-menu");
        const hamburger_icon = document.querySelector("#mobile-icon i");

        function openCloseMenu() {
            mobile_menu.classList.toggle("block");
            mobile_menu.classList.toggle("active");
        }

        function changeIcon(icon) {
            icon.classList.toggle("fa-xmark");
        }

        mobile_icon.addEventListener("click", openCloseMenu);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var images = document.querySelectorAll(".image-container img"); // Danh sách các ảnh
            var currentIndex = 0;

            // Hàm để thay đổi ảnh
            function changeImage() {
                var currentImage = images[currentIndex];
                currentImage.style.opacity = 0; // Ảnh hiện tại mờ đi

                currentIndex++;
                if (currentIndex >= images.length) {
                    currentIndex = 0;
                }

                var nextImage = images[currentIndex];
                nextImage.style.opacity = 1; // Ảnh tiếp theo trở nên rõ nét
            }



            // Tự động chuyển ảnh sau một khoảng thời gian
            setInterval(changeImage, 3000); // Chuyển ảnh sau mỗi 2 giây (thay đổi thời gian tùy ý)
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize Owl Carousel
            $("#owl-hot-news").owlCarousel({
                items: 1, // Number of items to display
                loop: true, // Enable looping
                autoplay: true, // Enable autoplay
                autoplayTimeout: 5000, // Autoplay interval in milliseconds
                autoplayHoverPause: true, // Pause autoplay on hover
                nav: false, // Show navigation arrows
                dots: false, // Hide navigation dots
            });

            $(".owl-prev").click(function() {
                $("#owl-hot-news").trigger("prev.owl.carousel");
            });

            // Handle Next Button Click
            $(".owl-next").click(function() {
                $("#owl-hot-news").trigger("next.owl.carousel");
            });
        });
    </script>
    <script>
        // Function to animate the numbers
        function animateNumber(element, targetNumber) {
            const duration = 10000; // Animation duration in milliseconds
            const stepTime = Math.abs(Math.floor(duration / targetNumber));

            let currentNumber = 0;
            const interval = setInterval(() => {
                currentNumber += 1;
                element.textContent = currentNumber.toLocaleString(); // Format with commas

                if (currentNumber >= targetNumber) {
                    clearInterval(interval);
                }
            }, stepTime);
        }

        // Function to start the animations
        function startAnimations() {
            const animateElements = document.querySelectorAll('.animate-number');
            animateElements.forEach((element) => {
                const targetNumber = parseInt(element.getAttribute('data-number').replace(',', '')); // Remove commas from the data-number attribute
                element.setAttribute('data-animated', 'false'); // Initialize the data-animated attribute
            });
        }

        // Check if an element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to handle scroll event
        function handleScroll() {
            const animateElements = document.querySelectorAll('.animate-number');
            animateElements.forEach((element) => {
                if (isInViewport(element) && element.getAttribute('data-animated') === 'false') {
                    const targetNumber = parseInt(element.getAttribute('data-number').replace(',', ''));
                    animateNumber(element, targetNumber);
                    element.setAttribute('data-animated', 'true'); // Mark the element as animated
                }
            });
        }

        // Attach scroll event listener
        window.addEventListener('scroll', handleScroll);
        // Wait for the page to load before initializing animations
        window.addEventListener('load', startAnimations);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector("[data-carousel]");
            const carouselItems = document.querySelectorAll("[data-carousel-item]");
            const indicators = document.querySelectorAll("[data-carousel-slide-to]");
            const prevButton = document.querySelector("[data-carousel-prev]");
            const nextButton = document.querySelector("[data-carousel-next]");

            let currentSlide = 0;
            let interval;

            function showSlide(index) {
                carouselItems.forEach((item, idx) => {
                    if (idx === index) {
                        item.classList.remove("hidden");
                    } else {
                        item.classList.add("hidden");
                    }
                });

                indicators.forEach((indicator, idx) => {
                    if (idx === index) {
                        indicator.setAttribute("aria-current", "true");
                    } else {
                        indicator.setAttribute("aria-current", "false");
                    }
                });
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
                showSlide(currentSlide);
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % carouselItems.length;
                showSlide(currentSlide);
            }

            function startAutoplay() {
                interval = setInterval(() => {
                    nextSlide();
                }, 4000); // Đổi slide sau mỗi 5 giây
            }

            function stopAutoplay() {
                clearInterval(interval);
            }

            prevButton.addEventListener("click", () => {
                stopAutoplay();
                prevSlide();
            });

            nextButton.addEventListener("click", () => {
                stopAutoplay();
                nextSlide();
            });

            indicators.forEach((indicator, idx) => {
                indicator.addEventListener("click", () => {
                    stopAutoplay();
                    showSlide(idx);
                    currentSlide = idx;
                });
            });

            // Hiển thị slide đầu tiên khi tải trang và bắt đầu autoplay
            showSlide(currentSlide);
            startAutoplay();
        });
    </script>
    <script>
        var mySwiper = new Swiper('.mySwiper', {
            effect: 'coverflow', // You can adjust the effect based on your preference
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 100,
                depth: 200,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000, // Delay between slides in milliseconds
            },

        });
    </script>
    <script src="node_modules/@material-tailwind/html/scripts/tabs.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
    <!-- End JS -->


</body>

</html>