<?php
/* @var $this \yii\web\View */
/* @var $content string */
\frontend\assets\HejiahuanFrontendAsset::register($this);
$this->beginContent('@frontend/views/layouts/_clear.php');
?>
    <div class="backtop"><img src="/images/backtop.png"/></div>
    <div class="bodypage">
        <header>
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
                        </div>


                    </div>
                </nav>
            </div>

            <div id="hw1_mob_nav_container">
                <div class="mob_nav_open  visible-xs visible-sm">
                    <ul>
                        <li>
                            <a href="/" class="navbar-toggle primary-nav-consumer-mob"
                               data-target="#primary-nav-consumer-mob" aria-expanded="false"
                               aria-controls="primary-nav-consumer-mob">首页</a>

                        </li>
                        <li>
                            <a href="/page/product-detail" class="navbar-toggle primary-nav-enterprise-mob"
                               data-target="#primary-nav-enterprise-mob" aria-expanded="false"
                               aria-controls="primary-nav-enterprise-mob">产品介绍 </a>

                        </li>
                        <!--                        <li>-->
                        <!--                            <a href="/article#news" class="navbar-toggle primary-nav-insights-mob"-->
                        <!--                               data-target="#primary-nav-insights-mob" aria-expanded="false"-->
                        <!--                               aria-controls="primary-nav-insights-mob">资讯</a>-->
                        <!---->
                        <!--                        </li>-->
                        <li>
                            <a href="/active#active" class="navbar-toggle partner-mob" data-target="#partner-mob"
                               aria-expanded="false" aria-controls="partner-mob">活动 </a>
                        </li>

                        <li>
                            <a href="/page/cooperation#cooperation" class="navbar-toggle primary-nav-insights-mob"
                               data-target="#primary-nav-insights-mob" aria-expanded="false"
                               aria-controls="primary-nav-insights-mob">合作 </a>

                        </li>
                        <li>
                            <a href="/site/contact#faq" class="navbar-toggle primary-nav-insights-mob"
                               data-target="#primary-nav-insights-mob" aria-expanded="false"
                               aria-controls="primary-nav-insights-mob">咨询与帮助 </a>

                        </li>
                    </ul>


                </div>


            </div>
        </header>
        <div class="margintop"></div>
        <?= $content ?>
        <div class="hjh-pc">
            <div class="copyrightmod">
                <div class="copyrightmod1">
                    <div class="pagemain">
                        <div class="copyrightmod2">
                            <div class="logo1"><a target="_blank" href="http://www.hxgro.com"><img
                                            src="/images/logo1.jpg"/></a></div>
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
                        <div class="copyrightmod2tit">
                            <div class="copyrightmod2tit1"><a href="/page/about-company">公司介绍</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-youguan">恒信东方儿童优馆</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-youpin">恒信东方儿童优品</a></div>
                        </div>
                    </div>
                    <div class="copyrightmod2-2">
                        <div class="copyrightmod2tit">
                            <!--                            <div class="copyrightmod2tit1"><a href="/page/about-vr">超星时空首映礼</a></div>-->
                            <div class="copyrightmod2tit1"><a href="/join-us">加入我们</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-law">法律顾问</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-contact">联系我们</a></div>
                        </div>
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
        <?= $this->blocks['video_box'] ?>
    </div>

    <script>
        <?php $this->beginBlock('SWITCH_NAV')?>
        var url = location.href;
        var arr = url.split("#");
        if (arr[1]) {
            $("#hw1_global_nav .topnav li").removeClass('topnavlicur');
            $("#" + arr[1]).closest('li').addClass('topnavlicur');
        }
        <?php $this->endBlock()?>
    </script>
<?php $this->registerJs($this->blocks['SWITCH_NAV'], \yii\web\View::POS_READY) ?>
<?php $this->endContent() ?>