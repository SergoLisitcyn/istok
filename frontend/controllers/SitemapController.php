<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Pages;
use common\models\Services;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SitemapController  extends Controller
{
    public function actionIndex()
    {
        $urls = [];

        $services = Services::find()->where(['status' => 1])->all();
        foreach ($services as $service) {
            $urls[] = [
                'loc' => $service->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
            $categories = Category::find()->where(['parent_id'=> $service->id,'status'=> 1])->all();
            foreach ($categories as $category){
                if($category->url){
                    $urls[] = [
                        'loc' => $service->url.'/'.$category->url,
                        'lastmod' => date( DATE_W3C ),
                        'priority' => 0.80
                    ];
                }
            }
        }

        $pages = Pages::find()->where(['status' => 1])->all();
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => $page->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }

        $xmlSitemap = $this->renderPartial('index', [
            'host' => Yii::$app->request->hostInfo,
            'urls' => $urls,
        ]);

        Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $xmlSitemap;
    }
}