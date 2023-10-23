@extends('baotangxoviet.views.layouts.trangchu')
@section('content')

<style>
    /* Apply styles to the pagination container */
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    /* Style for pagination items */
    .page-item {
        margin: 0 5px;
    }

    /* Style for active pagination item */
    .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    /* Style for disabled pagination item */
    .page-item.disabled .page-link {
        background-color: #f8f9fa;
        color: #6c757d;
        border-color: #dee2e6;
    }

    /* Style for pagination links */
    .page-link {
        padding: 5px 10px;
        border: 1px solid #dee2e6;
        background-color: #fff;
        color: #bc0813;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.2s, color 0.2s;
    }

    /* Hover effect for pagination links */
    .page-link:hover {
        background-color: #007bff;
        color: #fff;
    }
</style>
<div id="hura" class=" container1 mx-auto reset ">

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
            @if($danhmucc)
            <li class="flex">
                <div class="flex items-center">
                    <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{$danhmucc[0]['name']}}</a>
                </div>
            </li>
            @endif
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
        <div class="col-span-4">
            <div class="search-bar">
                <div class="mb-3">
                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                        <form action="{{ route('baotangxoviet.posts.searchpost')}}" method="get" class="flex">
                            @csrf
                            <input type="text" name="search" class=" relative m-0 -mr-0.5 block  min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Nhập từ khóa " aria-label="Search" aria-describedby="button-addon1" />

                            <!--Search button-->
                            <button class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" type="submit" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>

                            </button>
                        </form>
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
                <div data-tab-content="" class="p-5 shadow">
                    <div class="block opacity-100" id="tab1" role="tabpanel">
                        <ul class="tab-left">
                            @foreach($baixemnhieunhat as $bxnn)
                            <li class="p-2"><i class="fa-solid fa-check text-sm"></i><a class="post-i fix-para" href="/chi-tiet-bai-viet/{{$bxnn->slug}}">{{$bxnn->title}}</a>
                                <br><span class="italic mt-1 text-gray-400 text-sm">(Ngày {{$bxnn->created_at}})</span>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="hidden opacity-0" id="tab2" role="tabpanel">
                        <ul class="post-img">
                            @foreach($baiganday as $bgd)
                            <li>
                                <div class="box-post">

                                    <img src="/storage/{{$bgd->thumbnail}}" alt="">
                                    <p class="fix-title"><a href="/chi-tiet-bai-viet/{{$bgd->slug}}">{{$bgd->title}}</a></p>

                                </div>
                                <span class="date fix-title">Ngày: {{$bgd->created_at}}</span>
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
            <div class="box-video">
                @if($video) <h3 class="bg-red-600 fix-title text-white text-center rounded-t-sm">Video </h3>
                <iframe width="400" height="200" src="{{$video->youtube_id}}" title="{{$video->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endif
            </div>

            <div class="col-span-12 mt-5 ">
                <h3 class=" pb-2.5">
                    <a href="" class="icon leading-10 uppercase text-black relative font-medium pl-3.5 text-xl no-underline">Liên
                        kết website</a>
                </h3>

                <div class="grid grid-cols-12 contents">
                    @foreach($lienketwebsite as $lkw)
                    <div class="sm:col-span-4 col-span-12 sm:mx-0 mb-5 title-global shadow">
                        <div>
                            <a href="{{$lkw->link}}" target="_blank" class="flex">
                                @if($lkw->anh == null)
                                <img src="../images/lkw.jpg" class="w-10 h-10 mx-3 my-3" alt="">
                                @else
                                <img src="../storage/{{$lkw->anh}}" class="w-10 h-10 mx-3 my-3" alt="">
                                @endif
                                <span class="my-4">{{$lkw->name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="col-span-8 ml-5">


            <div class="content  border-l">

                @foreach($list as $bv)
                <div class="parent_name">
                    <h3 class="flex my-8 leading-10 uppercase text-red-700 relative font-medium  text-xl no-underline"><a class="flex items-center mx-2" href="/bai-viet/{{$bv['slug']}}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                            </svg>
                            {{$bv['name']}}</h3>
                    @foreach($bv['baiviet'] as $post)
                    <h3 class="fix-title font-bold text-xl mb-3"><a href="/chi-tiet-bai-viet/{{$post->slug}}">{{$post->title}}</h3>


                    @if($post['thumbnail'] == null)
                    <img class="mx-auto" src="/images/noimg.jpg" alt="{{$post->title}}" id="imghot" style="height:350px; width:60%">
                    @else
                    <img class="mx-auto" src="/storage/{{$post->thumbnail}}" alt="" style="height:350px; width:60%">
                    @endif
                    <span class="fix-para block my-3 pb-5 border-b"> <i class="fa-solid fa-user"></i> Người đăng: admin Ngày
                        {{$post->created_at}}</span>

                    <p class="para fix-para cut-para">{!! $post->excerpt !!}</p>
                    @endforeach
                </div>

                @endforeach
            </div>



        </div>

    </div>
    <div> {{$baiviets->links()}}</div>

</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>




<script>
    const app = Vue.createApp({
        data() {
            return {
                tenbaiviet: [],

                searchQuery: '',

            };
        },
        mounted() {
            axios.get('/listpost')
                .then(response => {
                    this.tenbaiviet = response.data;
                    console.log(this.tenbaiviet);
                })
        },
        methods: {


        },
        computed: {
            // filteredItems() {
            //     if (this.searchQuery === '') {
            //         return this.tenbaiviet;
            //     } else {
            //         return this.tenbaiviet.filter(item => item.title.toLowerCase().includes(this.searchQuery.toLowerCase()));
            //     }
            // },


        },
    });

    const vueInstace = app.mount("#hura");
</script>
@endsection