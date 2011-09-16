<? $this->pageTitle=Yii::app()->name; ?>

<table cellpadding="2">
	<tr>
		<th>№</th>
		<th>id</th>
		<th>material_id</th>
		<th>tech_id</th>
		<th>type_id</th>
		<th>subtype_id</th>
		<th>ins_type_id</th>
		<th>ins_subtype_id</th>
		<th>article</th>
	</tr>
<? foreach ($items as $i => $item): ?>
	<tr>
		<td><?= $i + 1;?></td>
		<td><?= $item->id;?></td>
		<td><?= $item->material_id;?></td>
		<td><?= $item->tech_id;?></td>
		<td><?= $item->type_id;?></td>
		<td><?= $item->subtype_id;?></td>
		<td><?= $item->ins_type_id;?></td>
		<td><?= $item->ins_subtype_id;?></td>
		<td><?= $item->article;?></td>
	</tr>
<? endforeach;?>
</table>