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
        
        if ($this->request->isPost && $array=$this->request->post()["availablehero"]) {
            $model = availableheroDom::create(
                new AvailableHeroId(0),
                new AvailableHeroName($array["name"]),
                new AvailableHeroDescription($array["description"]),
                new AvailableHeroWorld($array["world"]),
                new Avatar($array["avatar"]),
                new Avatar($array["avatarBlock"]),
                new FkId((int)$array["race_id"]),
                new FkId((int)$array["rarity_id"]),
                new FkId((int)$array["nature_id"]),
                new FkId((int)$array["type_id"]),
                new Stats((int)$array["attack_min"]),
                new Stats((int)$array["attack_max"]),
                new Boost((int)$array["b_attack_min"]),
                new Boost((int)$array["b_Battack_max"]),
                new Stats((int)$array["defense_min"]),
                new Stats((int)$array["defense_max"]),
                new Boost((int)$array["b_defense_min"]),
                new Boost((int)$array["b_defense_max"]),
                new Stats((int)$array["hp_min"]),
                new Stats((int)$array["hp_max"]),
                new Boost((int)$array["b_hp_min"]),
                new Boost((int)$array["b_hp_max"]),
                new Stats((int)$array["sp_attack_min"]),
                new Stats((int)$array["sp_attack_max"]),
                new Boost((int)$array["b_sp_attack_min"]),
                new Boost((int)$array["b_sp_attack_max"]),
                new Stats((int)$array["sp_defense_min"]),
                new Stats((int)$array["sp_defense_max"]),
                new Boost((int)$array["b_sp_defense_min"]),
                new Boost((int)$array["b_sp_defense_max"]),
                new Stats((int)$array["speed_min"]),
                new Stats((int)$array["speed_max"]),
                new Boost((int)$array["b_speed_min"]),
                new Boost((int)$array["b_speed_max"]),
                new Stats((int)$array["farming_min"]),
                new Stats((int)$array["farming_max"]),
                new Boost((int)$array["b_farming_min"]),
                new Boost((int)$array["b_farming_max"]),
                new Stats((int)$array["steeling_min"]),
                new Stats((int)$array["steeling_max"]),
                new Boost((int)$array["b_steeling_min"]),
                new Boost((int)$array["b_steeling_max"]),
                new Stats((int)$array["wooding_min"]),
                new Stats((int)$array["wooding_max"]),
                new Boost((int)$array["b_wooding_min"]),
                new Boost((int)$array["b_wooding_max"]),
                (int)$array["available"],
                isset($array["created_at"]) ? new DateTime('@' . $array["created_at"]) : null,
                isset($array["updated_at"]) ? new DateTime('@' . $array["updated_at"]) : null,
                isset($array["created_by"]) ? new UUID($array["created_by"]) : null,
                isset($array["updated_by"]) ? new UUID($array["updated_by"]) : null
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
        $model = $dom->toPrimitives();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $availableHero = $this->controller->getById($id);
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
