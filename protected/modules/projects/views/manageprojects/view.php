<?php
/* @var $this ManageprojectsController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'short_description',
		'description',
		'create_time',
		'update_time',
	),
)); ?>

<div class="row show-grid" style="width:100%">
    <div class="span4" data-original-title="" title="">
		<ul style="list-style:none;">
			<?php if(isset($model->images) && ($model->images !=null)):?>
				<?php foreach($model->images as $image):?>
					<li style="display:inline-block;">
						<img src="<?php echo Yii::app()->request->baseUrl.WWWROOT.$image->image;?>" alt="" id="imageproject<?php echo $image->id; ?>" class="sss"/>
						<div class="row">					
							<div class="image-form">
								<div class="uploader" id="uniform-undefined">
									<input name="Product[image]" id="Product_image" type="file" class="selectimage"
									/>		
									<span class="filename">No file selected</span>
									<span class="action">Choose File</span>
								</div>
							</div>
						</div>
					</li>
				<?php endforeach;?>
			<?php endif;?>
		</ul>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.selectimage').on("change", function () {
			var imgproject = $(this).parent().parent().parent().prev();
			console.log(imgproject[0]["id"]);
            uploadFile(this , imgproject);
		});
		
		function uploadFile(input, imgproject) {
			
			//$('#uploadpurchaser').attr("disabled", "disabled");
			if (input.files && input.files[0]) {
			console.log(input.files);
				var readerThumbnail = new FileReader();
				readerThumbnail.onload = function (e) {
					console.log('dd');
					var data_type=input.files[0].type;
					var thumbnail="";
					if (data_type.indexOf("image") != -1) {
						thumbnail = '<img src="' + e.target.result + '" style="width:200px"/>';
					}
					$('#'+imgproject[0]["id"]).attr('src', e.target.result);
				}
				/*
				readerThumbnail.readAsDataURL(input.files[0]);

				var file = input.files[0];
				var formdata = new FormData();
				formdata.append("thumbnail", file);
				formdata.append("_token", $('#myform input[name="_token"]').val());

				var ajax = new XMLHttpRequest();
				//ajax.upload.addEventListener("progress", progressHandler, false);
				ajax.addEventListener("load", completeHandlerThumbnail, false);
				ajax.addEventListener("error", errorHandlerThumbnail, false);
				ajax.open("POST", "{{ action('BookingsController@uploadPurchser') }} ");
				ajax.send(formdata); */
			}
		}
		
		function completeHandlerThumbnail(event) {
			console.log(event);
			$('#uploadpurchaser').removeAttr("disabled");
			var response = JSON.parse(event.target.responseText);
			if (response.success) {
				var filename = response.file.replace('/uploads/thumbnail/', '');
				//$('.control-group').removeClass('has-error').addClass('has-success');
				$('#myform input[name="filename"]').val(filename);
				//$('.thumbnailUpload').empty();
			} else {
				$('.control-group').removeClass('has-success').addClass('has-error');
				//$('.thumbnailUpload').empty().html(response.message);
			}
		}
		function errorHandlerThumbnail(event) {
			//console.log(event);
			var response = JSON.parse(event.target.responseText);
			alert(response.message);
			//$("status").innerHTML = "Upload Failed";
		}
		
		
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#blah')
						.attr('src', e.target.result)
						.width(150)
						.height(200);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	});

</script>
