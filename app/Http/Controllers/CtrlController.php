<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは世界', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg'=>'こんにちは世界'], 200)
            ->withHeaders([
                'Content-Type' => 'text/xml',
                'X-Powered-FW' => 'Laravel6',
            ]);
            #->header('Content-Type', 'text/xml');
    }
    public function outJson()
    {
        // return response()->json([
        //     'name' => 'Yamada',
        //     'sex' => 'Male',
        //     'age' => 18,
        // ])->withCallback('callback_method');
        return [
            'name' => 'Yamada',
            'sex' => 'Male',
            'age' => 18,
        ];
    }
    public function outFile()
    {
        return response()
            ->download('C:\xampp\htdocs\laravel_sample\data.csv', 'download.csv', [
                'content-type' => 'text/csv'
            ]);
    }

    public function outCSV()
    {
        return response()
            ->streamDownload(function(){
                print(
                    "1, 2019/10/1, 123\n".
                    "2, 2019/10/2, 116\n".
                    "3, 2019/10/3, 98\n".
                    "4, 2019/10/4, 102\n".
                    "5, 2019/10/5, 134\n"
                );
            }, 'download2.csv', [
                'content-type' => 'text/csv'
            ]);
    }

    public function outImage()
    {
        return response()
            ->file('C:\xampp\htdocs\laravel_sample\cat.png', [
                'content-type' => 'image/png'
            ]);
    }
    //ctrl/redirectBasic
    public function redirectBasic()
    {
        // return redirect('hello/list');

        // return redirect()->route('list');

        // return redirect()->route('param', [
        //     'id' => 108
        // ]);

        // return redirect()->action('RouteController@param', [ 'id' => 108 ]);

        return redirect()->away('https://wings.msn.to/');
    }

    public function index(Request $req)
    {
        return 'リクエストパス：'. $req->path();
    }

    public function form()
    {
        return view('ctrl.form', [
            'name' => '',
            'result' => ''
        ]);
    }
    public function result(Request $req)
    {
        // $name = $req->input('name', '名無しの権平');
        $name = $req->name;
        if(empty($name) || mb_strlen($name) > 10) {
            return redirect('ctrl/form')
                // 入力値を残す
                ->withInput()
                // フラッシュメッセージ
                ->with('alert', '名前は必須、または10文字以内で入力してください。');
        } else {
            return view('ctrl.form', [
                'name' => $name,
                'result' => 'こんにちは'. $name. 'さん！'
            ]);
        }

    }

    public function upload()
    {
        return view('ctrl.upload', [
            'result' => ''
        ]);
    }
    public function uploadfile(Request $req)
    {
        if(!$req->hasFile('upfile')) {
            return 'ファイルを指定してください';
        }
        $file = $req->upfile;
        if(!$file->isValid()) {
            return 'アップロードに失敗しました';
        }
        $name = $file->getClientOriginalName();
        //（/storage/app フォルダーからの相対パス）
        $file->storeAs('files', $name);

        return view('ctrl.upload', [
            'result' => $name. 'をアップロードしました'
        ]);
    }

    public function middle()
    {
        return 'middle ware log';
    }
}
