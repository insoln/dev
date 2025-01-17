<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $options [] */

?>

<?= Html::beginTag('li class="item"', $options) ?>
    <a href="<?= Url::to(['/notification/overview']); ?> id="icon-notifications"">
        <div class="icon">
            <span class="label label-danger label-notifications" id="badge-notifications" style="display:none;"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 16.8476C15.6392 16.8476 18.2481 16.1242 18.5 13.2205C18.5 10.3188 16.6812 10.5054 16.6812 6.94511C16.6812 4.16414 14.0452 1 10 1C5.95477 1 3.31885 4.16414 3.31885 6.94511C3.31885 10.5054 1.5 10.3188 1.5 13.2205C1.75295 16.1352 4.36177 16.8476 10 16.8476Z" stroke="#B4B4B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.3888 19.8574C11.0247 21.3721 8.89665 21.3901 7.51947 19.8574" stroke="#B4B4B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="name">
            <?= Yii::t('custom', 'Уведомления'); ?>
        </div>
    </a>
<?= Html::endTag('li') ?>