<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('common','Message');
?>
<div class="contact-view">
    <p>
        <?php echo \yii\helpers\Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this contact?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'body',
            'created_at',
        ],
    ]) ?>

</div>
