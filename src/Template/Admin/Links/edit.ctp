<?php
   $this->Rita->setPageCaption('پیوندها')
   ->setPageCaption('پیوندها')->setPageCaption('ویرایش پیوند')
   
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فرم ویرایش پیوند</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($post,['type' => 'file']); ?>

		<div class="body-container padding-none">
          
        <?php
            echo $this->Form->input('category_id', [ 'empty' => true, 'label' => 'موضوع']);
            echo $this->Form->input('title',['label' => 'عنوان']);
            echo $this->Form->input('url',['label' => 'آدرس' , 'dir' => 'ltr']);
            echo $this->Form->input('logo_remote',['label' => 'آدرس لوگو']);
            echo $this->Form->input('logo_upload',['label' => 'فایل لگو','type'=> 'file']);
        ?>
 
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

