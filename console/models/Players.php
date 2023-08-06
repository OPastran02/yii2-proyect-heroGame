<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property string $id
 * @property string|null $phrase
 * @property string|null $title
 * @property int|null $coins
 * @property int|null $diamonds
 * @property int|null $crystals
 * @property int|null $experience
 * @property int|null $level
 * @property int|null $loginDays
 * @property string|null $avatar
 * @property int|null $isActive
 * @property int|null $lastLogin
 * @property int|null $playerType
 * @property int|null $adsViewed
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property GuildsPlayers[] $guildsPlayers
 * @property Heroes[] $heroes
 * @property User $id0
 * @property PlayersWorlds[] $playersWorlds
 * @property User $updatedBy
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['coins', 'diamonds', 'crystals', 'experience', 'level', 'loginDays', 'isActive', 'lastLogin', 'playerType', 'adsViewed', 'available', 'created_at', 'updated_at'], 'integer'],
            [['id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['phrase', 'title'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 10],
            [['id'], 'unique'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phrase' => 'Phrase',
            'title' => 'Title',
            'coins' => 'Coins',
            'diamonds' => 'Diamonds',
            'crystals' => 'Crystals',
            'experience' => 'Experience',
            'level' => 'Level',
            'loginDays' => 'Login Days',
            'avatar' => 'Avatar',
            'isActive' => 'Is Active',
            'lastLogin' => 'Last Login',
            'playerType' => 'Player Type',
            'adsViewed' => 'Ads Viewed',
            'available' => 'Available',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[GuildsPlayers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuildsPlayers()
    {
        return $this->hasMany(GuildsPlayers::class, ['player_id' => 'id']);
    }

    /**
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Heroes::class, ['player_id' => 'id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PlayersWorlds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlayersWorlds()
    {
        return $this->hasMany(PlayersWorlds::class, ['player_id' => 'id']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
}
