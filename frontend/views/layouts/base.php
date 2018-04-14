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
                                    <ul>
                                        <li id="home"><a href="/#home">首页</a></li>
                                        <li id="product"><a href="/page/product-detail#product">产品介绍</a></li>
                                        <li id="news"><a href="zixunlist.html#news">资讯</a></li>
                                        <li id="active"><a href="/page/active#active">活动</a></li>
                                        <li id="cooperation"><a href="/page/cooperation#cooperation">合作</a></li>
                                        <li id="faq"><a href="/site/contact#faq">咨询与帮助</a></li>
                                    </ul>
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
                        <li>
                            <a href="zixunlist.html" class="navbar-toggle primary-nav-insights-mob"
                               data-target="#primary-nav-insights-mob" aria-expanded="false"
                               aria-controls="primary-nav-insights-mob">资讯</a>

                        </li>
                        <li>
                            <a href="/page/active#active" class="navbar-toggle partner-mob" data-target="#partner-mob"
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
        <?= $content?>
        <div class="hjh-pc">
            <div class="copyrightmod">
                <div class="copyrightmod1">
                    <div class="pagemain">
                        <div class="copyrightmod2">
                            <div class="logo1"><a target="_blank" href="http://www.hxgro.com"><img
                                            src="/images/logo1.jpg"/></a></div>
                            <div class="copyrightmod2tit">
                                <div class="copyrightmod2tit1"><a href="<?= \yii\helpers\Url::toRoute(['page/view','slug'=>'about'])?>">公司介绍</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/page/about-youguan">恒信东方儿童优馆</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/page/about-youpin">恒信东方儿童优品</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/page/about-vr">超星时空首映礼</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/site/join">加入我们</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/page/about-law">法律顾问</a></div>
                                <div class="copyrightmod2tit2">|</div>
                                <div class="copyrightmod2tit1"><a href="/page/about-contact">联系我们</a></div>
                            </div>
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
                            <div class="copyrightmod2tit1"><a href="/page/about-comany">公司介绍</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-youguan">恒信东方儿童优馆</a></div>
                            <div class="copyrightmod2tit1"><a href="/page/about-youpin">恒信东方儿童优品</a></div>
                        </div>
                    </div>
                    <div class="copyrightmod2-2">
                        <div class="copyrightmod2tit">
                            <div class="copyrightmod2tit1"><a href="/page/about-vr">超星时空首映礼</a></div>
                            <div class="copyrightmod2tit1"><a href="/site/join">加入我们</a></div>
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
        <div class="boxshade">
            <div class="videomod1">
                <div class="videomod3">
                    <div class="videomod4">
                        <div class="videoclosebtn" onclick="closevideoplay();">×</div>
                        <video id="media" width="100%" height="100%" controls="controls">

                            <source src="/video/aboutproduct.mp4" type="video/mp4">

                        </video>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!--<!---->
<!--    <div class="wrap">-->
<!--        --><?php
//        NavBar::begin([
//            'brandLabel' => Yii::$app->name,
//            'brandUrl' => Yii::$app->homeUrl,
//            'options' => [
//                'class' => 'navbar-inverse navbar-fixed-top',
//            ],
//        ]); ?>
<!--        --><?php //echo Nav::widget([
//            'options' => ['class' => 'navbar-nav navbar-right'],
//            'items' => [
//                ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
//                ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug' => 'about']],
//                ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
//                ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
////            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
////            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
////            [
////                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
////                'visible'=>!Yii::$app->user->isGuest,
////                'items'=>[
////                    [
////                        'label' => Yii::t('frontend', 'Settings'),
////                        'url' => ['/user/default/index']
////                    ],
////                    [
////                        'label' => Yii::t('frontend', 'Backend'),
////                        'url' => Yii::getAlias('@backendUrl'),
////                        'visible'=>Yii::$app->user->can('manager')
////                    ],
////                    [
////                        'label' => Yii::t('frontend', 'Logout'),
////                        'url' => ['/user/sign-in/logout'],
////                        'linkOptions' => ['data-method' => 'post']
////                    ]
////                ]
////            ],
////            [
////                'label'=>Yii::t('frontend', 'Language'),
////                'items'=>array_map(function ($code) {
////                    return [
////                        'label' => Yii::$app->params['availableLocales'][$code],
////                        'url' => ['/site/set-locale', 'locale'=>$code],
////                        'active' => Yii::$app->language === $code
////                    ];
////                }, array_keys(Yii::$app->params['availableLocales']))
////            ]
//            ]
//        ]); ?>
<!--        --><?php //NavBar::end(); ?>
<!---->
<!--        --><?php //echo $content ?>
<!---->
<!--    </div>-->
<!---->
<!--    <footer class="footer">-->
<!--        <div class="container">-->
<!--            <p class="pull-left">&copy; My Company --><?php //echo date('Y') ?><!--</p>-->
<!--            <p class="pull-right">--><?php //echo Yii::powered() ?><!--</p>-->
<!--        </div>-->
<!--    </footer>-->
<!--    -->
    <script>
        <?php $this->beginBlock('SWITCH_NAV')?>
        var url = location.href;
        var arr=url.split("#");
        if(arr[1]){
            $("#hw1_global_nav .topnav li").removeClass('topnavlicur');
            $("#"+arr[1]).addClass('topnavlicur');
        }
        <?php $this->endBlock()?>
    </script>
<?php $this->registerJs($this->blocks['SWITCH_NAV'],\yii\web\View::POS_READY)?>
<?php $this->endContent() ?>