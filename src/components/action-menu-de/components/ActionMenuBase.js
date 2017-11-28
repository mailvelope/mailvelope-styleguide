/**
 * Copyright (C) 2017 Mailvelope GmbH
 * Licensed under the GNU Affero General Public License version 3
 */

import React, {Component} from 'react';
import PropTypes from 'prop-types';

class ActionMenuBase extends Component {
  render() {
    return (
      <div className="primary">
        <ul className="action-menu" role="menu" aria-label="Mailvelope primäres Menü">
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="options" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>Übersicht:</strong> alle Konfigurationsmöglichkeiten anschauen.</p>
              <i className="fa fa-tachometer" role="presentation"></i>
            </a>
          </li>
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="manage-keys" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>Schlüsselbund:</strong> öffentliche und private Schlüssel verwalten.</p>
              <i className="fa fa-key" role="presentation"></i>
            </a>
          </li>
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="encrypt-file" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>Dateiverschlüsselung:</strong> eine oder mehrere Datei(en) verschlüsseln.</p>
              <i className="fa fa-files-o" role="presentation"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a onClick={this.props.onShowAdvancedOptionsHandler} role="button">
            Erweiterte Optionen
            <i className="glyphicon glyphicon-chevron-right" role="presentation"></i>
          </a>
        </div>
      </div>
    );
  }
}

ActionMenuBase.propTypes = {
  onShowAdvancedOptionsHandler: PropTypes.func,
  onMenuItemClickHandler: PropTypes.func
};

export default ActionMenuBase;
