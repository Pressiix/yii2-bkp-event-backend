<?php
use app\assets\CustomAsset;

CustomAsset::register($this);
?>
<style>
    .success-box {
        background-color: green;
        border: none;
        color: white;
        padding: 10px 10px;
        width: 25px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    .cancel-box {
        background-color: red;
        border: none;
        color: white;
        padding: 10px 10px;
        width: 25px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    .not-pay-box {
        background-color: grey;
        border: none;
        color: white;
        padding: 10px 10px;
        width: 25px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }

    @media only screen and (max-width: 770px) {
       .pre-status {
            width: 30px;
        }

        i{
            margin:5px 40px 3px -5px;
        }
    }
    
</style>
<h1>ข้อมูลผู้สมัคร</h1>
<div class="site-index">
    <div class="jumbotron">
        <div class="row">
                <table id="regis-info" class="col-md-12 table table-bordered table-hover" width="100%">
                        <thead>
                            <tr class="th-<?= Yii::$app->params['template'] ?> text-center">
                                <th class="col-xs-1">#</th>
                                <th class="col-xs-1">ชื่อ</th>
                                <th class="col-xs-1">เบอร์โทร</th>
                                <th class="col-xs-1">จำนวนเงิน</th>
                                <th class="col-xs-1">เลขอ้างอิง</th>
                                <th class="col-xs-1">การจ่ายเงิน</th>
                                <th class="col-xs-1">สถานะ</th>
                                <th class="col-xs-1">แก้ไข</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $item){ ?>
                                <tr class="text-center">
                                    <td><?= $item->index ?></td>
                                    <td><?= $item->name ?></td>
                                    <td><?= $item->phone ?></td>
                                    <td><?= number_format($item->payment_price).' '.($item->tax == 1 ? '(ขอใบกำกับ)' : '') ?></td>
                                    <td><?= $item->payment_id ?></td>
                                    <td><?= $item->payment_type == 'T' ? 'Transfer' : 'Credit' ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4 pre-status"></div>
                                            <div class=" <?= ($item->payment_status == 2 ? 'success' : ($item->payment_status == 4 ? 'cancel' : 'not-pay')) ?>-box col-md-4">
                                                <i class="fa fa-<?= ($item->payment_status == 2 ? 'check' : ($item->payment_status == 4 ? 'close' : 'circle-o-notch')) ?>"></i>
                                                
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn btn-warning">More</button></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
        </div>
        <script>
            $(document).ready(function() {
                $('#regis-info').DataTable( {
                    autoWidth: false,
                    columnDefs: [
                        {
                            targets: ['_all'],
                            className: 'mdc-data-table__cell'
                        }
                    ]
                } );
            } );
        </script>
    </div>
</div>
