<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Bloglar;
use App\Hakkimizda;
use App\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Storage;
use Image;

class AdminPostController extends AdminController
{
    public function post_ayarlar(request $request)
    {
        if (isset($request->logo)) {
            $validator = Validator::make($request->all(), [
                'logo' => 'mimes: jpg,jpeg,png,gif',
            ]);
            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Yuklediyiniz dosya uzantisi jpg, jpeg, png, gif olmalidir ']);
            }

            $logo = Input::file('logo');
            $logo_uzanti = Input::file('logo')->getClientOriginalExtension();
            $logo_isim = 'logo.' . $logo_uzanti;
            Storage::disk('uploads')->makeDirectory('img');
            Image::make($logo->getRealPath())->resize(222, 108)->save('uploads/img/' . $logo_isim);

        }

        try {
            unset($request['_token']);
            if (isset($request->logo)) {
                unset($request['eski_logo']);
                Ayarlar::where('id', 1)->update($request->all());
                Ayarlar::where('id', 1)->update(['logo' => $logo_isim]);
            } else {
                $eski_logo = $request->eski_logo;
                unset($request['eski_logo']);
                Ayarlar::where('id', 1)->update($request->all());
                Ayarlar::where('id', 1)->update(['logo' => $eski_logo]);
            }
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Kayit Basariyla Tamamlandi']);
        } catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kayit yapilamadi']);
        }
    }

    public function post_hakkimizda(request $request){
        try{
            unset($request['_token']);
            Hakkimizda::where('id', 1)->update($request->all());
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Kayit Basariyla Tamamlandi']);
        }
        catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kayit yapilamadi', 'hata' => $e]);
        }
    }

    public function post_blog_ekle(request $request){

        $validator = Validator::make($request->all(), [
            'resimler[]' => 'mimes: jpg,jpeg,png,gif',
            'baslik' => 'required|max:250',
            'etiketler' => 'required|max:250',
            'icerik' => 'required',
            'kisa_icerik' => 'required|max:300'

            ]);
            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Doldurulmasi zorunlu olan alanlari doldurun', $validator->messages()]);
            }

        $tarih=str_slug(Carbon::now());
        $slug= str_slug($request->baslik). '-' .$tarih;
        $resimler= $request->file('resimler');

        if (!empty($resimler)) {
                $i=0;
            foreach ($resimler as $resim) {
                $resim_uzanti = $resim->getClientOriginalExtension();
                $resim_isim = $i.'.' . $resim_uzanti;
                Storage::disk('uploads')->makeDirectory('img/blog/'. $slug);
                Storage::disk('uploads')->put('img/blog/'. $slug . '/'.$resim_isim, file_get_contents($resim));
                $i++;
            }
        }

        try{
            $request->merge(['slug'=>$slug]);
            Bloglar::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Kayit Basariyla Tamamlandi']);
        }
        catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kayit yapilamadi', 'hata'=> $e]);
        }
    }

    public function post_blog_sil(request $request){
        try{
            Bloglar::where('slug', $request->slug)->delete();
            Storage::disk('uploads')->deleteDirectory('img/blog/'.$request->slug);
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Silme islemi Basariyla Tamamlandi']);
        }
        catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Silme islemi yapilamadi', 'hata'=> $e]);
        }
    }

    public function post_blog_duzenle($slug, request $request){

        $validator = Validator::make($request->all(), [
            'baslik' => 'required|max:250',
            'etiketler' => 'required|max:250',
            'icerik' => 'required',
            'kisa_icerik' => 'required|max:300'

            ]);
            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => $validator-> messages()]);
            }

        if (isset($request->resim)) {
            try{
                Storage::disk('uploads')->delete($request->resim);
                return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Resim silme islemi Basariyla Tamamlandi']);
            }
            catch (\Exception $e) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Resim silme islemi yapilamadi', 'hata'=> $e]);
            }  
        }
        else{
            $resimler = $request->file('resimler');
            if(!empty($resimler)) {
                $i=$request->sayi;
                $i++;
                foreach ($resimler as $resim) {
                    $resim_uzanti = $resim->getClientOriginalExtension();
                    $resim_isim = $i.'.' . $resim_uzanti;
                    Storage::disk('uploads')->makeDirectory('img/blog/'. $slug);
                    Storage::disk('uploads')->put('img/blog/'. $slug . '/'.$resim_isim, file_get_contents($resim));
                    $i++;
                }
            }
            try{
                Bloglar::where('slug', $slug)->update(['baslik'=>$request->baslik, 'etiketler'=>$request->etiketler, 'icerik'=>$request->icerik, 'kisa_icerik'=>$request->kisa_icerik]);
                return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Kayit Basariyla Guncellendi']);
            }
            catch (\Exception $e) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kayit yapilamadi', 'hata'=> $e]);
            }
        }
    }

    public function post_kategori_ekle(Request $request){
         $validator = Validator::make($request->all(), [
            'ad' => 'required',
            ]);
            if ($validator->fails()) {
                return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kategori adini giriniz ']);
            }
            try{
            $slug=str_slug($request->ad);
            $request->merge(['slug'=>$slug]);
            Kategori::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Kayit Basariyla Tamamlandi']);
        }
        catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Kayit yapilamadi', 'hata'=> $e]);
        }
    }

     public function post_kategori_sil(Request $request){
        try{
            Kategori::where('id', $request->id)->delete();
            return response(['durum' => 'success', 'baslik' => 'basarili', 'icerik' => 'Silme islemi Basariyla Tamamlandi']);
        }
        catch (\Exception $e) {
            return response(['durum' => 'error', 'baslik' => 'hatali', 'icerik' => 'Silme islemi yapilamadi']);
        }
    }




}
