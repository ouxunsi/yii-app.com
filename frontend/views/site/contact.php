<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\Contact */
$this->title = Yii::t('frontend', 'Contact');
?>
<?= \common\widgets\DbText::widget(['key' => 'faq-banner']) ?>
<?= \common\widgets\DbText::widget(['key' => 'faq-list']) ?>

    <div class=" messagemod1">
        <div class="pagemain1">
            <div class="messagemod2">
                <div class="messagemod2tit1">留言版</div>
                <form id="contact-form" action="/site/contact" method="post">
                    <div class="selmod">
                        <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                        <div class="seleft">
                            <div class="selkuang"><span class="txt0">姓名</span>
                                <span class="txt1mod">
                <div class="form-group field-Contact-name required">
<input type="text" id="Contact-name" class="txt1" name="Contact[name]" value="" aria-required="true">
</div>                        </span>
                            </div>
                        </div>
                        <div class="selright">
                            <div class="selkuang">
                                <span class="txt0-1">手机号码或座机</span>
                                <span class="txt1mod-1">
                            <div class="form-group field-Contact-email has-error">
<input type="text" id="Contact-phone" class="txt1" name="Contact[phone]" value="" aria-invalid="true">
</div>                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="selmod">
                        <div class="textareamod">
                            <div class="selkuang">
                                <span class="txt0-2">留言</span>
                                <span class="txt1mod-2">
                                <div class="form-group field-Contact-body required">
<textarea id="Contact-body" class="textareatit" name="Contact[body]" rows="5" cols="45" placeholder="请描述您的问题..."
          aria-required="true"></textarea>
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
    <?= \common\widgets\DbText::widget(['key' => 'faq-hotline']) ?>
    <script type="text/javascript">
        <?php $this->beginBlock('CHECK_JS')?>
        var msg = '<?= $msg?>';
        if (msg) {
            alert(msg);
        }
        $('#contact-form').submit(function (event) {
            if ($('#Contact-name').val() == "") {
                alert("请输入您的姓名");
                $('#Contact-name').focus();
                return false;
            }
            if ($('#Contact-phone').val() == "") {
                alert("请输入您的联系电话");
                $('#Contact-phone').focus();
                return false;
            }
            if ($('#Contact-body').val() == "") {
                alert("请输入留言内容");
                $('#Contact-body').focus();
                return false;
            }
        });
        <?php $this->endBlock()?>
    </script>
<?php $this->registerJs($this->blocks['CHECK_JS'], \yii\web\View::POS_END) ?>