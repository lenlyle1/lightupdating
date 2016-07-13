{extends file="admin/base.tpl"}

{block name="title" append} - Users{/block}

{block name="heading" append} - {$user->first} {$user->last}{/block}

{block name="content"}
<div class="row form-block">
	<form>		
		<fieldset class="form-item">
			<label for="emailInput">First Name</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="{$user->first}" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Last Name</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="{$user->last}" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Username</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="{$user->username}" />
		</fieldset>
		<fieldset class="form-item">
			<label for="emailInput">Email</label>
			<input class="required" name="first" id="firstInput" placeholder="First Name" value="{$user->email}" />
		</fieldset>
	</form>
</div>
{/block}