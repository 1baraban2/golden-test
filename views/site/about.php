<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
	
	<div id="number" style = "width: 50px; height: 50px; font-size: 22px; border: 2px solid blue;
							 text-align: center; padding-top:15px;">
    </div>
	
	<p><button class = "datalink"> Выдача наличных денег </button></p> 
</div>
<?php
$script = <<< JS
	$(".datalink").click(function(){
		$.ajax({
			url:"index.php?r=site%2Fgenerate",
			success:function(result){
				$("#number").html(result);
			}
		});
	});
JS;
	$this->registerJs($script);

?>