@extends('ocbuouden.views.layouts.trangchu')
@section('content')

@if($gioithieu)
<main id="main" class="">
    <div cl ass="page-wrapper page-left-sidebar" style="padding-top: 30px;
    padding-bottom: 30px;">
        <div class="row">
            <div id="content" class="large-12 right col" role="main">
                <div class="page-inner">
                    <h1 style="text-align: center">
                        {{$gioithieu->title}}
                    </h1>
                    <p>
                       {!! $gioithieu->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endif
@endsection