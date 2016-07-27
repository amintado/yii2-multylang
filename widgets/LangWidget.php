<?php

namespace ut8ia\multylang\widgets;

use ut8ia\multylang\models\Lang;
use \yii\bootstrap\Widget;

class LangWidget extends Widget
{
    public function run()
    {
        return $this->render('lang/view', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->all(),
        ]);
    }

}
