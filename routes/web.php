<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// サンプルページを追加
// Route::get('/hello', function() {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// ヒアドキュメント
Route::get('/hello/{msg?}', function($msg='no message, sorry'){


$html = <<<EOF
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <style>
        body { font-size: 16pt; color: #999; }
        h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
    </style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルページです。</p>
</body>
</html>
EOF;

return $html;

});
// Route::get('/hello', function() use ($html) {
//     return $html;
// });
