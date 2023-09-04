<?php

namespace backend\controllers;

use common\models\availablehero;
use backend\models\Search\availableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Create\AvailableHeroesSave;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetbyId;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetByrarity;
use api\Core\AvailableHeroes\Application\Delete\AvailableHeroesDelete;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use common\models\availablehero as AvailableHeroesModel;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroMapper;    
use api\Shared\Domain\Bus\Event\EventBus;
use api\Core\AvailableHeroes\Infrastructure\Controllers\AvailableHeroController as AHController;
use Yii;

/**
 * AvailableheroController implements the CRUD actions for availablehero model.
 */
class AvailableheroController extends Controller
{
    public $ahController;

    public function __construct($id, $module, AvailableHeroesRepositoryInterface $ahController, $config = [])
    {
        $this->ahController = $ahController;
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


    public function actionView($id)
    {
        $model = $this->ahController->getById($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate()
    {
        $model = new availablehero();

        if ($this->request->isPost && $model = AvailableHeroMapper::PostToDomain($this->request->post())) {
            if($id = $this->ahController->save($model)){
                return $this->redirect(['view', 'id' => $id]);   
            }        
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', ['model' => $model ]);
    }


    public function actionUpdate($id)
    {

        $dom= $this->ahController->getById($id);
        $model = AvailableHeroMapper::toModel($dom);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->updated_at=time();
                $availableHeroDom = AvailableHeroMapper::toDomain($model);
                if($id = $this->ahController->update($availableHeroDom)) {
                    return $this->redirect(['view', 'id' => $id]);
                }
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
