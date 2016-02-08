<html>
	<head>
		<title>{block name="title"}{ucwords($site->shortname)} up my Love - Admin{/block}</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="{block name="meta_description"}{/block}" />
		<meta name="keyword" content="{block name="meta_keyword"}{/block}" />
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		{block name="css"}
			{embedcss cssfile="/assets/css/admin.css"}
			{embedcss cssfile="/assets/css/geometry.css"}
			{embedcss cssfile="/assets/css/forms.css"}
			{embedcss cssfile="/assets/css/swatch.css"}
			{embedcss cssfile="/assets/css/responsive.css"}
			{embedcss cssfile="/assets/css/globalStyles.css"}
			{embedcss cssfile="/assets/css/popup.css"}
		{/block}

		{block name="js"}
			{embedjs script="/assets/js/jquery-2.1.4.min.js"}
			{embedjs script="/assets/js/logging.js"}
			{embedjs script="/assets/js/spinner.js"}
			{embedjs script="/assets/js/overlay.js"}
			{embedjs script="/assets/js/popup.js"}
			{embedjs script="/assets/js/error.js"}
			{embedjs script="/assets/js/form.js"}
		{/block}

		{compile_stack}

		<script>
			$(document).ready(function(){
				{if !$isLive}
					Log.output = true;
				{/if}
			});
		</script>
		
	</head>

	<body>
		<header>
			<div class="contentHolder">
				<div class="left">
					<div class="logo">Lo<img src="/assets/images/site-images/heart.png" id="logo-heart" />e</div>
				</div>
				{if $user}
				<div class="left">
					<ul class="hori-menu">
						<li><a class="btn" href="/admin/users">Users</a></li>
						<li><a class="btn" href="/admin/images">Images</a></li>
						<li><a class="btn" href="/admin/sites">Sites</a></li>
						<li><a class="btn" href="/admin/roles">Roles</a></li>
					</ul>
				</div>
				<div class="right" style="margin-top: 15px;">
					<a class="btn btn-blue" href="/admin/users/logout">Logout</a>
				</div>
				{/if}
			</div>
		</header>

		<div class="contentHolder main-body">		
			<div class="row">
				<h1>{block name="heading"}
						{ucwords($module)}
						{if $module != $page}
							 - {str_replace('-', ' ', ucwords($page))}
						{/if}
					{/block}</h1>
			</div>


			<div class="row">
				<div class="error errorBox" id="errorBox">{if $error}{$error}{/if}</div>
				{block name="content"}
			</div>

			{/block}
		</div>

		{if !empty($swatches)}
		<footer>		
			<div class="contentHolder">
				<h2>Swatches</h2>	
				<div class="contentHolder center">
					{$swatches}
				</div>
			</div>
		</footer>
		{/if}

	</body>
</html>