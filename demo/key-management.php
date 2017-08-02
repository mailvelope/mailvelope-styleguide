<html>
<head>
<?php  include(__DIR__ . '/includes/headers/meta.php');  ?>
</head>
<body data-mvelo="true">
<div id="settingsPanel">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <?php  include(__DIR__ . '/includes/nav/primary_menu.php');  ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="tab-content">
        <div class="tab-pane fade active in" role="tabpanel" id="keyring">
            <div class="col-md-3">
                <?php  include(__DIR__ . '/includes/nav/secondary_menu.php');  ?>
            </div>
            <div class="col-md-9">
                <div class="tab-content jumbotron secureBackground" id="settingsArea">
                    <div id="displayKeys" role="tabpanel" class="tab-pane fade well active in"><h3>
                        <span data-l10n-id="keyring_header">Key Management</span>
                        <span class="third-party-logo" style="background-image: none;"></span>
                    </h3>

                        <div id="keyUploadSuccessAlert" class="alert alert-success hidden" role="alert">
                            <strong data-l10n-id="alert_header_success">Success!</strong> <span data-l10n-id="keygrid_upload_success_msg">Key upload successful.</span>
                        </div>
                        <div id="keyUploadErrorAlert" class="alert alert-danger hidden" role="alert">
                            <strong data-l10n-id="alert_header_error">Error!</strong> <span data-l10n-id="keygrid_upload_error_msg">Key upload failed.</span>
                        </div>
                        <div id="keyUploadProgressBar" class="progress hidden">
                            <div class="progress-bar progress-bar-striped active" role="progressbar"></div>
                        </div>

                        <div id="uploadKeyAlert" class="alert alert-success hidden" style="position:relative; padding-bottom:60px;">
                            <span class="glyphicon glyphicon-lock"></span>
                            <strong data-l10n-id="keygrid_upload_alert_title">New feature!</strong> <span data-l10n-id="keygrid_upload_alert_msg">You can now upload your public key to the Mailvelope Key Server for automatic lookup in participating OpenPGP addons. This makes it easier to write encrypted email with your contacts. Give it a try! You can delete your key at any time.</span>. <a href="https://keys.mailvelope.com" target="_blank" data-l10n-id="learn_more_link">Learn more</a>
                            <div style="position:absolute; bottom:15px; left:15px;">
                                <button id="uploadKeyAcceptBtn" type="button" class="btn btn-success" style="margin-right:5px;" data-l10n-id="keygrid_upload_alert_accept">Upload public key</button>
                                <button id="uploadKeyRefuseBtn" type="button" class="btn btn-default" data-l10n-id="keygrid_upload_alert_refuse">No thanks</button>
                            </div>
                        </div><!-- /uploadKeyAlert -->

                        <div class="table-responsive-custom">
                            <div class="tableToolbar">
                                <button class="btn btn-default" type="button" id="exportMenuBtn" data-l10n-title-id="keygrid_export_title" title="Export all keys in this list to file">
                                    <span class="glyphicon glyphicon-export"></span>&nbsp;
                                    <span data-l10n-id="keygrid_export">Export</span>
                                </button>
                                <div class="pull-right form-inline">
                                    <label data-l10n-id="keygrid_sort_type" for="keyringFilterBtn" style="padding-top: 7px; margin-right: 6px;">Key type</label>
                                    <select class="form-control" id="keyringFilterBtn" style="margin-bottom: 4px;">
                                        <option data-l10n-id="keygrid_all_keys" value="allkeys">All</option>
                                        <option data-l10n-id="keygrid_public_keys" value="publickeys">Public Keys</option>
                                        <option data-l10n-id="keyring_public_private" value="keypairs">Key Pairs</option>
                                    </select>
                                </div>
                            </div><table class="table table-striped table-hover optionsTable sortable" id="keyRingTable">

                            <thead>
                            <tr>
                                <th data-defaultsort="disabled" <="" th="" class="nosort" data-sortcolumn="0" data-sortkey="0-0">
                                </th><th data-defaultsort="asc" data-l10n-id="keygrid_user_name" class="down sorted" data-sortcolumn="1" data-sortkey="1-0"><div class="mozilla">Name<span class="sign arrow"></span></div></th>
                                <th data-l10n-id="keygrid_user_email" class="nosort" data-sortcolumn="2" data-sortkey="2-0">Email</th>
                                <th data-l10n-id="keygrid_keyid" style="min-width: 140px;" class="nosort" data-sortcolumn="3" data-sortkey="3-0">Key ID</th>
                                <th data-l10n-id="keygrid_creation_date_short" class="nosort" data-sortcolumn="4" data-sortkey="4-0">Created</th>
                                <th data-defaultsort="disabled" class="nosort" data-sortcolumn="5" data-sortkey="5-0"></th>
                            </tr>
                            </thead>
                            <tbody>













                            <tr data-keyfingerprint="13EA1F56CA3349DE8FE89B5E8554DB3806A68771" data-keytype="public">
                                <td class="text-center" data-value="
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ">
                                    <span class="publicKey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </td>
                                <td data-value="Cedric Alfonsi" class="sorted">Cedric Alfonsi</td>
                                <td class="emailCell" data-value="cedric@passbolt.com">cedric@passbolt.com</td>
                                <td class="monospaced" data-value="8554DB3806A68771">8554DB3806A68771</td>
                                <td class="monospaced" data-value="2016-04-28">2016-04-28</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="6A9F9DCB2A00E081884487EA3808AD1A50FF0B59" data-keytype="public">
                                <td class="text-center" data-value="
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ">
                                    <span class="publicKey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </td>
                                <td data-value="Diego Lendoiro" class="sorted">Diego Lendoiro</td>
                                <td class="emailCell" data-value="diego@passbolt.com">diego@passbolt.com</td>
                                <td class="monospaced" data-value="3808AD1A50FF0B59">3808AD1A50FF0B59</td>
                                <td class="monospaced" data-value="2017-04-24">2017-04-24</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="DC8F6B2255F48D4C7C4C922ED37618E49F21E5BE" data-keytype="public">
                                <td class="text-center" data-value="
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ">
                                    <span class="publicKey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </td>
                                <td data-value="Kevin Muller" class="sorted">Kevin Muller</td>
                                <td class="emailCell" data-value="kevin@passbolt.com">kevin@passbolt.com</td>
                                <td class="monospaced" data-value="D37618E49F21E5BE">D37618E49F21E5BE</td>
                                <td class="monospaced" data-value="2016-04-29">2016-04-29</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="F60F3EC349B6190562D8F1B903083CD80B0413AB" data-keytype="public">
                                <td class="text-center" data-value="
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      ">
                                    <span class="publicKey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

                                </td>
                                <td data-value="Luisa Isaza" class="sorted">Luisa Isaza</td>
                                <td class="emailCell" data-value="luisa@flip.org.co">luisa@flip.org.co</td>
                                <td class="monospaced" data-value="03083CD80B0413AB">03083CD80B0413AB</td>
                                <td class="monospaced" data-value="2017-03-08">2017-03-08</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="017FE21BF15D58256A3E17AA2494727DEC922EA0" data-keytype="private">
                                <td class="text-center" data-value="

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ">

                                    <span class="keyPair">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td data-value="Passbolt" class="sorted">Passbolt</td>
                                <td class="emailCell" data-value="security@passbolt.com">security@passbolt.com</td>
                                <td class="monospaced" data-value="2494727DEC922EA0">2494727DEC922EA0</td>
                                <td class="monospaced" data-value="2017-06-16">2017-06-16</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="9FDC781BE55539D4CB50FF4286DB2BDD17D334B1" data-keytype="private">
                                <td class="text-center" data-value="

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ">

                                    <span class="keyPair">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td data-value="ada lovelace&nbsp;&nbsp;" class="sorted">ada lovelace&nbsp;&nbsp;<span class="label label-warning" data-l10n-id="keygrid_primary_label">Primary</span></td>
                                <td class="emailCell" data-value="ada@passbolt.com">ada@passbolt.com</td>
                                <td class="monospaced" data-value="86DB2BDD17D334B1">86DB2BDD17D334B1</td>
                                <td class="monospaced" data-value="2017-06-16">2017-06-16</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr><tr data-keyfingerprint="835D623F6A486B877D93DE2C59EAFF0B5BD41D6F" data-keytype="private">
                                <td class="text-center" data-value="

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ">

                                    <span class="keyPair">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td data-value="tes" class="sorted">tes</td>
                                <td class="emailCell" data-value="test@test.com">test@test.com</td>
                                <td class="monospaced" data-value="59EAFF0B5BD41D6F">59EAFF0B5BD41D6F</td>
                                <td class="monospaced" data-value="2017-07-19">2017-07-19</td>
                                <td class="text-center text-nowrap" data-value="




      ">
                                    <div class="actions" style="visibility: hidden;">
                                        <button class="btn btn-default keyDetailsBtn"><span class="glyphicon glyphicon-info-sign"></span></button>
                                        <button class="btn btn-default keyDeleteBtn"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </td>
                            </tr></tbody>
                        </table>
                        </div>
                        <div class="m-spinner" style="margin: 60px auto; display: none;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
                        <div id="keyDetails"></div>
                        <div id="keyringBackup"></div>
                    </div>
                    <div id="importKey" role="tabpanel" class="tab-pane fade well"><div data-reactroot=""><h3><span>Import Keys</span><span class="third-party-logo"></span></h3><form class="form"><div class="form-group"><label class="control-label" for="keySearchInput"><h4>Key search</h4></label><div class="label-subtitle">Search for public keys on key server.</div><div class="input-group"><input id="keySearchInput" class="form-control" placeholder="By name, email address, or key ID" type="text"><span class="input-group-btn"><button class="btn btn-default" type="submit">Search</button></span></div><div class="label-subtitle" style="margin-top: 5px;"><!-- react-text: 15 -->Key server<!-- /react-text --><!-- react-text: 16 --> <!-- /react-text --><a target="_blank" rel="noreferrer" href="https://keyserver.ubuntu.com">keyserver.ubuntu.com</a><!-- react-text: 18 --> (<!-- /react-text --><a href="#keyserver"><em>Change</em></a><!-- react-text: 21 -->)<!-- /react-text --></div></div></form><form class="form" autocomplete="off"><div class="form-group"><label class="control-label" for="selectFileButton"><h4>Import key from file</h4></label><div><button id="selectFileButton" type="button" class="btn btn-info">Select a key text file to import</button><input style="display: none;" type="file"></div></div><div class="form-group"><label class="control-label" for="newKey"><h4>Import key as text</h4></label><div>Please insert one or multiple keys in text format here.</div><div class="help-block"><textarea id="newKey" class="form-control" rows="12" spellcheck="false" autocomplete="off" style="width: 100%; font-family: monospace;"></textarea></div></div><div class="form-group"><button type="button" class="btn btn-primary" disabled="">Import</button><button type="button" class="btn btn-default" disabled="">Clear</button></div><div class="form-group"></div></form></div></div>
                    <div id="generateKey" role="tabpanel" class="tab-pane fade well"><div data-reactroot="" class="false"><h3><span>Generate Key</span><span class="third-party-logo"></span></h3><form class="form" autocomplete="off"><div><div class="form-group"><label class="control-label" for="name">Name</label><input value="" class="form-control" id="name" type="text"><span class="help-block">Full name of the key owner</span></div><div class="form-group"><label class="control-label" for="email">Email</label><input value="" class="form-control" id="email" type="text"><span class="help-block hide">Invalid email address</span></div></div><div><div class="form-group"><button type="button" class="btn btn-default key-advanced-closed">Advanced</button></div><div class="alert alert-info" style="display: none;"><div class="adv-key-gen-options"><div class="form-group"><label class="control-label" for="genKeyAlgo">Algorithm</label><select id="keyAlgo" class="form-control" disabled=""><option>RSA/RSA</option><option>DSA/ElGamal</option></select></div><div class="form-group"><label class="control-label"><span for="genKeySize">Key size</span><!-- react-text: 28 -->&nbsp;(<!-- /react-text --><span>bits</span><!-- react-text: 30 -->)<!-- /react-text --></label><select id="keySize" class="form-control"><option>2048</option><option>4096</option></select></div><div class="form-group key-expiration-group"><label class="control-label" for="keyExpirationTime">Key expiration date</label><div class="react-datepicker__input-container"><div class="input-group"><div class="has-feedback"><input class="form-control" value="" placeholder="This key does not expire" type="text"><span class="form-control-clear glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span></div><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-calendar"></i></button></span></div></div></div><div class="form-group">&nbsp;</div></div></div></div><div><div class="form-group"><label class="control-label" for="password">Enter Password</label><input value="" class="form-control" id="password" type="password"><span class="label label-danger ">Password field is empty</span></div><div class="form-group"><label class="control-label" for="passwordCheck">Re-enter Password</label><input value="" class="form-control" id="passwordCheck" type="password"><span class="label label-danger hide">Passwords do not match</span><span class="label label-success hide">Passwords match</span></div></div><div class="form-group "><div class="checkbox"><label class="checkbox" for="keyServerUpload"><input id="keyServerUpload" value="on" type="checkbox"><span>Upload public key to Mailvelope Key Server (can be deleted at any time)</span><!-- react-text: 60 -->. <!-- /react-text --><a href="https://keys.mailvelope.com" target="_blank">Learn more</a></label></div></div><div class="form-group"></div><div class="form-group"><button type="button" class="btn btn-primary" disabled="">Generate</button><button type="button" class="btn btn-default">Clear</button><button type="button" class="btn btn-default hide">Generate another...</button></div></form></div></div>
                    <div id="setupProvider" role="tabpanel" class="tab-pane fade well"><h3>
                        <span data-l10n-id="keyring_setup">Setup</span>
                        <span class="third-party-logo" style="background-image: none;"></span>
                    </h3>
                        <form class="form">
                            <p class="alert alert-warning keyring_setup_message"><strong data-l10n-id="keyring_setup_no_keypair_heading">This keyring does not yet contain a key pair.</strong><br> <span data-l10n-id="keyring_setup_no_keypair">A key pair is required to encrypt and decrypt messages, as well as to invite your contacts to end-to-end encrypted communication.</span></p>
                            <h4 data-l10n-id="keyring_setup_generate_key">Generate key</h4>
                            <p data-l10n-id="keyring_setup_generate_key_explanation">If you're using this extension for the first time and if you do not have a key pair yet, please generate one now.</p>
                            <p>
                                <a href="#generateKey" class="btn btn-primary" role="button" data-toggle="tab" data-l10n-id="keyring_setup_generate_key">Generate key</a></p>
                            <hr>
                            <h4 data-l10n-id="keyring_setup_import_key">Import Key</h4>
                            <p data-l10n-id="keyring_setup_import_key_explanation">Do you already have a key pair on another device? You can import your existing keys. Just export the key pair from the other device and then import them here.</p>
                            <a href="#importKey" class="btn btn-primary" role="button" data-toggle="tab" data-l10n-id="keyring_setup_import_key">Import Key</a>
                        </form>
                    </div>
                    <button class="btn btn-link pull-right secureBgndSettingsBtn lockBtnIcon" data-l10n-title-id="security_background_button_title" disabled="disabled" title="The security background can be adjusted in the Mailvelope Options"></button>
                </div>
            </div>
        </div><!--/keyring-->
        <div class="tab-pane fade" role="tabpanel" id="settings">
            <div class="col-md-3">
                <div class="list-group" id="settingsList">
                    <a class="list-group-item active" href="#general" data-toggle="tab" data-l10n-id="settings_general" id="generalButton">General</a>
                    <a class="list-group-item" href="#security" data-toggle="tab" data-l10n-id="settings_security" id="securityButton">Security</a>
                    <a class="list-group-item" href="#watchList" data-toggle="tab" data-l10n-id="settings_watchlist" id="watchListButton">List of Email Providers</a>
                    <a class="list-group-item" href="#securityLog" data-toggle="tab" data-l10n-id="settings_security_log" id="securityLogButton">Security Log</a>
                    <a class="list-group-item" href="#keyserver" data-toggle="tab" data-l10n-id="settings_keyserver" id="keyserverButton">Key Server</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content jumbotron secureBackground">
                    <div id="general" role="tabpanel" class="tab-pane fade well active in"><h3 data-l10n-id="settings_general">General</h3>
                        <form class="form">
                            <div class="form-group">
                                <h4 class="control-label" data-l10n-id="keygrid_primary_key">Main Key</h4>
                                <div class="checkbox">
                                    <label>
                                        <input id="autoAddPrimary" type="checkbox">
                                        <span data-l10n-id="general_primary_key_always">Always add my primary key to the list of recipients. (This allows you to decrypt sent mails)</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="autoSignMsg" type="checkbox">
                                        <span data-l10n-id="general_primary_key_auto_sign">Sign all messages with primary key</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="genBtnSave" class="btn btn-primary" disabled="" data-l10n-id="form_save">Save</button>
                                <button id="genBtnCancel" class="btn btn-default" disabled="" data-l10n-id="form_cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div id="security" role="tabpanel" class="tab-pane fade well"><h3 data-l10n-id="settings_security">Security</h3>
                        <form class="form">
                            <div class="form-group">
                                <h4 class="control-label" data-l10n-id="security_cache_header">Remember passwords for this browser session.</h4>
                                <div class="radio form-inline">
                                    <label class="radio" id="pwdCacheLabel">
                                        <input name="pwdCacheRadios" id="pwdCacheRadios1" value="true" type="radio">
                                        <span data-l10n-id="security_cache_on">Yes, keep in memory for</span>
                                        <input id="pwdCacheTime" maxlength="3" class="form-control" disabled="" type="text">
                                        <span data-l10n-id="security_cache_time">minutes.</span>
                                        <span class="help-block hide" data-l10n-id="security_cache_help">Must be a number between 1-999</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio">
                                        <input name="pwdCacheRadios" id="pwdCacheRadios2" value="false" type="radio">
                                        <span data-l10n-id="security_cache_off">No.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="securityTokenPanel">
                                <h4 data-l10n-id="security_background_header">Security Background</h4>
                                <p data-l10n-id="security_background_text">The security background helps prevent user interface manipulations by third-party websites and applications. To increase security, create and change your customized Mailvelope background here.</p>
                                <div id="securityBgndSliders">
                                    <div class="form-inline" style="white-space: nowrap;">
                                        <label for="angle" data-l10n-id="security_background_angle">Angle</label>
                                        <input min="0" max="360" id="angle" step="2" type="range">
                                    </div>
                                    <div class="form-inline" style="white-space: nowrap;">
                                        <label for="scaling" data-l10n-id="security_background_scaling">Scaling</label>
                                        <input min="5" max="100" id="scaling" step="1" type="range">
                                    </div>
                                    <div class="form-inline" style="white-space: nowrap;">
                                        <label for="scaling" data-l10n-id="security_background_coloring">Color</label>
                                        <input min="0" max="12" id="coloring" step="1" type="range">
                                    </div>
                                </div>
                                <div class="previewContainer">
                                    <h5><strong data-l10n-id="security_background_preview">Preview</strong></h5>
                                    <div id="previewArea" style="background-color: rgb(245, 245, 245); background-position: -20px -20px; background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJzZWNCZ25kIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI3MnB4IiBoZWlnaHQ9IjcycHgiIHZpZXdCb3g9IjAgMCAyNyAyNyI+PHBhdGggdHJhbnNmb3JtPSJyb3RhdGUoNDYgMTQgMTQpIiBzdHlsZT0iZmlsbDogI2U5ZTllOTsiIGQ9Im0gMTMuOTYzNjQ5LDI1LjkwMTc1NCBjIC00LjY5MDAwMDUsMCAtOC41MDAwMDA1LC0zLjc4IC04LjUwMDAwMDUsLTguNDQgMCwtMS42NCAwLjQ3LC0zLjE3IDEuMjksLTQuNDcgViA5LjA0MTc1NDYgYyAwLC0zLjkzOTk5OTIgMy4yMywtNy4xNDk5OTkyIDcuMjAwMDAwNSwtNy4xNDk5OTkyIDMuOTcsMCA3LjIsMy4yMSA3LjIsNy4xNDk5OTkyIHYgMy45NDk5OTk0IGMgMC44MiwxLjMgMS4zLDIuODMgMS4zLDQuNDggMCw0LjY1IC0zLjgsOC40MyAtOC40OSw4LjQzIHogbSAtMS4zNSwtNy45OSB2IDMuMzMgaCAwIGMgMCwwLjAyIDAsMC4wMyAwLDAuMDUgMCwwLjc0IDAuNjEsMS4zNCAxLjM1LDEuMzQgMC43NSwwIDEuMzUsLTAuNiAxLjM1LC0xLjM0IDAsLTAuMDIgMCwtMC4wMyAwLC0wLjA1IGggMCB2IC0zLjMzIGMgMC42MywtMC40MyAxLjA0LC0xLjE1IDEuMDQsLTEuOTcgMCwtMS4zMiAtMS4wNywtMi4zOCAtMi40LC0yLjM4IC0xLjMyLDAgLTIuNCwxLjA3IC0yLjQsMi4zOCAwLjAxLDAuODIgMC40MywxLjU0IDEuMDYsMS45NyB6IG0gNi4yOSwtOC44Njk5OTk0IGMgMCwtMi43MDk5OTkyIC0yLjIyLC00LjkwOTk5OTIgLTQuOTUsLTQuOTA5OTk5MiAtMi43MywwIC00Ljk1MDAwMDUsMi4yIC00Ljk1MDAwMDUsNC45MDk5OTkyIFYgMTAuNjExNzU0IEMgMTAuMzkzNjQ5LDkuNjIxNzU0NCAxMi4xMDM2NDksOS4wMzE3NTQ2IDEzLjk1MzY0OSw5LjAzMTc1NDYgYyAxLjg1LDAgMy41NSwwLjU4OTk5OTggNC45NCwxLjU3OTk5OTQgbCAwLjAxLC0xLjU2OTk5OTQgeiIgLz48L3N2Zz4=&quot;);"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="control-label" data-l10n-id="security_display_decrypted">Where are decrypted messages displayed?</h4>
                                <div class="radio">
                                    <label>
                                        <input name="decryptRadios" id="decryptRadios2" value="popup" type="radio">
                                        <span data-l10n-id="security_display_popup">In a separate Mailvelope popup.</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="decryptRadios" id="decryptRadios1" value="inline" type="radio">
                                        <span data-l10n-id="security_display_inline">On the email provider's page.</span>
                                    </label>
                                </div>
                            </div>
                            <div id="secReloadInfo" class="alert alert-success" data-l10n-id="reload_webmail_tab" style="display: none;">Please reload your email provider page for the settings to take effect.</div>
                            <div class="form-group">
                                <button id="secBtnSave" class="btn btn-primary" disabled="" data-l10n-id="form_save">Save</button>
                                <button id="secBtnCancel" class="btn btn-default" disabled="" data-l10n-id="form_cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div id="watchList" role="tabpanel" class="tab-pane fade well"><h3 data-l10n-id="settings_watchlist">List of Email Providers</h3>
                        <div class="tableToolbar">
                            <button type="button" id="addMailProviderBtn" class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>&nbsp;<span data-l10n-id="watchlist_command_create">Add new entry</span>
                            </button>
                        </div><table class="table table-hover table-striped optionsTable" id="watchListTable">

                            <thead>
                            <tr>
                                <th data-l10n-id="watchlist_title_active">Enabled</th>
                                <th data-l10n-id="watchlist_title_site" style="width: 60%">Site</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr data-website="{&quot;site&quot;:&quot;GMX&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.gmx.net&quot;,&quot;scan&quot;:true,&quot;api&quot;:true},{&quot;frame&quot;:&quot;*.gmx.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:true},{&quot;frame&quot;:&quot;*.gmx.co.uk&quot;,&quot;scan&quot;:true,&quot;api&quot;:true},{&quot;frame&quot;:&quot;*.gmx.fr&quot;,&quot;scan&quot;:true,&quot;api&quot;:true},{&quot;frame&quot;:&quot;*.gmx.es&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>GMX</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;WEB.DE&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.web.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>WEB.DE</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;active&quot;:true,&quot;site&quot;:&quot;mail.google.com&quot;,&quot;frames&quot;:[{&quot;scan&quot;:true,&quot;frame&quot;:&quot;*.mail.google.com&quot;,&quot;api&quot;:false},{&quot;scan&quot;:true,&quot;frame&quot;:&quot;*.inbox.google.com&quot;,&quot;api&quot;:false}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-check"></span></td>
                                <td>mail.google.com</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;mail.live.com&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.mail.live.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:false},{&quot;frame&quot;:&quot;*.outlook.live.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:false}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>mail.live.com</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;mail.yahoo.com&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.mail.yahoo.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:false},{&quot;frame&quot;:&quot;*.mail.yahoo.net&quot;,&quot;scan&quot;:true,&quot;api&quot;:false}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>mail.yahoo.com</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;posteo.de&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.posteo.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>posteo.de</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;mailbox.org&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.office.mailbox.org&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>mailbox.org</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;mail.ru&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.mail.ru&quot;,&quot;scan&quot;:true,&quot;api&quot;:false}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>mail.ru</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;1und1 De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.de-mail.1und1.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>1und1 De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;GMX De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.de-mail.gmx.net&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>GMX De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;Telekom De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.de-mail.t-online.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>Telekom De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;T-Systems De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.de-mail.t-systems.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>T-Systems De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;WEB.DE De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.de-mail.web.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>WEB.DE De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;FP Mentana-Claimsoft De-Mail&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.fp-demail.de&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>FP Mentana-Claimsoft De-Mail</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;Mailvelope Demo&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.demo.mailvelope.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>Mailvelope Demo</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;site&quot;:&quot;HKP Key Server&quot;,&quot;active&quot;:false,&quot;frames&quot;:[{&quot;frame&quot;:&quot;*.keyserver.ubuntu.com&quot;,&quot;scan&quot;:true,&quot;api&quot;:false}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-unchecked"></span></td>
                                <td>HKP Key Server</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-website="{&quot;active&quot;:true,&quot;site&quot;:&quot;mail.riseup.net&quot;,&quot;frames&quot;:[{&quot;scan&quot;:true,&quot;frame&quot;:&quot;*.riseup.net&quot;,&quot;api&quot;:true}]}">
                                <td class="text-center"><span class="glyphicon glyphicon-check"></span></td>
                                <td>mail.riseup.net</td>
                                <td class="text-center">
                                    <div class="actions" style="visibility: hidden; white-space: nowrap;">
                                        <button class="btn btn-default editWatchListBtn"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<span data-l10n-id="watchlist_command_edit">Edit</span></button>
                                        <button class="btn btn-default deleteWatchListBtn"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span data-l10n-id="keygrid_delete">Delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div id="watchListEditor" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header clearfix">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 data-l10n-id="watchlist_record_title">Email Provider</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="switchWebSite" class="col-sm-2 control-label" data-l10n-id="watchlist_title_active">Enabled</label>
                                                <div class="col-sm-10">
                                                    <div class="onoffswitch">
                                                        <input name="onoffswitch" class="onoffswitch-checkbox" id="switchWebSite" checked="" type="checkbox">
                                                        <label class="onoffswitch-label" for="switchWebSite">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="webSiteName" class="col-sm-2 control-label" data-l10n-id="watchlist_title_site">Site</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="webSiteName" placeholder="e.g. GMX or GMail" required="" type="text">
                                                </div>
                                            </div>
                                            <table class="table table-hover table-condensed table-striped optionsTable" id="watchList">
                                                <thead>
                                                <tr>
                                                    <th data-l10n-id="watchlist_title_scan">Enabled</th>
                                                    <th data-l10n-id="watchlist_title_frame">Domain pattern</th>
                                                    <th data-l10n-id="watchlist_expose_api">API</th>
                                                    <th data-l10n-id=""></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning pull-left" id="addMatchPatternBtn">
                                            <span class="glyphicon glyphicon-plus"></span>&nbsp;<span data-l10n-id="watchlist_title_frame">Domain pattern</span>
                                        </button>
                                        <button id="cancelBtn" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;<span data-l10n-id="form_cancel">Cancel</span></button>
                                        <button id="okWatchListEditorBtn" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;<span data-l10n-id="form_ok">OK</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="securityLog" role="tabpanel" class="tab-pane fade well"><h3 data-l10n-id="settings_security_log">Security Log</h3>
                        <!--h4 class="control-label" data-l10n-id="general_editor_type"></h4-->
                        <p data-l10n-id="security_log_text">The security log shows user actions in all components of Mailvelope.</p>
                        <table class="table table-hover table-striped optionsTable" id="secrityLogTable">
                            <thead>
                            <tr>
                                <th data-l10n-id="security_log_timestamp">Timestamp</th>
                                <th data-l10n-id="security_log_source" style="width: 30%">Source</th>
                                <th data-l10n-id="security_log_action" style="width: 50%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="glyphicon glyphicon-time"></span>&nbsp;<span class="timestamp"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="keyserver" role="tabpanel" class="tab-pane fade well"><form data-reactroot="" class="form"><h3 data-l10n-id=""></h3><label for="keyserverInputHkpUrl">HKP key server</label><div class="form-group"><div class="Select Select--single is-clearable is-searchable has-value"><div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-2--value"><div class="Select-value"><span class="Select-value-label" role="option" aria-selected="true" id="react-select-2--value-item">https://keyserver.ubuntu.com</span></div><div class="Select-input" style="display: inline-block;"><input role="combobox" aria-expanded="false" aria-owns="" aria-haspopup="false" aria-activedescendant="react-select-2--value" value="" style="width: 5px; box-sizing: content-box;"><div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre;"></div></div></span><span class="Select-clear-zone" title="Clear value" aria-label="Clear value"><span class="Select-clear">×</span></span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div></div></div><label>Mailvelope key server</label><div class="form-group"><div class="checkbox"><label class="checkbox" for="keyserverTOFULookup"><input name="mvelo_tofu_lookup" id="keyserverTOFULookup" value="on" type="checkbox"><span>Automatically lookup recipient keys</span><!-- react-text: 20 -->. <!-- /react-text --><a href="https://keys.mailvelope.com" target="_blank">Learn more</a></label></div></div><div class="form-group"></div><div class="form-group"><button type="button" class="btn btn-primary" disabled="">Save</button><button type="button" class="btn btn-default" disabled="">Cancel</button></div></form></div>
                    <button class="btn btn-link pull-right secureBgndSettingsBtn lockBtnIcon" data-l10n-title-id="security_background_button_title" disabled="disabled" title="The security background can be adjusted in the Mailvelope Options"></button>
                </div>
            </div>
        </div><!--/settings-->
        <!--encrypting-->
        <div class="tab-pane fade" role="tabpanel" id="encrypting"><div class="col-md-3">
            <div class="list-group" id="encryptList">
                <a class="list-group-item active" href="#file_encrypting" data-toggle="tab" data-l10n-id="file_encrypting" id="file_encryptingButton">Encryption</a>
                <a class="list-group-item" href="#file_decrypting" data-toggle="tab" data-l10n-id="file_decrypting" id="file_decryptingButton">Decryption</a>
            </div>
        </div>
            <div class="col-md-9">
                <!-- File encrypt/decrypt -->
                <section class="tab-content jumbotron secureBackground">
                    <div id="file_encrypting" role="tabpanel" class="tab-pane fade active in">

                        <!-- fileUploadPanel -->
                        <div id="encrypt_fileUploadPanel" class="encrypt-panel panel panel-default" style="display: block;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span data-l10n-id="encrypt_file_selection">File Selection</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <output id="encrypt_fileSelection" class="itemSelection"></output>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>
                                            <input id="encrypt_fileUpload" class="hidden" multiple="" type="file">
                                            <button id="encrypt_addFileBtn" class="btn btn-sm btn-block btn-success">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span data-l10n-id="encrypt_dialog_add">Add</span>
                                            </button>
                                            <span class="help-block">None of the files can be bigger than 25 MB.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="fileUploadError alert alert-danger" role="alert" style="display: none;"></div>
                            </div>
                            <div class="panel-footer text-right">
                                <button id="encrypt_goToPersonBtn" class="btn btn-primary btn-sm" data-l10n-id="form_next" disabled="">Next</button>
                            </div>
                        </div>

                        <!-- decryptPersonPanel -->
                        <div id="encrypt_personPanel" class="encrypt-panel panel panel-default" style="display: none;">
                            <div class="panel-heading">
                                <h3 class="panel-title" data-l10n-id="encrypt_dialog_header">Encrypt for:</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <select id="encrypt_keySelect" class="form-control"><option value="0">Cedric Alfonsi &lt;cedric@passbolt.com&gt; - 8554DB3806A68771</option><option value="1">Diego Lendoiro &lt;diego@passbolt.com&gt; - 3808AD1A50FF0B59</option><option value="2">Kevin Muller &lt;kevin@passbolt.com&gt; - D37618E49F21E5BE</option><option value="3">Luisa Isaza &lt;luisa@flip.org.co&gt; - 03083CD80B0413AB</option><option value="4">Passbolt &lt;security@passbolt.com&gt; - 2494727DEC922EA0</option><option value="5">ada lovelace &lt;ada@passbolt.com&gt; - 86DB2BDD17D334B1</option><option value="6">tes &lt;test@test.com&gt; - 59EAFF0B5BD41D6F</option></select>
                                    </div>
                                    <div class="col-xs-3">
                                        <button id="encrypt_addPersonBtn" class="btn btn-sm btn-success btn-block" data-l10n-id="encrypt_dialog_add">Add</button>
                                    </div>
                                </div>

                                <h4 data-l10n-id="encrypt_dialog_subheader">Persons:</h4>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <output id="encrypt_keyList" class="itemSelection"></output>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer text-right">
                                <button id="encrypt_backToUploadBtn" class="btn btn-sm btn-default" data-l10n-id="form_back">Back</button>
                                <button id="encrypt_goToDownloadBtn" class="btn btn-sm btn-primary" data-l10n-id="editor_encrypt_button" disabled="">Encrypt</button>
                            </div>
                        </div>

                        <!-- fileDownloadPanel -->
                        <div id="encrypt_fileDownloadPanel" class="encrypt-panel panel panel-default" style="display: none;">

                            <div class="panel-heading">
                                <h3 class="panel-title" data-l10n-id="encrypt_download_file_title">Save files</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <output id="encrypt_fileDownload" class="itemSelection"></output>
                                    </div>
                                </div>
                                <div id="encrypt_fileDownloadError" class="alert alert-danger" role="alert" style="display: none;"></div>
                            </div>

                            <div class="panel-footer text-right">
                                <button id="encrypt_backToPersonBtn" class="btn btn-sm btn-default" data-l10n-id="form_back">Back</button>
                                <button id="encrypt_downloadAllBtn" class="btn btn-sm btn-primary" disabled=""><i class="glyphicon glyphicon-save"></i> <span data-l10n-id="encrypt_download_all_button">Save all</span></button>
                            </div>

                            <div class="panel-overlay">
                                <div class="waiting" style="display: none;"><div class="m-spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
                            </div>

                        </div>

                    </div>
                    <div id="file_decrypting" role="tabpanel" class="tab-pane fade">

                        <!-- fileUploadPanel -->
                        <div id="decrypt_fileUploadPanel" class="decrypt-panel panel panel-default" style="display: block;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span data-l10n-id="encrypt_file_selection">File Selection</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <output id="decrypt_fileSelection" class="itemSelection"></output>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>
                                            <input id="decrypt_fileUpload" class="hidden" multiple="" accept=".asc" type="file">
                                            <button id="decrypt_addFileBtn" class="btn btn-sm btn-block btn-success">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span data-l10n-id="encrypt_dialog_add">Add</span>
                                            </button>
                                            <span class="help-block">None of the files can be bigger than 25 MB.</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="fileUploadError alert alert-danger" role="alert" style="display: none;"></div>
                            </div>
                            <div class="panel-footer text-right">
                                <button id="decrypt_goToDownloadBtn" class="btn btn-primary btn-sm" data-l10n-id="form_next" disabled="">Next</button>
                            </div>
                        </div>

                        <!-- fileDownloadPanel -->
                        <div id="decrypt_fileDownloadPanel" class="decrypt-panel panel panel-default" style="display: none;">

                            <div class="panel-heading">
                                <h3 class="panel-title" data-l10n-id="encrypt_download_file_title">Save files</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <output id="decrypt_fileDownload" class="itemSelection"></output>
                                    </div>
                                </div>
                                <div id="decrypt_fileDownloadError" class="alert alert-danger" role="alert" style="display: none;"></div>
                            </div>

                            <div class="panel-footer text-right">
                                <button id="decrypt_backToUploadBtn" class="btn btn-sm btn-default" data-l10n-id="form_back">Back</button>
                                <button id="decrypt_downloadAllBtn" class="btn btn-sm btn-primary" disabled=""><i class="glyphicon glyphicon-save"></i> <span data-l10n-id="encrypt_download_all_button">Save all</span></button>
                            </div>

                            <div class="panel-overlay">
                                <div class="waiting" style="display: none;"><div class="m-spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div><!--/tab-content-->
    <footer class="row">
        <p class="pull-left col-md-6">© 2012-2017 Mailvelope GmbH</p>
        <div id="version" class="pull-right col-md-6">v1.8.0</div>
    </footer>
</div><!--/container-->
</body>
</html>