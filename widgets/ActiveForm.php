<?php
/**
 * @link https://github.com/gromver/yii2-models.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-models/blob/master/LICENSE
 * @package yii2-models
 * @version 1.0.0
 */

namespace gromver\models\widgets;
use yii\helpers\Html;

/**
 * Class ActiveForm
 * @package yii2-models
 * @author Gayazov Roman <gromver5@gmail.com>
 */
class ActiveForm extends \yii\bootstrap\ActiveForm
{
    public function init()
    {
        ob_start();
        ob_implicit_flush(false);

        parent::init();

        ob_end_clean();

        echo Html::beginTag('div', $this->options);
    }

    public function run()
    {
        ob_start();
        ob_implicit_flush(false);

        parent::run();

        ob_end_clean();

        echo Html::endTag('div');
    }
} 