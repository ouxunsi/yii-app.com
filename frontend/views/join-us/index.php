<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */
/* @var $category \common\models\ArticleCategory */
\frontend\assets\HejiahuanFrontendAsset::register($this);
$this->title = Yii::t('frontend', 'Join us');
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
                                <?= \common\widgets\DbMenu::widget(['key' => 'frontend-about-left', 'options' => ['style' => "display:none"]]) ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="hw1_mob_nav_container">
                <div class="mob_nav_open  visible-xs visible-sm">
                    <?= \common\widgets\DbMenu::widget(['key' => 'mob-frontend-index']);exit; ?>
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
                    <div class="abouttit1">加入我们</div>
                    <div class="aboutcon-join">
                        <div class="joinmod1">
                            <div class="jobtype">
                                <ul>
                                    <li <?= $category_id ? '' : 'class="jobtypelicur"' ?>><a
                                                href="<?= \yii\helpers\Url::toRoute(['join-us/index']) ?>">全部</a></li>
                                    <?php foreach ($categories as $category): ?>
                                        <li <?= $category->id == $category_id ? 'class="jobtypelicur"' : '' ?>><a
                                                    data-id="<?= $category->id ?>"
                                                    href="<?= \yii\helpers\Url::toRoute(['join-us/index', 'category_id' => $category->id]) ?>"><?= $category->title ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="lanren">
                            <div class="hidden"></div>
                            <ul class="list"></ul>
                            <div class="moremod" style="margin-top:10px;">
                                <div class="more" id="load_more"><a href="javascript:;">加载更多</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="hjh-pc">
            <div class="copyrightmod">
                <div class="copyrightmod1">
                    <div class="pagemain">
                        <div class="copyrightmod2">
                            <div class="logo1"><a target="_blank" href="http://www.hxgro.com"><img
                                            src="/images/logo1.jpg"/></a>
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
        <?php $this->beginBlock('LOAD')?>
        var category_id = '<?=$category_id?>';
        var lanren = {
            _default: 3, //默认显示图片个数
            _loading: 3,  //每次点击按钮后加载的个数
            _page_now: 1,
            init: function () {
                this.loadMore();
            },
            loadMore: function () {
                var that = this;
                var limit = this._loading;
                var offset = (this._page_now - 2) * this._loading + this._default;
                if (this._page_now == 1) {
                    limit = this._default;
                    offset = 0;
                }
                $.ajax('/api/v1/article/get-jobs', {
                    method: 'post',
                    data: {offset: offset, limit: limit, category_id: category_id},
                    dataType: 'json',
                    success: function (data) {
                        if (data.code == 1) {
                            $(".lanren ul.list").append(data.data);
                            that._page_now++;
                        } else {
                            $('.lanren .more').html("<p>全部加载完毕</p>");
                        }
                    },
                    error: function (data) {
                        $('.lanren .more').html("<p>全部加载完毕</p>");
                    }

                });
            }
        };
        lanren.init();
        $("#load_more").click(function ($event) {
            lanren.loadMore();
        })
        <?php $this->endBlock()?>
    </script>
<?php $this->registerJs($this->blocks['LOAD'], \yii\web\View::POS_READY) ?>