<?php

/**
 * This is the model class for table "db".
 *
 * The followings are the available columns in table 'db':
 * @property string $Host
 * @property string $Db
 * @property string $User
 * @property string $Select_priv
 * @property string $Insert_priv
 * @property string $Update_priv
 * @property string $Delete_priv
 * @property string $Create_priv
 * @property string $Drop_priv
 * @property string $Grant_priv
 * @property string $References_priv
 * @property string $Index_priv
 * @property string $Alter_priv
 * @property string $Create_tmp_table_priv
 * @property string $Lock_tables_priv
 * @property string $Create_view_priv
 * @property string $Show_view_priv
 * @property string $Create_routine_priv
 * @property string $Alter_routine_priv
 * @property string $Execute_priv
 * @property string $Event_priv
 * @property string $Trigger_priv
 */
class Db extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Db the static model class
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
		return 'db';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Host', 'length', 'max'=>60),
			array('Db', 'length', 'max'=>64),
			array('User', 'length', 'max'=>16),
			array('Select_priv, Insert_priv, Update_priv, Delete_priv, Create_priv, Drop_priv, Grant_priv, References_priv, Index_priv, Alter_priv, Create_tmp_table_priv, Lock_tables_priv, Create_view_priv, Show_view_priv, Create_routine_priv, Alter_routine_priv, Execute_priv, Event_priv, Trigger_priv', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Host, Db, User, Select_priv, Insert_priv, Update_priv, Delete_priv, Create_priv, Drop_priv, Grant_priv, References_priv, Index_priv, Alter_priv, Create_tmp_table_priv, Lock_tables_priv, Create_view_priv, Show_view_priv, Create_routine_priv, Alter_routine_priv, Execute_priv, Event_priv, Trigger_priv', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Host' => 'Host',
			'Db' => 'Db',
			'User' => 'User',
			'Select_priv' => 'Select Priv',
			'Insert_priv' => 'Insert Priv',
			'Update_priv' => 'Update Priv',
			'Delete_priv' => 'Delete Priv',
			'Create_priv' => 'Create Priv',
			'Drop_priv' => 'Drop Priv',
			'Grant_priv' => 'Grant Priv',
			'References_priv' => 'References Priv',
			'Index_priv' => 'Index Priv',
			'Alter_priv' => 'Alter Priv',
			'Create_tmp_table_priv' => 'Create Tmp Table Priv',
			'Lock_tables_priv' => 'Lock Tables Priv',
			'Create_view_priv' => 'Create View Priv',
			'Show_view_priv' => 'Show View Priv',
			'Create_routine_priv' => 'Create Routine Priv',
			'Alter_routine_priv' => 'Alter Routine Priv',
			'Execute_priv' => 'Execute Priv',
			'Event_priv' => 'Event Priv',
			'Trigger_priv' => 'Trigger Priv',
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

		$criteria->compare('Host',$this->Host,true);
		$criteria->compare('Db',$this->Db,true);
		$criteria->compare('User',$this->User,true);
		$criteria->compare('Select_priv',$this->Select_priv,true);
		$criteria->compare('Insert_priv',$this->Insert_priv,true);
		$criteria->compare('Update_priv',$this->Update_priv,true);
		$criteria->compare('Delete_priv',$this->Delete_priv,true);
		$criteria->compare('Create_priv',$this->Create_priv,true);
		$criteria->compare('Drop_priv',$this->Drop_priv,true);
		$criteria->compare('Grant_priv',$this->Grant_priv,true);
		$criteria->compare('References_priv',$this->References_priv,true);
		$criteria->compare('Index_priv',$this->Index_priv,true);
		$criteria->compare('Alter_priv',$this->Alter_priv,true);
		$criteria->compare('Create_tmp_table_priv',$this->Create_tmp_table_priv,true);
		$criteria->compare('Lock_tables_priv',$this->Lock_tables_priv,true);
		$criteria->compare('Create_view_priv',$this->Create_view_priv,true);
		$criteria->compare('Show_view_priv',$this->Show_view_priv,true);
		$criteria->compare('Create_routine_priv',$this->Create_routine_priv,true);
		$criteria->compare('Alter_routine_priv',$this->Alter_routine_priv,true);
		$criteria->compare('Execute_priv',$this->Execute_priv,true);
		$criteria->compare('Event_priv',$this->Event_priv,true);
		$criteria->compare('Trigger_priv',$this->Trigger_priv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}