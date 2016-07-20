{extends file="admin/base.tpl"}

{block name="title" append} - Sites{/block}


{block name="css" append}

{/block}


{block name="js" append}	
	{embedjs script="/assets/js/admin/sites.js"}
	<script>
		$(document).ready(function(){
			Sites.init();
		});
	</script>
{/block}
		
{block name="content"}
<div class="row">
	<form>		
		<fieldset class="form-item left">
			<input class="required" name="first" id="firstInput" placeholder="Site Name" />
		</fieldset>
		<fieldset class="form-item left">
			<input class="required" name="first" id="firstInput" placeholder="Short Name" />
		</fieldset>
		<fieldset class="form-item left">
			<div class="btn btn-blue" id="submitForm">
				Add Site
			</div>
		</fieldset>
	</form>
</div>
{/block}