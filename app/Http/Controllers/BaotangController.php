<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Hoidap;
use App\Models\Camtuong;
use App\Models\Category;
use App\Models\thuvienanh;
use App\Models\Hosochiensi;
use Illuminate\Http\Request;
use App\Models\Lienketwebsite;
use App\Models\Thoikihoatdong;
use App\Http\Controllers\Controller;

class BaotangController extends Controller
{
    public function trangchu()
    {
        $tintucnoibat = Post::where('category_id', '=', 32)->where('noibat', '=', 1)->orderBy('id', 'desc')->take(3)->get();
        $tintucmoi = Post::where('category_id', '=', 32)->where('noibat', '=', 2)->orderBy('id', 'desc')->take(4)->get();

        $slide = Thuvienanh::orderBy('id', 'asc')->take(4)->get();
       
        // $excludedIds = $slide->pluck('id'); 
        // $records = Thuvienanh::whereNotIn('id', $excludedIds)->take(4)->get();
        
        $video = Video::orderBy('id', 'desc')->first();

        $suutaphv = Post::where('category_id', 53)->orderBy('id', 'desc')->first();
        $Posts_idsuutaphv = [];
        $Posts_idsuutaphv[] = $suutaphv->id;
        $suutaphvs = Post::whereNotIn('id', $Posts_idsuutaphv)->where('category_id', '=', 53)->orderBy('id', 'desc')->take(4)->get();


        
        $ditich = Post::where('category_id', 40)->orderBy('id', 'asc')->first();
        $Posts_idditich = [];
        $Posts_idditich[] = $ditich->id;
        $ditichs = Post::whereNotIn('id', $Posts_idditich)->where('category_id', '=', 40)->orderBy('id', 'asc')->take(3)->get();



        //-----------
        $danhnhancm = Post::where('category_id', 41)->orderBy('id', 'asc')->first();
        $Posts_iddanhnhancm = [];
        $Posts_iddanhnhancm[] = $danhnhancm->id;
        $danhnhancms = Post::whereNotIn('id', $Posts_iddanhnhancm)->where('category_id', 41)->orderBy('id', 'asc')->take(3)->get();

        $Posts_iddanhnhancm3 = [];
        foreach ($danhnhancms as $post) {
            $Posts_iddanhnhancm3[] = $post->id;
        }

        $danhnhancmss = Post::whereNotIn('id', $Posts_iddanhnhancm3)->where('id', '!=', $danhnhancm->id)->where('category_id', 41)->orderBy('id', 'asc')->take(8)->get();

        // return $Posts_iddanhnhancm4;


        $sukien = Post::where('category_id', 42)->orderBy('id', 'asc')->first();

        $Posts_idsukien = [];
        $Posts_idsukien[] = $sukien->id;
        $sukiens = Post::whereNotIn('id', $Posts_idsukien)->where('category_id', '=', 42)->orderBy('id', 'asc')->take(3)->get();


        $hienvat = Post::where('category_id', 52)->orderBy('id', 'asc')->first();

        $Posts_idhienvat = [];
        $Posts_idhienvat[] = $hienvat->id;
        $hienvats = Post::whereNotIn('id', $Posts_idhienvat)->where('category_id', '=', 52)->orderBy('id', 'asc')->take(4)->get();


        $anphambaotang = Post::where('category_id', 54)->orderBy('id', 'asc')->first();

        $Posts_idanphambaotang = [];
        $Posts_idanphambaotang[] = $anphambaotang->id;
        $anphambaotangs = Post::whereNotIn('id', $Posts_idanphambaotang)->where('category_id', '=', 54)->orderBy('id', 'asc')->take(4)->get();


        $camtuong = Camtuong::all();

        $getthoiki = Thoikihoatdong::whereIn('id', [1, 2, 3])->get();

        foreach ($getthoiki as $tk) {
            // $tk = Hosochiensi::where('thoikihoatdong_id')->get();
            $tk->thongtinchiensi = Hosochiensi::where('thoikihoatdong_id', $tk->id)->count();
        }

        // return $getthoiki;
        $noibat = Post::where('category_id', '=', 32)->where('noibat', '=', 1)->orderBy('id', 'asc')->take(4)->get();

        $lienketwebsite = Lienketwebsite::orderBy('thutu', 'desc')->take(10)->get();


        return view('baotangxoviet.posts.home', [

            'tintucnoibat' => $tintucnoibat,
            'tintucmoi' => $tintucmoi,

            // 'records' => $records,




            'suutaphv' => $suutaphv,
            'suutaphvs' => $suutaphvs,


            'ditich' => $ditich,
            'ditichs' => $ditichs,


            'danhnhancm' => $danhnhancm,
            'danhnhancms' => $danhnhancms,
            'danhnhancmss' => $danhnhancmss,


            'sukien' => $sukien,
            'sukiens' => $sukiens,


            'hienvat' => $hienvat,
            'hienvats' => $hienvats,


            'anphambaotang' => $anphambaotang,
            'anphambaotangs' => $anphambaotangs,


            'slide' => $slide,
            'video' => $video,


            'camtuong' => $camtuong,
            'getthoiki' => $getthoiki,
            'tk' => $tk,
            'noibat' => $noibat,
            'lienketwebsite' => $lienketwebsite,

        ]);
    }
    public function chitietbaiviet($slug)
    {
        $chitietbaiviet = Post::where('slug',  $slug)->first();
        $danhnhancmlq = Post::where('category_id', '=', 45)->orderBy('id', 'desc')->take(3)->get();
        $video = Video::orderBy('id', 'desc')->first();


        $baiganday = Post::orderBy('id', 'asc')->take(3)->get();


        $baigandays = $baiganday->pluck('id')->toArray();
        $baixemnhieunhat = Post::whereNotIn('id', $baigandays)->orderBy('id', 'asc')->take(3)->get();


        return view('baotangxoviet.posts.chitietbaiviet', [
            'chitietbaiviet' =>  $chitietbaiviet,
            'baiganday' => $baiganday,
            'baixemnhieunhat' => $baixemnhieunhat,
            // 'gd' => $gd,
            // 'idbaidangganday' => $idbaidangganday,
            'danhnhancmlq' => $danhnhancmlq,
            'video' => $video,

        ]);
    }

    public function lienhes(Request $request)
    {
        $hoten = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('tel');
        $noidung = $request->input('noidung');

        $thongtinphanhoi = new Hoidap();
        $thongtinphanhoi->hoten = $hoten;
        $thongtinphanhoi->email = $email;

        $thongtinphanhoi->sdt = $phone;
        $thongtinphanhoi->noidungcauhoi = $noidung;
        $thongtinphanhoi->save();


        return redirect('/lien-he')->with('status', 'Câu hỏi của bạn đã được gửi. Chúng tôi sẽ sớm phản hồi lại!');
    }
    public function lienhe()
    {

        return view('baotangxoviet.posts.lienhe');
    }
    public function thuvienanh()
    {

        return view('baotangxoviet.posts.album', []);
    }
    public function baiviet($slug)
    {
        $getdanhmuc = Category::where('slug', $slug)->first();
        $baiviet = Post::where('category_id', $getdanhmuc->id)->orderBy('id', 'asc')->take(4)->paginate(4);
        // return $baiviet;
        $baiganday = Post::orderBy('id', 'asc')->take(3)->get();

        $lienketwebsite = Lienketwebsite::orderBy('thutu', 'desc')->take(4)->get();
        $video = Video::orderBy('id', 'desc')->first();



        $baigandays = $baiganday->pluck('id')->toArray();
        $baixemnhieunhat = Post::whereNotIn('id', $baigandays)->orderBy('id', 'asc')->take(3)->get();


        $baiviets = Post::paginate(6);

        $returnv = Post::where('category_id', $getdanhmuc->id)->orderBy('id', 'asc')->count();
        // return $returnv;

        return view('baotangxoviet.posts.baiviet', [
            'baiviet' =>  $baiviet,
            'baiganday' => $baiganday,
            'baixemnhieunhat' => $baixemnhieunhat,
            'lienketwebsite' => $lienketwebsite,
            'video' => $video,
            'baiviets' => $baiviets,
            'getdanhmuc' => $getdanhmuc,
            'returnv' => $returnv,
        ]);
    }
    public function danhmuc($slug)
    {
        $danhmuc = Category::where('slug', $slug)->first();

        // return $danhmuc;


        $dem = Category::where('parent_id', $danhmuc->id)->count();
        // return $dem;

        if ($dem > 0) {
            $danhmuc->loaidanhmuc_id = 6;
        }



        if ($danhmuc->loaidanhmuc_id == 1) {
            return redirect('/bai-viet/' . $slug);
        } elseif ($danhmuc->loaidanhmuc_id == 2) {
            return redirect('/lien-he');
        } elseif ($danhmuc->loaidanhmuc_id == 3) {
            return redirect('/thu-vien-anh');
        } elseif ($danhmuc->loaidanhmuc_id == 4) {
            return redirect('/videos');
        } elseif ($danhmuc->loaidanhmuc_id == 5) {
            return redirect('/chi-tiet-bai-viet/' . $slug);
        } elseif ($danhmuc->loaidanhmuc_id == 6) {

            return redirect('/post-child/' . $danhmuc->id);
        }
    }
    public function hosochiensy()
    {
        $danhnhancmlq = Post::where('category_id', '=', 45)->orderBy('id', 'desc')->take(3)->get();
        $hsochiensy = Hosochiensi::orderBy('id', 'desc')->paginate(3);
        $video = Video::orderBy('id', 'desc')->first();
        $lienketwebsite = Lienketwebsite::orderBy('thutu', 'desc')->take(4)->get();


        return view('baotangxoviet.posts.hosochiensy', [
            'danhnhancmlq' => $danhnhancmlq,
            'hsochiensy' => $hsochiensy,
            'video' => $video,
            'lienketwebsite' => $lienketwebsite,
        ]);
    }
    public function videos()
    {

        return view('baotangxoviet.posts.videos');
    }

    public function listpost()
    {
        $post = Post::all();
        return $post;
    }

    public function timkiem(Request $request)
    {
        $baiganday = Post::orderBy('id', 'asc')->take(3)->get();

        $timkiem = $request->input('search');
        $baigandays = $baiganday->pluck('id')->toArray();
        $baixemnhieunhat = Post::whereNotIn('id', $baigandays)->orderBy('id', 'asc')->take(3)->get();

        $lienketwebsite = Lienketwebsite::orderBy('thutu', 'desc')->take(4)->get();


        return view('baotangxoviet.posts.searchpost', [
            'timkiem' => $timkiem,
            'baiganday' => $baiganday,
            'baigandays' => $baigandays,
            'baixemnhieunhat' => $baixemnhieunhat,
            'lienketwebsite' => $lienketwebsite,

        ]);
    }

    public function timkiemtitle($name)
    {
        $mang = array();

        $tukhoa = Post::where('title', 'like', '%' . $name . '%')->get();

        foreach ($tukhoa as $tk) {
            $mang[] = $tk->id;
        }
        $baiviet = Post::whereIn('id', $mang)->orderBy('id', 'desc')->get();
        foreach ($baiviet as $bv) {
            $bv->excerpt = strip_tags($bv->excerpt);
        }
        return $baiviet;
    }
    public function question()
    {
        $cauhoi = Hoidap::select('Noidungcauhoi', 'id')->limit(4)->get();



        return $cauhoi;
    }

    public function postFromMenu($danhmuccha)
    {
        // $baiviet = Post::where('category_id', $getdanhmuc->id)->orderBy('id', 'asc')->take(4)->paginate(4);

        $baiganday = Post::orderBy('id', 'asc')->take(3)->get();

        $lienketwebsite = Lienketwebsite::orderBy('thutu', 'desc')->take(4)->get();
        $video = Video::orderBy('id', 'desc')->first();



        $baigandays = $baiganday->pluck('id')->toArray();
        $baixemnhieunhat = Post::whereNotIn('id', $baigandays)->orderBy('id', 'asc')->take(3)->get();


        $baiviets = Post::paginate(6);

        // $returnv = Post::where('category_id', $danhmucha->id)->orderBy('id', 'asc')->count();

        // Query Parent_id - Post
        $danhmucc = Category::where('parent_id', $danhmuccha)->where('hienthi', '=', 1)->orderBy('thutu', 'asc')->get();
        // return $danhmuc;
        // $parent_p = getDanhmuc(null);

        // return $parent_p;

        $datas = array();
        foreach ($danhmucc as $dm) {
            $t = array();
            $t['id'] = $dm->id;
            $t['label'] = $dm->name;
            $t['slug'] = $dm->slug;
            $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
            $t['parent_id'] = $dm->parent_id;
            $t['children'] = [];
            $t['kiemtra'] = 0;

            $dem = Category::where('parent_id', $dm->id)->count();
            if ($dem > 0) {
                $t['children'] = getDanhmuc($dm->id);
                $t['kiemtra'] = 1;
            }
            array_push($datas, $t,);
        }
        // return $datas;
        $list = array();
        $list_id = [];
        foreach ($datas as $data) {
            $list_id = $data['id'];
            $p = array();
            $p['name'] = $data['label'];
            $p['slug'] = $data['slug'];
            $p['baiviet'] = Post::where('category_id', $list_id)->orderBy('id', 'asc')->take(3)->get();
            array_push($list, $p,);
        }
        //return $list;
       
        return view('baotangxoviet.posts.post_child', [
            'danhmucc' => $danhmucc,
            'list' => $list,
            'lienketwebsite' => $lienketwebsite,
            'video' => $video,
            'baixemnhieunhat' => $baixemnhieunhat,
            'baiviets' => $baiviets,
            'baiganday' => $baiganday,

        ]);
    }
}
