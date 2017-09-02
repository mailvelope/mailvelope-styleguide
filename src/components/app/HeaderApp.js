import React, { Component } from 'react';
import { Link } from 'react-router-dom';

class HeaderApp extends Component {
  render() {
    return (
      <div id="settingsPanel">
        <div className="navbar navbar-default navbar-fixed-top" role="navigation">
          <div className="container">
            <div className="navbar-header">
              <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span className="sr-only">Toggle navigation</span>
                <span className="icon-bar"></span>
                <span className="icon-bar"></span>
                <span className="icon-bar"></span>
              </button>
              <Link to="/app/Dashboard" className="navbar-brand settings-logo"></Link>
            </div>
            <div className="collapse navbar-collapse bs-navbar-collapse">
              <ul className="nav navbar-nav">
                <li role="presentation" id="showKeyRing"><a href="#keyring" id="keyringButton" aria-controls="keyring" role="tab" data-toggle="tab" data-l10n-id="keyring_header" className="active">Key Management</a></li>
                <li role="presentation" id="showEncrypting"><a href="#encrypting" id="encryptingButton" aria-controls="encrypting" role="tab" data-toggle="tab" data-l10n-id="encrypting_home">File Encryption</a></li>
                <li role="presentation" id="showKeySettings"><a href="#settings" id="settingsButton" aria-controls="settings" role="tab" data-toggle="tab" data-l10n-id="options_home">Options</a></li>
              </ul>
              <ul className="nav navbar-nav navbar-right">
                <li><a href="https://www.mailvelope.com/help" target="_blank" rel="noopener noreferrer" data-l10n-id="options_docu">Documentation</a></li>
                <li><a href="https://www.mailvelope.com/about" target="_blank" rel="noopener noreferrer" data-l10n-id="options_about">About</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default HeaderApp;
