<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\PagoUsuario $model
 */

$this->title = 'Update Pago Usuario: ' . ' ' . $model->pago_UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Pago Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pago_UsuarioID, 'url' => ['view', 'id' => $model->pago_UsuarioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pago-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
