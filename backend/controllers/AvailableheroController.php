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
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\Stats;
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
        
        if ($this->request->isPost && $array = $this->request->post()["availablehero"]) {
            $model::fromPrimitives(
                null,
                $array['name'],  
                $array['description'],
                $array['world'],  
                $array['avatar'],  
                $array['avatarBlock'],  
                $array['race_id'],  
                $array['rarity_id'],  
                $array['nature_id'],  
                $array['type_id'],  
                $array['attack_min'],  
                $array['attack_max'],  
                $array['b_attack_min'],  
                $array['b_Battack_max'],  
                $array['defense_min'],  
                $array['defense_max'],  
                $array['b_defense_min'],  
                $array['b_defense_max'],  
                $array['hp_min'],  
                $array['hp_max'],  
                $array['b_hp_min'],  
                $array['b_hp_max'],  
                $array['sp_attack_min'],  
                $array['sp_attack_max'],  
                $array['b_sp_attack_min'],  
                $array['b_sp_attack_max'],  
                $array['sp_defense_min'],  
                $array['sp_defense_max'],  
                $array['b_sp_defense_min'],  
                $array['b_sp_defense_max'],  
                $array['speed_min'],  
                $array['speed_max'],  
                $array['b_speed_min'],  
                $array['b_speed_max'],  
                $array['farming_min'],  
                $array['farming_max'],  
                $array['b_farming_min'],  
                $array['b_farming_max'],  
                $array['steeling_min'],  
                $array['steeling_max'],  
                $array['b_steeling_min'],  
                $array['b_steeling_max'],  
                $array['wooding_min'],  
                $array['wooding_max'],  
                $array['b_wooding_min'],  
                $array['b_wooding_max'],  
                $array['available'],  
            );
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

        $dom = $this->ahController->getById($id);

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
