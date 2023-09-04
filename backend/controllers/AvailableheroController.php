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

    /**
     * Lists all availablehero models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new availableheroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single availablehero model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->ahController->getById($id);
        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new availablehero model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new availablehero();
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $availableHeroDom = AvailableHeroMapper::toDomain($model);
                if($id = $this->ahController->save($availableHeroDom)){
                    return $this->redirect(['view', 'id' => $id]);   
                }        
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', ['model' => $model ]);
    }

    /**
     * Updates an existing availablehero model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found0.
     */
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

    /**
     * Deletes an existing availablehero model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->ahController->delete($id);
        return $this->redirect(['index']);
    }

    /**
     * Finds the availablehero model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return availablehero the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = AvailableHeroMapper::toModel($this->ahController->getById($id));
        if ($model !== null) return $model;
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
