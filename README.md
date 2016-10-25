# yii2-multylang
***about***

Multi lingual functionality for content \ whole application
- url routing
- unlimited languages
- frontend widget
- simple usage

***installing***

add into composer.json
~~~
 "ut8ia/yii2-multylang":"*"
 ~~~
 
  
 Apply migrations
 ~~~
 yii migrate --migrationPath=vendor/ut8ia/yii2-multylang/migrations
 ~~~
 
 ***configuration***
 To allow handle lang in request , config component.
 For example site.com/en/about
 ~~~
    'components' => [
        'request' => [
            'class' => 'ut8ia\multylang\components\LangRequest'
        ],
    ],

 ~~~

 ***recomended***
 
 - http://github.com/ut8ia/yii2-adminmenu
 - http://github.com/ut8ia/yii2-content-module
 - http://github.com/ut8ia/yii2-sliders-module
 
 ***usage***

 ~~~
 <?

use ut8ia\multylang\models\Lang;
Lang::getCurrent();

?>
 ~~~
