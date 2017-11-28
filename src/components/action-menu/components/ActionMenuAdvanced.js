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
            Back
          </a>
        </div>
        <ul className="action-menu" role="menu" aria-label="Mailvelope advanced menu">
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="security-logs" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Review security logs</p>
              <i className="fa fa-eye" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="email-providers" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Manage email providers</p>
              <i className="fa fa-server" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="security-settings" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Edit security settings</p>
              <i className="fa fa-lock" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="reload-extension" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Reload extension scripts</p>
              <i className="fa fa-refresh" role="presentation"></i>
            </a>
          </li>
          <li className="with-icon" role="menuitem">
            <a className="clearfix" id="activate-tab" onClick={this.props.onMenuItemClickHandler} role="button">
              <p>Activate on current tab</p>
              <i className="fa fa-plus" role="presentation"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a id="options" onClick={this.props.onMenuItemClickHandler} role="button">All options</a>
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
