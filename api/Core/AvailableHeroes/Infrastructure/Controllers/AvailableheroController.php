<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;

use common\models\availablehero;
use backend\models\search\AvailableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Create\AvailableHeroesSave;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetbyId;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetByrarity;

/**
 * AvailableheroController implements the CRUD actions for availablehero model.
 */
class AvailableheroController extends Controller
{
    private $AvailableHeroesSave;
    private $AvailableHeroesGetbyId;
    private $AvailableHeroesGetByrarity;
    private $availableHeroesRepository;

    public function __construct()
    {
        $this->availableHeroesRepository = new availableHeroRepositoryACtiveRecord();
        $this->AvailableHeroesSave = new AvailableHeroesSave();
        $this->AvailableHeroesGetbyId = new AvailableHeroesGetbyId();
        $this->AvailableHeroesGetByrarity = new AvailableHeroesGetByrarity();
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
        $searchModel = new AvailableheroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($hero = $this->AvailableHeroesGetbyId->getbyId($id)) !== null) {
            return $hero;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDelete($id)
    {
        $repository = new AvailableHeroRepository();
        $repository->delete($id);

        return $this->redirect(['index']);
    }

}    