<?php

declare(strict_types=1);

namespace test\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(): string
    {
        return $this->route;
    }
}