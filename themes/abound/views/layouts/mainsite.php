<?php $model=Role::model()->findByAttributes(array('role_type'=>'admin','id'=>3));
    CVarDumper::dump($model,10,1);
 ?>