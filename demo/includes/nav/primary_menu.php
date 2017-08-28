<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<div class="navbar-brand settings-logo"></div>
</div>
<div class="collapse navbar-collapse bs-navbar-collapse">
	<?php if(!isset($emptyNav)): ?>
	<ul class="nav navbar-nav">
		<li role="presentation" id="showKeyRing"<?php echo isset($activePrimarySection) && $activePrimarySection == 'keyring' ? ' class="active"' : '' ?>><a href="#keyring" id="keyringButton" aria-controls="keyring" role="tab" data-toggle="tab" data-l10n-id="keyring_header" class="active">Key Management</a></li>
		<li role="presentation" id="showEncrypting"<?php echo isset($activePrimarySection) && $activePrimarySection == 'fileEncryption' ? ' class="active"' : '' ?>><a href="#encrypting" id="encryptingButton" aria-controls="encrypting" role="tab" data-toggle="tab" data-l10n-id="encrypting_home">File Encryption</a></li>
		<li role="presentation" id="showKeySettings"<?php echo isset($activePrimarySection) && $activePrimarySection == 'options' ? ' class="active"' : '' ?>><a href="#settings" id="settingsButton" aria-controls="settings" role="tab" data-toggle="tab" data-l10n-id="options_home">Options</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="https://www.mailvelope.com/help" target="_blank" rel="noreferrer" data-l10n-id="options_docu">Documentation</a></li>
		<li><a href="https://www.mailvelope.com/about" target="_blank" rel="noreferrer" data-l10n-id="options_about">About</a></li>
		<!--li><div class="" id='secureCode'></div></li-->
	</ul>
	<?php endif; ?>
</div>