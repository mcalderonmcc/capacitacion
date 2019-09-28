<?php
Route::group(['prefix'=>'admin'],function(){
    Route::get('/saludar',function(){
        return "Hola";
    });
    Route::get('/saludar-p/{name}',function($name){
        return "Hola".$name;
    });

    Route::get('/saludar-d/{name?}',function($name="vacio"){
        return "Hola".$name;
    });
    
    Route::get('validador/{num}',function($num){
        return $num;
    })->where(['num'=>'[0-9]+']);

});