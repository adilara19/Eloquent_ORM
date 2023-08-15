<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function create(){
        $pages = new Pages;
        $pages->title='Laravel Eğitimi';
        $pages->subtitle='Laravel 9 Dersleri';
        $pages->content='Burada Laravel Eğitimi Hakkında Bilgiler Mevcut';
        $pages->save();

        return "Veri Kaydedildi";
    }

    public function createnew(){
        Pages::create([
            'title'=>'Laravel Eğitimi',
            'subtitle'=>'Laravel 9 Dersleri',
            'content'=> 'Burada Laravel Eğitimi Hakkında Bilgiler Mevcut'
        ]);

        return "Veri Eklendi";
    }

    public function read(){
        $pages = Pages::query()->get();
        return view('read', compact('pages'));
    }

    public function edit($id){
        $page = Pages::query()->find($id);

        return view('edit', compact('page'));
    }

    public function update($id){
        $page = Pages::query()->find($id);
        $page->title = 'yeni başlık deneme';
        $page->subtitle = 'yeni altbaşlık deneme';
        $page->content = 'yeni içerik deneme';

        $page->save();

        return "Veri Güncellendi!";
    }
}