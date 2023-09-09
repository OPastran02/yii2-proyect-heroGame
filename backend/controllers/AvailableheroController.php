<?php

namespace backend\controllers;

use common\models\availablehero;
use backend\models\Search\availableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Infrastructure\Controllers\GetAHeroByIdController;
use api\Core\AvailableHeroes\Infrastructure\Controllers\GetAHeroByRarityController;
use api\Core\AvailableHeroes\Infrastructure\Controllers\SaveAHeroController;

use Yii;

/**
 * AvailableheroController implements the CRUD actions for availablehero model.
 */
class AvailableheroController extends Controller
{

    public function __construct($id, $module,$config = [])
    {
        parent::__construct($id, $module, $config);
    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    public function actionIndex()
    {
        $searchModel = new availableheroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    //buscar AvailableHero por id
    public function actionView($id)
    {
        $model = (new GetAHeroByIdController())($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new availablehero();

        if ($this->request->isPost && $array = $this->request->post()['availablehero']) {
            if($id = (new SaveAHeroController())($array)){
                return $this->redirect(['view', 'id' => $id]);   
            }        
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', ['model' => $model ]);
    }


    public function actionUpdate($id)
    {

        $model = (new GetAHeroByIdController())($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $availableHero = $this->controller->getById($id);
            if($id = $this->ahController->update($availableHeroDom)) {
                return $this->redirect(['view', 'id' => $id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->ahController->delete($id);
        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        $model = AvailableHeroMapper::toModel($this->ahController->getById($id));
        if ($model !== null) return $model;
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
