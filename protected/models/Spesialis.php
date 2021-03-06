<?php

/**
 * This is the model class for table "spesialis".
 *
 * The followings are the available columns in table 'spesialis':
 * @property string $id_spesialis
 * @property string $nm_spesialis
 *
 * The followings are the available model relations:
 * @property Dokter[] $dokters
 */
class Spesialis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Spesialis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'spesialis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_spesialis, nm_spesialis', 'required'),
			array('id_spesialis', 'length', 'max'=>5),
			array('nm_spesialis', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_spesialis, nm_spesialis', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'dokters' => array(self::HAS_MANY, 'Dokter', 'id_spesialis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_spesialis' => 'Id Spesialis',
			'nm_spesialis' => 'Nm Spesialis',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_spesialis',$this->id_spesialis,true);
		$criteria->compare('nm_spesialis',$this->nm_spesialis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}