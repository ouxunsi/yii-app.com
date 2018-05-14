<?php
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model \common\models\Page */
\frontend\assets\HejiahuanFrontendAsset::register($this);
$this->registerCss('body {background:#ededed;}');
?>
<div class="bodypage">
    <header style="position:fixed">
        <div id="hw1_global_nav">
            <nav>
                <div class="container">
                    <div class="hjh-pc">
                        <div class="headtop">
                            <div class="logo"><a href="/"><img src="/images/logo.jpg"></a></div>
                            <div class="topnav">
                                <?php echo \common\widgets\DbMenu::widget(['key' => 'frontend-index']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="hjh-mobile">
                        <div class="headtop">
                            <div class="logo"><a href="/"><img src="/images/logoxiao.jpg"></a></div>
                            <div class="hw1_masthead_rightside visible-xs visible-sm">
                                <ul class="clearfix">
                                    <li class="hw1_show_more visible-sm visible-xs">
                                        <a href="javascript:;" class="js-mobile-nav-open-btn"
                                           data-target="#hw1_mob_nav_container">
                                            <span class="hwic_dehaze"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="aboutmenu">
                            <div class="aboutmenutit">
                                <span>菜单</span><span class="upicon"><img src="/images/down.png"/></span>
                            </div>
                            <?= \common\widgets\DbMenu::widget(['key' => 'frontend-about', 'options' => ['style' => "display:none"]]) ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div id="hw1_mob_nav_container">
            <div class="mob_nav_open  visible-xs visible-sm">
                <?= \common\widgets\DbMenu::widget(['key' => 'mob-frontend-index']) ?>
            </div>
        </div>
    </header>
    <div class="margintop"></div>
    <div class="pagemain1">
        <div class="aboutmod1">
            <div class="aboutnav">
                <?= \common\widgets\DbMenu::widget(['key' => 'frontend-about-left', 'options' => ['id' => "about-menu"]]) ?>
            </div>

            <div class="aboutright">
                <?= $model->body ?>
            </div>
        </div>


    </div>
    <div class="hjh-pc">
        <div class="copyrightmod">
            <div class="copyrightmod1">
                <div class="pagemain">
                    <div class="copyrightmod2">
                        <div class="logo1"><a target="_blank" href="http://www.hxgro.com"><img src="/images/logo1.jpg"/></a>
                        </div>
                        <?= \common\widgets\DbMenu::widget(['key' => 'frontend-footer', 'options' => ['tag' => 'div', 'class' => 'copyrightmod2tit']]) ?>
                    </div>
                </div>

            </div>
            <div class="copyrightmod3">
                <div class="pagemain">
                    <div class="copyrightmod3tit">
                        ©2018 恒信东方文化股份有限公司 京ICP备09008062号 京公海网安备110108001245号
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hjh-mobile">
        <div class="copyrightmod1">
            <div class="pagemain">
                <div class="copyrightmod2-0"><a target="_blank" href="http://www.hxgro.com"><img
                                src="/images/logo1min.png"/></a></div>
                <div class="copyrightmod2-1">
                    <?= \common\widgets\DbMenu::widget(['key' => 'mob-frontend-footer-1', 'options' => ['tag' => 'div', 'class' => 'copyrightmod2tit']]) ?>
                </div>
                <div class="copyrightmod2-2">
                    <?= \common\widgets\DbMenu::widget(['key' => 'mob-frontend-footer-2', 'options' => ['tag' => 'div', 'class' => 'copyrightmod2tit']]) ?>
                </div>
            </div>

        </div>
        <div class="copyrightmod3">
            <div class="pagemain">
                <div class="copyrightmod3tit">
                    <div class="copyrightmod3-1">©2018 恒信东方文化股份有限公司 京ICP备09008062号</div>
                    <div class="copyrightmod3-2">京公海网安备110108001245号</div>
                    <div class="copyrightmod3-3"><img src="/images/friendlink.png"/></div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    <?php $this->beginBlock('SWITCH_LIST')?>
    var slug = '<?=$model->slug?>';
    if (slug) {
        $("#" + slug).addClass("aboutnavlicur");
    }
    <?php $this->endBlock();?>
</script>
<?php $this->registerJs($this->blocks['SWITCH_LIST'], \yii\web\View::POS_READY) ?>
