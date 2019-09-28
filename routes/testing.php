<?php


Route::group(['prefix'=>'admin'],function(){

Route::get('/saludar',function(){
   return "Hola Mundo";
});

Route::get('/saludar-p/{name}',function($name){
    return "Hola Mundo".$name;
});

Route::get('/saludar-d/{name}',function($name="vacio"){
    return "Hola Mundo".$name;
});

Route::get('/sumar/{op1}/{op2?}',function($op1,$op2=1){
    return $op1+$op2;
});

Route::get('/sumar-t/{op1}/{op2}/{op3?}',function($op1,$op2,$op3=1){
     return $op1+$op2+$op3;
});

Route::get('validador/{num}{num2}',function($num,$num2){
     return $num;
})->where(['nume'=>'[0-9+','num2'=>'[0-9]+']);

});