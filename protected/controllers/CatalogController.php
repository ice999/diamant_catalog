<?php
/**
 * Created by JetBrains PhpStorm.
 * User: User
 * Date: 16.09.11
 * Time: 16:21
 * To change this template use File | Settings | File Templates.
 */

class CatalogController extends Controller
{


	public function actionIndex()
	{
		$sql = "SELECT * FROM item";
		$rows = Yii::app()->db->createCommand($sql)->query()->readAll();

		$items = array();

		foreach ($rows as $row)
		{
			$oneRow = new stdClass();
			$oneRow->article = $row['article'];
			$oneRow->id = $row['id'];
			$oneRow->material_id = $row['material_id'];
			$oneRow->tech_id = $row['tech_id'];
			$oneRow->type_id = $row['type_id'];
			$oneRow->subtype_id = $row['subtype_id'];
			$oneRow->ins_type_id = $row['ins_type_id'];
			$oneRow->ins_subtype_id = $row['ins_subtype_id'];
			$items[] = $oneRow;
		}

		$this->render('index', array("items" => $items));
	}


	public function actionCreate()
	{

		$model = new Item;


		//echo $name;
		if (isset($_FILES['Item']))
		{

			$imageName = $_FILES['Item']['name']['image'];
			//$tmpName = $_FILES['Item']['tmp_name']['image'];

			$aTmp = explode(".", $imageName);
			$name = $aTmp[0];

			if (!empty($name))
			{
				$model->material_id = substr($name, 0, 1);
				$model->tech_id = substr($name, 1, 1);
				$model->type_id = substr($name, 2, 1);
				$model->subtype_id = substr($name, 3, 1);
				$model->ins_type_id = substr($name, 4, 1);
				$model->ins_subtype_id = substr($name, 5);
				//$model->set_id = null;
				$model->article = $name;

				$model->save();
			}
		}
		
		//$model->image =
		//echo $model->test;

		$this->render('create',
		              array(
		                   'model' => $model
		              )
		);


	}

}
