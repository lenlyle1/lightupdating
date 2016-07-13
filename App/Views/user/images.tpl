{extends file="base.tpl"}

{block name="title" append} - Images{/block}


{block name="css" append}

	{embedcss cssfile="/assets/css/dropzone.css"}
	<style>
	</style>
{/block}


{block name="js" append}
	{embedjs script="/assets/js/file_uploader.js"}
	<script>
		$(document).ready(function(){
			if (window.File && window.FileList && window.FileReader) {
				FileUploader.init();
			}
		});
		$(window).on("dragover",function(e){
			e.stopPropagation();
	        e.preventDefault();
		})
		.on("drop",function(e){		  
			e.stopPropagation();
	        e.preventDefault();
		});
	</script>
{/block}
		
{block name="content"}

	<div class="row">
		<h1>Images</h1>
		<div class="row">
			<input type="file" id="fileinput" multiple="multiple" name="files[]" />
		</div>
		<div id="dropzoneHolder" class="hidden row center">
			- or - 
			<div class="dropzone">
		        Drop files here
		    </div>
		    <div id="imageHolder"></div>
	    </div>
	</div>
{/block}