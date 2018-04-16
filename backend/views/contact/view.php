<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('common','Message');
?>
<div class="user-view">
    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'body',
            'created_at:datetime',
        ],
    ]) ?>

</div>
