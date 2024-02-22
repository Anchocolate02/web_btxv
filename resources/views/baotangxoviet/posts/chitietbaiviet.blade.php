@extends('baotangxoviet.views.layouts.trangchu')
@section('content')


<div class="container1 mx-auto">



</div>

<div class=" container1 mx-auto ">
    <!-- Điều hướng -->
    <nav class="flex mt-2" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
            <li class="flex">
                <div class="flex items-center">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Bài viết</a>
                </div>
            </li>
            <!-- <li class="flex">
                        <div class="flex items-center">
                            <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44"
                                preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                                aria-current="page"></a>
                        </div>
                    </li> -->
        </ol>
    </nav>

    <div class="grid grid-cols-12 mt-10">
        <div class="lg:col-span-4 md:col-span-12 sm:col-span-4 col-span-12">
            <div class="search-bar">
                <div class="mb-3">
                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                        <input type="search" class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Nhập từ khóa " aria-label="Search" aria-describedby="button-addon1" />

                        <!--Search button-->
                        <button class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" type="button" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-left">
                <ul class=" flex list-none flex-wrap rounded-xl bg-blue-gray-50/60 p-1" data-tabs="tabs" role="list">
                    <li class="z-20 flex-auto text-center">
                        <a class=" bg-gray-200 text-slate-700  mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out" data-tab-target="" active="" role="tab" aria-selected="true" aria-controls="tab1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                            <span class="ml-1 text-gray-900">Bài xem nhiều nhất</span>
                        </a>
                    </li>
                    <li class="z-20 flex-auto text-center">
                        <a class="text-slate-700  mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out" data-tab-target="" role="tab" aria-selected="false" aria-controls="tab2">
                            <span class="ml-1 text-gray-900">Bài đăng gần đây</span>
                        </a>
                    </li>

                </ul>
                <div data-tab-content="" class="p-5">
                    <div class="block opacity-100" id="tab1" role="tabpanel">
                        <ul class="tab-left">
                            @foreach($baixemnhieunhat as $bxnn)
                            <li class="p-2"><i class="fa-solid fa-check text-sm"></i><a class="post-i fix-para" href="/chi-tiet-bai-viet/{{$bxnn->slug}}">{{$bxnn->title}} </a>
                                <br><span class="italic mt-1 text-gray-400 text-sm">{{$bxnn->created_at}}</span>
                            </li>
                            @endforeach
                            
                            <!-- <li class="p-2"><i class="fa-solid fa-check text-sm"></i><a class="post-i fix-para" href="">Đồng chí
                                    Đặng
                                    Xuân Quý –
                                    người cán bộ lão thành cách mạng xã Lam Sơn, huyện Đô Lương </a>
                                <br><span class="italic mt-1 text-gray-400 text-sm">(Ngày 07/09/2023)</span>
                            </li> -->
                        </ul>
                    </div>
                    <div class="hidden opacity-0" id="tab2" role="tabpanel">
                        <ul class="post-img">
                            @foreach($baiganday as $bgd)
                            <li>
                                <div class="box-post">

                                    <img src="/storage/{{$bgd->thumbnail}}" alt="">
                                    <p class="fix-title pt-2 ml-5"><a href="/chi-tiet-bai-viet/{{$bgd->slug}}">{{$bgd->title}}</a></p>

                                </div>
                                <span class="date fix-title text-xs">Ngày: {{$bgd->created_at}}</span>
                            </li>
                            @endforeach
                            <!-- <li>
                                <div class="box-post">
                                    <img src="http://www.btxvnt.org.vn/images/news/A11122018-103959226.JPG" alt="">
                                    <p class="fix-title">Đồng chí Bùi Xuân Nam - Người chiến sỹ cộng sản kiên
                                        trung
                                        trong phong trào Xô Viết Nghệ Tĩnh năm 1930 - 1931</p>

                                </div>
                                <span class="date fix-title">Ngày: 31/05/2023</span>
                            </li> -->
                            

                        </ul>
                    </div>

                </div>
            </div>
            <div class="box-video sm:block hidden">
                @if($video)
                <h3 class="bg-red-600 fix-title text-white text-center rounded-t-sm">Video </h3>
                <iframe width="400" height="200" src="{{$video->youtube_id}}" title="{{$video->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endif    
            </div>
            <style>
                @media (min-width: 768px) and (max-width: 1024px) 
                {
                    .box-video iframe {
                        width: 100%;
                        height: 500px;
                    }
                }
            </style>
        </div>
        <div class="lg:col-span-8 md:col-span-12 sm:col-span-8 col-span-12 mx-4">    
            
            <div class="content  border-l">          
            @if($chitietbaiviet)    
                <h3 class="fix-title font-bold text-2xl ">{{$chitietbaiviet->title}}</h3>
                <span class="fix-para block my-3"> <i class="fa-solid fa-user"></i> Người đăng: admin Ngày
                    {{$chitietbaiviet->created_at}}</span>



                <p class="para fix-para cut-para">{!! $chitietbaiviet->content !!}</p>
                <!-- <a href="" class="font-bold border-b italic ">Đọc thêm</a>    -->
            @endif              
            </div>
                
            <!-- <div class="related-post mt-20 shadown ">
                <h3 class="pl-1 pb-2.5">
                    <a href="/bai-viet/danh-nhan-cach-mang" class="icon leading-10 uppercase text-black relative font-medium pl-3.5 text-xl no-underline">Danh
                        Nhân Cách Mạng Liên Quan</a>
                </h3>
                <ul class="post-img">

                    @foreach($danhnhancmlq as $dncmlq)
                    <li>
                        
                        <div class="box-post">
                            <img class="" src="/storage/{{$dncmlq->thumbnail}}" alt="" style="margin:0">
                            <p class="fix-title pl-3font-semibold"><a href="/chi-tiet-bai-viet/{{$dncmlq->slug}}">{{$dncmlq->title}}</a></p>

                        </div>
                        <span class="date fix-title pl-3 italic text-gray-500">Ngày: {{$dncmlq->created_at}}</span>
                       
                    </li>
                    @endforeach
                  
                    
                </ul>
            </div> -->

        </div>
    </div>

</div>
@endsection