<?php

use deyraka\materialdashboard\widgets\Menu;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;
use app\assets\CustomAsset;

CustomAsset::register($this);

$sidebar_theme = Yii::$app->params['template']; //Color theme custom by Watcharaphon Piamphuetna
?>
<style>
    .sidebar-ptd{
        background-color:#940a0a;
    }
    .sidebar-bkp{
        background-color:#1b3380;
    }
</style>
<div class="sidebar sidebar-<?= $sidebar_theme ?>"  data-color="<?= $sidebar_theme ?>" data-background-color="<?= $sidebar_theme ?>" data-image="">

    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo <?= $sidebar_theme ?>">
        <a href="#" class="simple-text logo-normal" style="color: #fff;">
        <i class="fa fa-user-circle-o fa-lg fa-spin" aria-hidden="true"></i>
            <?= Yii::$app->name ?>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <?= Menu::widget([
            'items' => [
                ['label' => 'ช้อมูลผู้ลงทะเบียน', 'icon' => 'ballot', 'url' => ['/']],
                ['label' => 'UTM Report', 'icon' => 'table_chart', 'url' => ['/about']],
                ['label' => 'exxport', 'icon' => 'vertical_align_bottom', 'items' => [
                    ['label' => 'BangkokPost', 'icon' => 'looks_one', 'url' => ['/login']],
                    ['label' => 'Posttoday', 'icon' => 'looks_two', 'url' => ['/error']],
                    ['label' => 'VIP', 'icon' => 'looks_3', 'items' => [
                        ['label' => 'VIP 1', 'icon' => 'description', 'url' => ['#']],
                        ['label' => 'VIP 2', 'icon' => 'description', 'url' => ['#']],
                        ['label' => 'VIP 3', 'icon' => 'description', 'url' => ['#']],
                    ]],
                ]],
            ]
        ]); ?>    
    </div>
</div>

<script>
    $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();

    });
</script>