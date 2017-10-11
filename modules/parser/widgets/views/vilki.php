<? for($i=0; $i<count($data); $i++) { ?>
    <table class="table table-bordered">
        <tr>
            <th class="danger"><?= $data[$i]['procent'] ?>%</th>
            <th colspan="3" class="info">
                Футбол <?= date("d-m-Y H:i:s", strtotime($data[$i]['date'])); ?>
            </th>
        </tr>
        <? for ($j=0; $j<=1; $j++) { ?>
            <tr>
                <td> <?= $data[$i]['data'][$j]['bukname'] ?></td>
                <td>
                    <? if ($data[$i]['procent']<=1) { ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <b><?= $data[$i]['data'][$j]['leage'] ?></b>
                            </div>
                            <div class="col-md-12">
                                <a rel="nofollow" target="_blank" href = "<?= $data[$i]['data'][$j]['url'] ?>">
                                    <?= $data[$i]['data'][$j]['team1'] ?> - <?= $data[$i]['data'][$j]['team2'] ?>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <span style="color:green;font-size: 15px;">
                                    Коэффициенты актуальные на <?= date("d-m-Y H:i:s",strtotime($data[$i]['data'][$j]['update_date'])) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <? } else { ?>
                        <? if (Yii::$app->user->identity->time>date('Y-m-d H:i:s')) { ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b><?= $data[$i]['data'][$j]['leage'] ?></b>
                                    </div>
                                    <div class="col-md-12">
                                        <a rel="nofollow" target="_blank" href = "<?= $data[$i]['data'][$j]['url'] ?>">
                                            <?= $data[$i]['data'][$j]['team1'] ?> - <?= $data[$i]['data'][$j]['team2'] ?>
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                <span style="color:green;font-size: 15px;">
                                    Коэффициенты актуальные на <?= date("d-m-Y H:i:s",strtotime($data[$i]['data'][$j]['update_date'])) ?>
                                </span>
                                    </div>
                                </div>
                            </div>
                        <? } else { ?>
                            <input type="submit" class="btn btn-primary" value="Выберите тарифный план" onclick="window.location='/tarifi/index'">
                        <? } ?>
                    <? } ?>
                </td>
                <td><?= $data[$i]['data'][$j]['event_name'] ?> <?= $data[$i]['parametr']? '('.$data[$i]['parametr'].')':'' ?></td>
                <td><?= $data[$i]['data'][$j]['odd'] ?></td>
            </tr>
        <? } ?>
    </table>
<?} ?>