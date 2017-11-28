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
        <ul className="action-menu" role="menu" aria-label="Mailvelope primary menu">
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="options" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>Dashboard:</strong> browse all configuration options.</p>
              <i className="fa fa-tachometer" role="presentation"></i>
            </a>
          </li>
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="manage-keys" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>Keyring:</strong> manage public and private keys.</p>
              <i className="fa fa-key" role="presentation"></i>
            </a>
          </li>
          <li className="item-big" role="menuitem">
            <a className="clearfix" id="encrypt-file" onClick={this.props.onMenuItemClickHandler} role="button">
              <p><strong>File encryption:</strong> encrypt a file or more.</p>
              <i className="fa fa-files-o" role="presentation"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a onClick={this.props.onShowAdvancedOptionsHandler} role="button">
            Advanced options
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
