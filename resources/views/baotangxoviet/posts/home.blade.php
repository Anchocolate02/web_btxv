@extends('baotangxoviet.views.layouts.trangchu')
@section('content')
<section class="topnews">
    <div class="container1 mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="jconveyor-wrap">
                    <div class="jctkr-label">Nổi bật</div>
                    <div class="marquee-container">
                        <ul class="marquee">
                            @foreach($noibat as $nb)
                            <li class="marquee-item">
                                <a class="text-slate-800 text-sm" href="/chi-tiet-bai-viet/{{$nb->slug}}"><span>{{$nb->title}}</span></a>
                            </li>
                            @endforeach
                            <!--  -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mt-5">
    <div class="container1 mx-auto w-full">
        <div class="grid grid-cols-12">
            <div class="sm:col-span-9 col-span-12 overflow-hidden title-global pb-4 shadown">
                <div class="grid grid-cols-12 h-auto">
                    <div class="sm:col-span-8 col-span-12">
                        <h3 class="pl-5 pb-2.5">

                            <a class="flex uppercase font-medium py-2 text-xl text-red-700" href="#" class="icon leading-10 uppercase text-black relative font-medium pl-3.5 text-xl no-underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-7 h-7 mr-2 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                                tin tức
                                nổi bật</a>
                        </h3>
                        <div id="owl-hot-news" class="owl-carousel owl-theme owl-loaded owl-drag border-between">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="
                        transform: translate3d(0px, 0px, 0px);
                        transition: all 0s ease 0s;
                        width: 3225px;
                      ">
                                    <!-- <div class="owl-item active" style="width: 645px">
                                        <div class="hot-news-item px-5">
                                            <div class="img-thumb">
                                                <a href="tin-tuc-detail.aspx?id=325" title="Lan tỏa Tấm gương đạo đức bình dị mà cao quý của Chủ tịch Hồ Chí Minh trên quê hương Hà Tĩnh">
                                                    <img src="https://scontent.fvii2-1.fna.fbcdn.net/v/t39.30808-6/366646993_1019459809395649_3798579248627162038_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=lshQjycPg8wAX-JgO8h&_nc_ht=scontent.fvii2-1.fna&oh=00_AfDa-asDd6Z5caskKFkD5Q44LDtvz1DovK5TJEIKnoJipw&oe=64EA4A4C" alt="" class="img-fluid h-80" /></a>
                                            </div>
                                            <div class="summary">
                                                <h3>
                                                    <a href="tin-tuc-detail.aspx?id=325" class="text-xl" title="Lan tỏa Tấm gương đạo đức bình dị mà cao quý của Chủ tịch Hồ Chí Minh trên quê hương Hà Tĩnh">
                                                        Xưởng Nghệ thuật TAART phối hợp với Bảo tàng Xô Viết Nghệ Tĩnh tổ chức trưng bày mỹ thuật
                                                        "Thế giới trong mắt con"</a>
                                                </h3>
                                                <h6 class="desc"></h6>
                                            </div>
                                        </div>
                                    </div> -->
                                    @foreach($tintucnoibat as $ttnb)
                                    <div class="owl-item" style="width: 645px">
                                        <div class="hot-news-item px-5">
                                            <div class="img-thumb">
                                                <a href="/chi-tiet-bai-viet/{{$ttnb->slug}}" title="{{$ttnb->title}}">
                                                    <img src="/storage/{{$ttnb->thumbnail}}" alt="" class="img-fluid h-80" /></a>
                                            </div>
                                            <div class="summary">
                                                <h3>
                                                    <a href="/chi-tiet-bai-viet/{{$ttnb->slug}}" class="text-xl" title="{{$ttnb->title}}">{{$ttnb->title}}</a>
                                                </h3>
                                                <h6 class="desc"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev prevlist">
                                    <i class="fa fa-chevron-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next nextlist">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4 sm:mt-0 col-span-12 mt-5">
                        <h3 class="pl-5">
                            <a href="" class="icons leading-10 uppercase text-red-700 relative font-medium pl-3.5 text-xl no-underline">tin mới</a>
                        </h3>

                        <!-- <div class="p-0 item-list-news text-justify mb-3.5 pb-3.5">
                            <h6>
                                <a href="" class="text-base leading-7">Hoạt động kỷ niệm 92 năm thành lập Đoàn TNCS Hồ Chí Minh
                                    (26/3/1931-26/3/2023) tại trường THCS Lý Tự Trọng, xã Đặng
                                    Sơn, huyện Đô Lương</a>
                            </h6>
                        </div> -->
                        @foreach($tintucmoi as $ttm)
                        <div class="p-0 item-list-news text-justify mb-3.5 pb-3.5">
                            <h6>
                                <a href="/chi-tiet-bai-viet/{{$ttm->slug}}" class="text-base leading-7">{{$ttm->title}}</a>
                            </h6>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3 sm:ml-4 col-span-12 sm:mt-0 mt-5">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 sm:mb-5 sm:mt-0 sm:mx-0 mx-5 mb-5 mt-2 shadown">
                        <div class="article-container">
                            <article class="relative h-56">
                                <figure class="relative story_thumb">
                                    <img class="h-56" src="https://upload.wikimedia.org/wikipedia/commons/9/91/Museum_of_Xo_Viet_Nghe_Tinh.jpg" alt="">
                                </figure>
                                <div class="text-center story_heading mt-2">
                                    <i class="fa-regular fa-clock fa-2xl" style="color: #fff"></i>
                                    <h4 class="uppercase m-2 text-lg">giờ tham quan</h4>
                                    <p class="py-2.5">
                                        Sáng Từ 8h đến 12h
                                        <br />
                                        Chiều Từ 13h30 đến 17h
                                        <br />
                                        <em>Tất cả các ngày trong tuần (Trừ thứ hai)</em>
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-span-12 sm:mt-0 sm:mx-0 mx-5 mt-2 sm:mb-0 shadown">
                        <div class="title-global mt-0 text-center">
                            @if($video)
                            <iframe class="introduce" width="285" height="230px" src="{{$video->youtube_id}}" title="{{$video->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container1 mx-auto w-full ">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <div class="nav-wrapper text-center my-6 shadown">
                <div class="py-5">
                    <a href="/bai-viet/danh-nhan-cach-mang">
                        <span class="uppercase text-white text-2xl">danh nhân cách mạng</span>
                    </a>
                </div>
                <div class="text-gray-100 js-carousel">
                    <div class=" w-11/12 mx-auto flex flex-col gap-9">

                        <div class="flex items-center flex-row justify-center gap-4">
                            <div class="cursor-pointer js-carousel-btn-left"><i class="fa-solid fa-chevron-left" style="color: #fff; font-size:25px;"></i></div>

                            <div class="flex flex-row max-w-full h-full overflow-x-scroll js-carousel-viewport">
                                <!-- <div class="mx-3 list-item1 gap-4 flex-col px-5 mb-10 items-center flex-shrink-0 flex justify-center text-center bg-white">
                                    <div class="w-36 h-36">
                                        <img class="w-36 h-36 mt-3" src="http://btxvnt.org.vn/images//Mai%20Th%C3%A1t.jpg" alt="">
                                    </div>
                                    <a href="">
                                        <span class="text-container text-base font-medium text-black text-justify">Đồng chí Mai Thát -
                                            người chiến sỹ tiêu biểu trong phong trào cách mạng 1930-1931 của quê hương Lộc Hà</span>
                                    </a>
                                    <a href="">
                                        <span class="text-container text-sm font-medium text-gray-600 text-justify mb-4">Đồng chí Mai Thát
                                            xuất thân trong một gia đình nhà nho có truyền thống yêu nước, hiếu học, mẹ là cụ Nguyễn Thị
                                            Kim, cha là cụ Mai Phồ (1864-1952) từng tham gia phong trào Cần Vương và giữ chức suất đội. Khi
                                            phong trào này thất bại, cụ đổi tên là Mai Đình Hòe hay gọi là Mai Hòe rồi về ở ẩn tại quê nhà.
                                        </span>
                                    </a>
                                </div> -->
                                @foreach($danhnhancmss as $dncmss)
                                <div class="mx-3 list-item1 gap-4 flex-col px-5 mb-10 items-center flex-shrink-0 flex justify-center text-center bg-white">
                                    <div class="w-36 h-36">
                                        <a href="/chi-tiet-bai-viet/{{$dncmss->slug}}">
                                            <img class="w-36 h-36 mt-3" src="/storage/{{$dncmss->thumbnail}}" alt="">
                                        </a>
                                    </div>
                                    <a href="/chi-tiet-bai-viet/{{$dncmss->slug}}">
                                        <span class="text-container text-base font-medium text-black text-justify">{{$dncmss->title}}</span>
                                    </a>
                                    <a href="/chi-tiet-bai-viet/{{$dncmss->slug}}">
                                        <span class="text-container text-sm font-medium text-gray-600 text-justify mb-4">{!! $dncmss->excerpt !!}</span>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                            <div class="cursor-pointer js-carousel-btn-right"><i class="fa-solid fa-chevron-right" style="color: #fff; font-size:25px;"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12">
        <div class="sm:col-span-6 title-global col-span-12 mr-5 ml-5 sm:ml-0 shadown">
            <h3 class="pl-5 pb-2.5">
                <a href="/bai-viet/suu-tam-hien-vat" class="icons leading-10 uppercase text-red-700 relative font-medium pl-3.5 text-xl no-underline">sưu tầm hiện vật</a>
            </h3>
            <div class="grid grid-cols-12 ">
                @if($suutaphv)
                <div class="col-span-5 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$suutaphv->slug}}">
                        <img src="/storage/{{$suutaphv->thumbnail}}" class="w-full h-40" alt="">
                    </a>
                </div>
                <div class="col-span-7 px-3.5 content-news text-xl">
                    <h4>
                        <a href="/chi-tiet-bai-viet/{{$suutaphv->slug}}">
                            {{$suutaphv->title}}
                        </a>
                    </h4>
                    <h6 class="date-time">{{$suutaphv->created_at}}</h6>
                </div>
                @endif
            </div>
            <div class="grid grid-cols-12 mt-4">
                <div class="col-span-12 mt-5  ">
                    <ul class="border-last">
                        @foreach($suutaphvs as $sthv)
                        <li class="list-news font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$sthv->slug}}">{{$sthv->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="sm:col-span-6 col-span-12 title-global ml-5 sm:mr-0 mr-5 sm:mt-0 mt-5 shadown">
            <h3 class="pl-5 pb-2.5">
                <a href="bai-viet/phong-trung-bay" class="icons leading-10 uppercase text-red-700 relative font-medium pl-3.5 text-xl no-underline">phòng
                    trưng bày</a>
            </h3>

            <div class="relative">
                <img src="./images/sodothamquan.jpg" alt="Your Image" class="w-full">
                <div class="radius group-items9 top-52 left-52">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-7-dau-tranh-chong-khung-bo-de-duy-tri-phong-trao-cach-mang">
                            <p>Phòng số 7</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items6 top-64 left-32">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-8-nha-lao-vinh">
                            <p>Phòng số 8</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items7 top-52 left-80">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-6-dien-bien-va-thanh-qua-cua-phong-trao-xo-viet-nghe-tinh">
                            <p>Phòng số 6</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items8 top-52 left-3/4">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-5-dien-bien-cua-phong-trao-xo-viet-nghe-tinh">
                            <p>Phòng số 5</p>
                        </a>
                    </div>
                </div>

                <div class="radius top-60 group-items">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-4-gioi-thieu-sa-ban-tranh-xo-viet-nghe-tinh">
                            <p>Phòng số 4</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items1">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-9-anh-huong-cua-phong-trao-xo-viet-nghe-tinh">
                            <p>Phòng số 9</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items2">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-10-mot-so-hinh-anh-ve-cuoc-doi-va-su-nghiep-hoat-dong-cach-mang-cua-v-i-le-nin">
                            <p>Phòng số 10</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items3">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-1-phong-khanh-tiet">
                            <p>Phòng số 1</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items4">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-2-nhung-dieu-kien-truc-tiep-dan-den-phong-trao-xo-viet-nghe-tinh">
                            <p>Phòng số 2</p>
                        </a>
                    </div>
                </div>

                <div class="radius group-items5">
                    <span class="place"></span>
                    <span class="border-animation ba1"></span>
                    <span class="border-animation ba2"></span>
                    <span class="border-animation ba3"></span>
                    <div class="text-block">
                        <a href="/chi-tiet-bai-viet/phong-trung-bay-so-3-qua-trinh-van-dong-thanh-lap-tinh-dang-bo-nghe-tinh">
                            <p>Phòng số 3</p>
                        </a>
                    </div>s
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12">
        <div class="col-span-12 title-global home__multimedia shadown">
            <div class="relative ">
                <div class=" sm:px-20 px-4">
                    <div class="py-5 flex justify-between items-center">
                        <h2 class="m-0">
                            <a href="" target="_blank" class="flex items-center font-medium sm:text-2xl text-base uppercase">
                                <span class="flex mr-3">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00521 6.41394C3.00144 6.47558 2.99952 6.53772 2.99952 6.60031V24.0002C2.99952 25.6571 4.34267 27.0002 5.99952 27.0002H24.5995C24.6622 27.0002 24.7245 26.9983 24.7863 26.9945C24.016 28.7634 22.2524 30.0001 20.1999 30.0001H5C2.23857 30.0001 0 27.7615 0 25.0001V11.0002C0 8.94783 1.23652 7.1843 3.00521 6.41394Z" fill="#DC2C2C"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.3996 0.000488281C7.19046 0.000488281 5.3996 1.79135 5.3996 4.00049V20.6004C5.3996 22.8096 7.19046 24.6004 9.3996 24.6004H25.9995C28.2087 24.6004 29.9995 22.8096 29.9995 20.6004V4.00049C29.9995 1.79135 28.2087 0.000488281 25.9995 0.000488281H9.3996ZM21.9002 13.1201C22.3002 12.8892 22.3002 12.3118 21.9002 12.0809L15.6002 8.44358C15.2002 8.21264 14.7003 8.50132 14.7003 8.9632V16.2378C14.7003 16.6997 15.2002 16.9883 15.6002 16.7574L21.9002 13.1201Z" fill="#DC2C2C"></path>
                                    </svg>
                                </span>
                                Đa phương tiện
                            </a>
                        </h2>
                        <ul class="list-none flex">
                            <li class="pr-6">
                                <a href="" class="flex items-center font-medium sm:text-lg text-base">
                                    <span class="mr-3 flex">
                                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0899 0.250122H1.57674C0.705903 0.250122 0 1.00247 0 1.93059V12.0697C0 12.9978 0.705903 13.7501 1.57674 13.7501H11.0899C11.9608 13.7501 12.6667 12.9978 12.6667 12.0697V1.93059C12.6667 1.00247 11.9608 0.250122 11.0899 0.250122ZM17.3375 1.57551L13.7222 4.23333V9.76692L17.3375 12.4212C18.0368 12.9345 19 12.4107 19 11.5142V2.48254C19 1.58958 18.0401 1.06223 17.3375 1.57551Z" fill="#DC2C2C"></path>
                                        </svg>
                                    </span>
                                    Video
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center font-medium text-base sm:text-lg">
                                    <span class="mr-3 flex">
                                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1541 5.45468V5.45499C13.154 5.74435 13.0385 6.02184 12.8329 6.22642C12.6273 6.43101 12.3484 6.54593 12.0577 6.54591C11.7669 6.54589 11.4881 6.43092 11.2825 6.22631C11.0769 6.0217 10.9614 5.74419 10.9614 5.45484C10.9614 5.16548 11.0769 4.88798 11.2825 4.68336C11.4881 4.47875 11.7669 4.36379 12.0577 4.36377C12.3484 4.36375 12.6273 4.47867 12.8329 4.68325C13.0385 4.88784 13.154 5.16533 13.1541 5.45468ZM19.0001 1.45467V14.5456C18.9997 14.9312 18.8456 15.3009 18.5716 15.5736C18.2976 15.8463 17.9261 15.9997 17.5386 16.0001H1.46166C1.07417 15.9997 0.702682 15.8463 0.428687 15.5736C0.154691 15.3009 0.000565708 14.9312 0.00012207 14.5456V1.45467C0.000565708 1.06903 0.154691 0.699321 0.428687 0.426636C0.702682 0.153952 1.07417 0.000563585 1.46166 0.00012207H17.5386C17.9261 0.000563585 18.2976 0.153952 18.5716 0.426636C18.8456 0.699321 18.9997 1.06903 19.0001 1.45467ZM17.5393 11.3359L17.5386 1.45467H1.46166V9.88064L4.81283 6.54559C5.08715 6.27322 5.45883 6.12026 5.84632 6.12026C6.23382 6.12026 6.60549 6.27322 6.87981 6.54559L10.9618 10.608L12.8513 8.72742C13.1256 8.45505 13.4973 8.30208 13.8848 8.30208C14.2723 8.30208 14.644 8.45505 14.9183 8.72742L17.5393 11.3359Z" fill="#DC2C2C"></path>
                                        </svg>
                                    </span>
                                    Photos
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($slide as $sl)
                    <div class="swiper-slide zoom-animation ">
                        <a href="">
                            <img src="/storage/{{$sl->Anh}}">
                        </a>
                        <!-- <div class="absolute left-2/4 box-category-item">
                            <h3>
                                <a href="" class="items-center">
                                    <span class="text">Kỷ niệm Ngày Quốc tế Bảo tàng Xô viết Nghệ
                                        Tĩnh 18/5</span>
                                </a>
                            </h3>
                        </div> -->
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <style>
        .middle {


            text-align: center;
        }

        .btnn::before {

            content: "";
            height: 21px;
            width: 4px;
            background: #7e3429;
            position: absolute;
            top: 5px;
            left: 0;

        }

        .btnn {
            background: none;
            transform: translate(-50%, -50%);



            text-transform: uppercase;

            min-width: 140px;

            cursor: pointer;
            transition: color 1s linear;

            position: relative;
        }

        .btnn:hover {
            color: #fff;
        }

        .btnn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: -1;
            transition: transform 0.5s;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
        }

        .btnh:before {
            transform: scaleX(0);
        }


        .btnh:hover::before {
            transform: scaleX(1);
        }
    </style>

    <div class="grid grid-cols-12 mt-5">
        <div class="sm:col-span-4 col-span-12 title-global sm:mr-3 sm:mx-0 mx-5 mb-5 shadown relative">
            <h3 class="pl-5 pb-2.5">
                <a href="/bai-viet/di-tich-lich-su-van-hoa" class=" text-red-700 icons pl-3.5  leading-10 uppercase rounded-sm px-1 relative font-medium  text-xl no-underline">Di tích</a>
            </h3>
            <!-- <div class="middle relative"> <button class="btnn btnh  text-black   " style="transform: translate(-69%, -3px);"><a href="" class="  leading-10 uppercase relative font-medium pl-3.5 text-xl no-underline">di tích</a></button></div> -->
            @if($ditich)
            <div class="grid grid-cols-12">
                <div class="col-span-12 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$ditich->slug}}">
                        <img src="/storage/{{$ditich->thumbnail}}" class="w-full h-56" alt="">
                        <h4 style="margin-top: 10px;">
                            <a href="/chi-tiet-bai-viet/{{$ditich->slug}}" class="text-xl">
                                {{$ditich->title}}
                            </a>
                        </h4>
                        <h6 class="date-time">{{$ditich->created_at}}</h6>
                    </a>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <ul>
                        @foreach($ditichs as $dt)
                        <li class="list-news second-new font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$dt->slug}}">{{$dt->title}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        <div class="sm:col-span-4 col-span-12 title-global sm:mx-3 mx-5 mb-5 shadown">
            <h3 class="pl-5 pb-2.5">
                <a href="/bai-viet/danh-nhan-cach-mang" class=" text-red-700 icons pl-3.5 leading-10 uppercase  rounded-sm px-1 relative font-medium  text-xl no-underline">Danh nhân cách mạng</a>
            </h3>
            @if($danhnhancm)
            <div class="grid grid-cols-12">
                <div class="col-span-12 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$danhnhancm->slug}}">
                        <img src="/storage/{{$danhnhancm->thumbnail}}" class="w-full h-56" alt="">
                        <h4 style="margin-top: 10px;">
                            <a href="/chi-tiet-bai-viet/{{$danhnhancm->slug}}" class="text-xl">
                                {{$danhnhancm->title}}
                            </a>
                        </h4>
                        <h6 class="date-time">{{$danhnhancm->created_at}}</h6>
                    </a>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <ul>
                        @foreach($danhnhancms as $dncms)
                        <li class="list-news second-new font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$dncms->slug}}">{{$dncms->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="sm:col-span-4 col-span-12 title-global sm:ml-3 sm:mx-0 mx-5 mb-5 shadown">
            <h3 class="pl-5 pb-2.5">
                <a href="/bai-viet/su-kien" class="text-red-700 icons pl-3.5 leading-10 uppercase  rounded-sm px-1  relative font-medium  text-xl no-underline">Sự kiện</a>
            </h3>
            @if($sukien)
            <div class="grid grid-cols-12">
                <div class="col-span-12 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$sukien->slug}}">
                        <img src="/storage/{{$sukien->thumbnail}}" class="w-full h-56" alt="">
                        <h4 style="margin-top: 10px;">
                            <a href="/chi-tiet-bai-viet/{{$sukien->slug}}" class="text-xl">
                                {{$sukien->title}}
                            </a>
                        </h4>
                        <h6 class="date-time">{{$sukien->created_at}}</h6>
                    </a>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <ul>
                        @foreach($sukiens as $sk)
                        <li class="list-news second-new font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$sk->slug}}">{{$sk->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="grid grid-cols-12">
            <div class="col-span-12 shadown">
                <div style="background: url(https://static-cms-baonghean.zadn.vn/v4/web/styles/img/bg-logo.png) center;">

                    <h2 class="main-title text-3xl text-center font-semibold relative mt-5 pt-5" style="color: #dc2430;">HỒ SƠ
                        CHIẾN SỸ CÁCH MẠNG</h2>
                    <div class="sm:flex mt-5 px-5 sm:ml-[170px] pb-9 block">
                        @foreach($getthoiki as $tK)
                        <div class="space-x-2 p-4 border rounded-md shadow-md sm:w-[268px] mb-5 text-center mx-5" style="background-color: rgb(237, 242, 255);">
                            <a href="/ho-so-chien-sy">
                                <div class="text-4xl text-blue-500">
                                    <img src="./images/hscscm.png" class="mx-auto w-20">
                                </div>
                                <div class="text-4xl font-bold animate-number pt-1" style="margin: 0px; color: #dc2430;" data-number="{{$tK->thongtinchiensi}}">0</div>
                                <p class="text-sm mt-2 uppercase" style="color: #dc2430;"> {{$tK->name}} </p>
                            </a>
                        </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 mt-6">
        <div class="sm:col-span-6 col-span-12 title-global sm:mr-3 sm:mx-0 mx-5 mb-5 shadown">
            <h3 class="pl-5 pb-2.5 mt-2">
                <a href="/bai-viet/hien-vat" class="icons leading-10 uppercase text-red-700 relative font-medium pl-3.5 text-xl no-underline">Hiện vật</a>
            </h3>
            @if($hienvat)
            <div class="grid grid-cols-12">
                <div class="col-span-5 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$hienvat->slug}}">
                        <img src="/storage/{{$hienvat->thumbnail}}" class="w-full h-40" alt="">
                    </a>
                </div>
                <div class="col-span-7 px-3.5 content-news text-xl">
                    <h4 class="text-justify">
                        <a href="/chi-tiet-bai-viet/{{$hienvat->slug}}">
                            {{$hienvat->title}}
                        </a>
                    </h4>
                    <h6 class="date-time">{{$hienvat->created_at}}</h6>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12">
                <div class="col-span-12 mt-5">
                    <ul class="mb-5">
                        @foreach($hienvats as $hv)
                        <li class="list-news font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$hv->slug}}">{{$hv->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="sm:col-span-6 col-span-12 title-global sm:ml-3 sm:mx-0 mx-5 mb-5 shadown">
            <h3 class="pl-5 pb-2.5 mt-2">
                <a href="/bai-viet/an-pham-bao-tang" class="icons  leading-10 uppercase text-red-700 relative font-medium pl-3.5 text-xl no-underline">Ấn phẩm bảo tàng</a>
            </h3>
            @if($anphambaotang)
            <div class="grid grid-cols-12">
                <div class="col-span-5 pl-5 px-3.5">
                    <a href="/chi-tiet-bai-viet/{{$anphambaotang->slug}}">
                        <img src="/storage/{{$anphambaotang->thumbnail}}" class="w-full h-40" alt="">
                    </a>
                </div>
                <div class="col-span-7 px-3.5 content-news text-xl">
                    <h4 class="text-justify">
                        <a href="/chi-tiet-bai-viet/{{$anphambaotang->slug}}">
                            {{$anphambaotang->title}}
                        </a>
                    </h4>
                    <h6 class="date-time">{{$anphambaotang->created_at}}</h6>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-12">
                <div class="col-span-12 mt-5">
                    <ul>
                        @foreach($anphambaotangs as $apbt)
                        <li class="list-news font-extralight mx-7">
                            <a href="/chi-tiet-bai-viet/{{$apbt->slug}}">{{$apbt->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-12 shadown">
            <div class="my-8" style="background: url(https://static-cms-baonghean.zadn.vn/v4/web/styles/img/bg-logo.png) center;">

                <div id="default-carousel" class="relative w-full p-5" data-carousel="slide">
                    <h3 class="main-title text-3xl text-center font-semibold relative mt-5 px-5">CẢM TƯỞNG VÀ TRAO ĐỔI</h3>
                    <!-- Carousel wrapper -->

                    <div class="relative h-75 overflow-hidden rounded-lg m-8 mx-auto sm:w-[935px] text-center">
                        <!-- Item 1 -->
                        @foreach($camtuong as $ct)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <p>

                                {!!$ct->content!!}

                            </p>

                            <p style="margin-top: 15px;">
                                <em>{{$ct->name}}</em><br>
                                <strong>{{$ct->chucvu}}</strong>
                            </p>
                        </div>
                        @endforeach


                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class=" text-center my-6 shadown container1 mx-auto mt-10">
        <div class="py-1">
            <span class="uppercase text-gray-700 text-xl my-2 font-semibold ">Liên Kết Website</span>
        </div>
        <div class="text-gray-100 js-carousel">
            <div class=" w-11/12 mx-auto flex flex-col gap-9">

                <div class="flex items-center flex-row justify-center gap-4">
                    <div class="cursor-pointer js-carousel-btn-left"><i class="fa-solid fa-chevron-left" style="color: #ad9696; font-size:25px;"></i></div>

                    <div class="flex flex-row max-w-full h-full overflow-x-scroll js-carousel-viewport">

                        @foreach($lienketwebsite as $lkw)
                        <div class="mx-3 list-item1 space-y-4 flex-col px-5 py-2 rounded-sm mb-2 items-center flex-shrink-0 justify-center text-center bg-gray-200">
                            <div class="text-center">
                                <a href="{{$lkw->link}}" target="_blank" class="flex flex-col items-center">
                                    @if($lkw->anh == null)
                                    <img src="./images/lkw.jpg" class="w-10 h-10 mx-auto my-3" alt="">
                                    @else
                                    <img src="./storage/{{$lkw->anh}}" class="w-10 h-10 mx-auto my-3" alt="">
                                    @endif
                                    <span class="text-gray-600">{{$lkw->name}}</span>
                                </a>
                            </div>
                        </div>

                        @endforeach
                        <!-- <div class="mx-3 list-item1 gap-4 flex-col px-5 py-2 rounded-sm mb-2 items-center flex-shrink-0 flex justify-center text-center bg-gray-200">
                            <div class="">
                                <a href="https://vhtt.nghean.gov.vn/" target="_blank" class="">
                                    <img src="./images/image_2021-06-17_14-08-44.png" class="w-10 h-10 mx-auto my-3" alt="">
                                    <span class="my-4 text-gray-600">Thư viện Quốc gia Việt Nam</span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <div class="cursor-pointer js-carousel-btn-right"><i class="fa-solid fa-chevron-right" style="color: #ad9696; font-size:25px;"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection