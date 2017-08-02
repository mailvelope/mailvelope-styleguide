<div class="dropdown">
	<button class="btn btn-default dropdown-toggle" type="button" id="keyringSwitcher" data-toggle="dropdown" aria-expanded="true" style="width: 100%; text-align: left; margin-bottom: 10px;">
		<span class="caret pull-right" id="keyringSwitcherCaret"></span>
		<span id="keyringSwitcherLabel">Mailvelope</span>
	</button>
	<ul class="dropdown-menu" role="menu" id="keyringList">
		<li role="presentation" class="flex-container">
			<a role="menuitem" tabindex="-1" class="flex-item keyRingName" data-primarykeyid="86DB2BDD17D334B1" data-keyringid="localhost|#|mailvelope">Mailvelope</a>
			<a class="btn btn-link pull-right flex-item deleteKeyRing" style="display: none;" data-keyringid="localhost|#|mailvelope"><span class="glyphicon glyphicon-trash"></span></a>
		</li>
	</ul>
</div>
<div class="list-group">
	<a class="list-group-item active" href="#displayKeys" data-toggle="tab" data-l10n-id="keyring_display_keys" id="displayKeysButton">Display Keys</a>
	<a class="list-group-item" href="#importKey" data-toggle="tab" data-l10n-id="keyring_import_keys" id="importKeyButton">Import Keys</a>
	<a class="list-group-item" href="#generateKey" data-toggle="tab" data-l10n-id="keyring_generate_key" id="generateKeyButton">Generate Key</a>
	<a class="list-group-item" href="#setupProvider" data-toggle="tab" data-l10n-id="keyring_setup" id="setupProviderButton">Setup</a>
</div>