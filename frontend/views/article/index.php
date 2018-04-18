<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */

$this->title = Yii::t('frontend', 'Articles')
?>
<?= \common\widgets\DbText::widget(['key' => 'article-banner']) ?>

<div class="pagemain2">
    <div class="zxmod1">
        <div class="lanren">
            <div class="hidden"></div>
            <ul class="list">
            </ul>
            <div class="moremod">
                <div class="more" id="load_more"><a href="javascript:;">加载更多</a></div>
            </div>
        </div>
    </div>
</div>
<script>
    <?php $this->beginBlock('LOAD')?>
    var lanren = {
        _default: 9, //默认显示图片个数
        _loading: 3,  //每次点击按钮后加载的个数
        _page_now: 1,
        init:function () {
            this.loadMore();
        },
        loadMore: function () {
            var that = this;
            var limit = this._loading;
            var offset = (this._page_now - 2) * this._loading + this._default;
            if(this._page_now == 1){
                limit = this._default;
                offset = 0;
            }
            $.ajax('/api/v1/article/get-news',{
                method:'post',
                data:{offset:offset,limit:limit,category_id:1},
                dataType:'json',
                success:function (data) {
                    if(data.code == 1){
                        $(".lanren ul.list").append(data.data);
                        that._page_now ++;
                        fontResize();
                    }else{
                        $('.lanren .more').html("<p>全部加载完毕</p>");
                    }
                },
                error:function (data) {
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
<?php $this->registerJs($this->blocks['LOAD'],\yii\web\View::POS_READY)?>