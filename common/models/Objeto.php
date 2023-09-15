<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%objects}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property string $model code models
 * @property string $image code models
 * @property int $available
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string|null $createdBy relacion con usuario
 * @property string|null $updatedBy relacion con usuario
 *
 * @property Ability[] $abilities
 * @property Avatar[] $avatars
 * @property Box[] $boxes
 * @property Chaptermob[] $chaptermobs
 * @property Chapter[] $chapters
 * @property Conquermob[] $conquermobs
 * @property Guild[] $guilds
 * @property Guildtitle[] $guildtitles
 * @property Hero[] $heroes
 * @property Land[] $lands
 * @property Monster[] $monsters
 * @property Nature[] $natures
 * @property Parcelrarity[] $parcelrarities
 * @property Parcel[] $parcels
 * @property Race[] $races
 * @property Rank[] $ranks
 * @property Rarity[] $rarities
 * @property Reward[] $rewards
 * @property Shop[] $shops
 * @property Type[] $types
 * @property World[] $worlds
 */
class Objeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%objects}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'image'], 'required'],
            [['available'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'description'], 'string', 'max' => 14],
            [['color'], 'string', 'max' => 6],
            [['model', 'image'], 'string', 'max' => 18],
            [['createdBy', 'updatedBy'], 'string', 'max' => 36],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'color' => 'Color',
            'model' => 'Model',
            'image' => 'Image',
            'available' => 'Available',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Abilities]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\AbilityQuery
     */
    public function getAbilities()
    {
        return $this->hasMany(Ability::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Avatars]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\AvatarQuery
     */
    public function getAvatars()
    {
        return $this->hasMany(Avatar::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Boxes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\BoxQuery
     */
    public function getBoxes()
    {
        return $this->hasMany(Box::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Chaptermobs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ChaptermobQuery
     */
    public function getChaptermobs()
    {
        return $this->hasMany(Chaptermob::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Chapters]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ChapterQuery
     */
    public function getChapters()
    {
        return $this->hasMany(Chapter::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Conquermobs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ConquermobQuery
     */
    public function getConquermobs()
    {
        return $this->hasMany(Conquermob::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Guilds]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\GuildQuery
     */
    public function getGuilds()
    {
        return $this->hasMany(Guild::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Guildtitles]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\GuildtitleQuery
     */
    public function getGuildtitles()
    {
        return $this->hasMany(Guildtitle::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\HeroQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Hero::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Lands]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\LandQuery
     */
    public function getLands()
    {
        return $this->hasMany(Land::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Monsters]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\MonsterQuery
     */
    public function getMonsters()
    {
        return $this->hasMany(Monster::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Natures]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NatureQuery
     */
    public function getNatures()
    {
        return $this->hasMany(Nature::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Parcelrarities]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ParcelrarityQuery
     */
    public function getParcelrarities()
    {
        return $this->hasMany(Parcelrarity::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Parcels]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ParcelQuery
     */
    public function getParcels()
    {
        return $this->hasMany(Parcel::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Races]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RaceQuery
     */
    public function getRaces()
    {
        return $this->hasMany(Race::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Ranks]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RankQuery
     */
    public function getRanks()
    {
        return $this->hasMany(Rank::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Rarities]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RarityQuery
     */
    public function getRarities()
    {
        return $this->hasMany(Rarity::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Rewards]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RewardQuery
     */
    public function getRewards()
    {
        return $this->hasMany(Reward::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Shops]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ShopQuery
     */
    public function getShops()
    {
        return $this->hasMany(Shop::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Types]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TypeQuery
     */
    public function getTypes()
    {
        return $this->hasMany(Type::class, ['idObject' => 'id']);
    }

    /**
     * Gets query for [[Worlds]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\WorldQuery
     */
    public function getWorlds()
    {
        return $this->hasMany(World::class, ['idObject' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ObjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ObjectQuery(get_called_class());
    }
}
