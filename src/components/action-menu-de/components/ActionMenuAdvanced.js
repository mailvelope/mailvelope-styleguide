/**
 * Copyright (C) 2017 Mailvelope GmbH
 * Licensed under the GNU Affero General Public License version 3
 */

import React, {Component} from 'react';
import PropTypes from 'prop-types';

class ActionMenuAdvanced extends Component {
  render() {
    return (
      <div className="advanced">
        <div className="header">
          <a onClick={this.props.onShowBaseOptionsHandler} role="button">
            <i className="glyphicon glyphicon-chevron-left" role="presentation"></i>
            Zurück
          </a>
        </div>
        <ul className="action-menu" role="menu" aria-label="Mailvelope erweitertes Menü">
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="security-logs" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Überprüfen Sicherheitsprotokoll</p>
              <i className="fa fa-eye" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="email-providers" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>E-Mail-Anbieter verwalten</p>
              <i className="fa fa-server" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="security-settings" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Sicherheitseinstellungen bearbeiten</p>
              <i className="fa fa-lock" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="reload-extension" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Erweiterungsskripte neu laden</p>
              <i className="fa fa-refresh" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="activate-tab" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Auf dem aktuellen Tab aktivieren</p>
              <i className="fa fa-plus" role="presentation"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a id="options" onClick={this.props.onMenuItemClickHandler} role="button">Alle Optionen</a>
        </div>
      </div>
    );
  }
}

ActionMenuAdvanced.propTypes = {
  onShowBaseOptionsHandler: PropTypes.func,
  onMenuItemClickHandler: PropTypes.func
};

export default ActionMenuAdvanced;
