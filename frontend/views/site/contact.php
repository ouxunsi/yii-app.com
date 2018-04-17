<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\Contact */
$this->title = Yii::t('frontend','Contact');
?>
<div class="margintop"></div>
<?= \common\widgets\DbText::widget(['key'=>'faq-banner'])?>
<?= \common\widgets\DbText::widget(['key'=>'faq-list'])?>

<div class=" messagemod1">
    <div class="pagemain1">
        <div class="messagemod2">
            <div class="messagemod2tit1">留言版</div>
            <div class="selmod">
                <form id="contact-form" action="/site/contact" method="post">
                    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                    <div class="seleft">
                        <div class="selkuang"><span class="txt0">姓名</span>
                            <span class="txt1mod">
                <div class="form-group field-Contact-name required">
<input type="text" id="Contact-name" class="txt1" name="Contact[name]" value="df" aria-required="true">
</div>                        </span>
                        </div>
                    </div>
                    <div class="selright">
                        <div class="selkuang">
                            <span class="txt0-1">手机号码或座机</span>
                            <span class="txt1mod-1">
                            <div class="form-group field-Contact-email has-error">
<input type="text" id="Contact-phone" class="txt1" name="Contact[phone]" value="df" aria-invalid="true">
</div>                        </span>
                        </div>
                    </div>
                    <div class="selmod">
                        <div class="textareamod">
                            <div class="selkuang">
                                <span class="txt0-2">留言</span>
                                <span class="txt1mod-2">
                                <div class="form-group field-Contact-body required">
<textarea id="Contact-body" class="textareatit" name="Contact[body]" rows="5" cols="45" placeholder="请描述您的问题..."
          aria-required="true">df</textarea>
</div>                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="btnmod">
                        <div class="btnmod1">
                            <button type="submit" class="messagebtn1" name="contact-button"
                                    onmouseover="this.className='messagebtn1hover'"
                                    onmouseout="this.className='messagebtn1'">提交
                            </button>
                        </div>
                        <div class="btnmod2">
                            <button type="reset" class="messagebtn2" name="contact-button-reset"
                                    onmouseover="this.className='messagebtn1hover'"
                                    onmouseout="this.className='messagebtn1'">重置
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="sdw-wrap" style="visibility: visible;margin-top:0;">
    <div class="sdw-container help-container1 active" style="font-size: 21.25px;">
        <div class="sdw-pc">
            <div class="sdw1_text pa">
                <div class="sdw-animate box"
                     data-start="{&quot;transform&quot;:&quot;translate3d(0,50px,0) &quot;,&quot;opacity&quot;:&quot;0&quot;}"
                     data-end="{&quot;transform&quot;:&quot;translate3d(0,0px,0) &quot;,&quot;opacity&quot;:&quot;1&quot;}"
                     data-speed="1500" data-delay="0s" data-occur="1"
                     style="transform: translate3d(0px, 0px, 0px); transition-delay: 0s; transition-duration: 1500ms; opacity: 1;">
                    <div class="helpmod2"><img src="/images/helpkefuicon_01.png" alt=""></div>
                </div>


            </div>
            <div class="pa sdw-animate sdw1_text2 box"
                 data-start="{&quot;transform&quot;:&quot;translate3d(0,50px,0) &quot;,&quot;opacity&quot;:&quot;0&quot;}"
                 data-end="{&quot;transform&quot;:&quot;translate3d(0,0px,0) &quot;,&quot;opacity&quot;:&quot;1&quot;}"
                 data-speed="1500" data-delay="0.3s" data-occur="1" alt=""
                 style="transform: translate3d(0px, 0px, 0px); transition-delay: 0.3s; transition-duration: 1500ms; opacity: 1;">
                <div class="helpsectiontit1" style="font-size: 32.725px; line-height: 34.2833px;">客服热线</div>
                <div class="helpsectiontit2" style="font-size: 21.8167px; line-height: 29.6083px;">如有其它问题需要帮助<br>请拨打电话：400-815-6660
                </div>
                <div class="helpsectiontit3" style="font-size: 17.1417px; line-height: 21.8167px;">AM 9:00--12:00 PM
                    13:00--18:00 <br>
                    星期一 —— 星期日
                </div>
            </div>
            <div style="height:538px;background:url(/images/helpsection_01.jpg) center top no-repeat"></div>
        </div>
        <div class="sdw-mobile">
            <div class="sdw1_text pa">
                <div class="sdw-animate box"
                     data-start="{&quot;transform&quot;:&quot;translate3d(0,50px,0) &quot;,&quot;opacity&quot;:&quot;0&quot;}"
                     data-end="{&quot;transform&quot;:&quot;translate3d(0,0px,0) &quot;,&quot;opacity&quot;:&quot;1&quot;}"
                     data-speed="1500" data-delay="0s" data-occur="1"
                     style="transform: translate3d(0px, 0px, 0px); transition-delay: 0s; transition-duration: 1500ms; opacity: 1;">
                    <div class="helpmod2"><img src="/images/helpkefuicon_01.png" alt=""></div>
                </div>


            </div>
            <div class="pa sdw-animate sdw1_text2 box"
                 data-start="{&quot;transform&quot;:&quot;translate3d(0,50px,0) &quot;,&quot;opacity&quot;:&quot;0&quot;}"
                 data-end="{&quot;transform&quot;:&quot;translate3d(0,0px,0) &quot;,&quot;opacity&quot;:&quot;1&quot;}"
                 data-speed="1500" data-delay="0.3s" data-occur="1" alt=""
                 style="transform: translate3d(0px, 0px, 0px); transition-delay: 0.3s; transition-duration: 1500ms; opacity: 1;">
                <div class="helpsectiontit1" style="font-size: 32.725px; line-height: 34.2833px;">客服热线</div>
                <div class="helpsectiontit2" style="font-size: 21.8167px; line-height: 29.6083px;">
                    如有其它问题需要帮助<br>请拨打电话：<a href="tel:400-815-6660">400-815-6660</a></div>
                <div class="helpsectiontit3" style="font-size: 17.1417px; line-height: 21.8167px;">AM 9:00--12:00 PM
                    13:00--18:00 <br>星期一 —— 星期日
                </div>
            </div>
            <img src="/images/helpsection_01min.jpg" alt="">
        </div>

    </div>

</div>
<script type="text/javascript">
    <?php $this->beginBlock('CHECK_JS')?>
    $('#contact-form').submit(function (event) {
        if($('#Contact-name').val()==""){
            alert("请输入您的姓名");
            $('#Contact-name').focus();
            return false;
        }
        if($('#Contact-phone').val()==""){
            alert("请输入您的联系电话");
            $('#Contact-phone').focus();
            return false;
        }
        if($('#Contact-body').val()==""){
            alert("请输入留言内容");
            $('#Contact-body').focus();
            return false;
        }
    });
    <?php $this->endBlock()?>
</script>
<?php $this->registerJs($this->blocks['CHECK_JS'],\yii\web\View::POS_END)?>