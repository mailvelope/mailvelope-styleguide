/**
 * Copyright (C) 2017 Mailvelope GmbH
 * Licensed under the GNU Affero General Public License version 3
 */

import React, {Component} from 'react';
import ActionMenuAnimated from './ActionMenuAnimated';
import ActionMenuSetup from './ActionMenuSetup';

class ActionMenuWrapper extends Component {
  constructor(props) {
    super(props);
    this.state = props;
  }

  onMenuItemClick(e) {
    const itemClicked = e.currentTarget;
    if (itemClicked === '' || itemClicked.id === '') {
      return false;
    }
    this.hide();
  }

  hide() {
    //$(document.body).fadeOut(() => window.close());
  }

  render() {
    let actionMenuContent = null;
    if (this.state.isSetupDone) {
      actionMenuContent = <ActionMenuAnimated onMenuItemClickHandler={e => this.onMenuItemClick(e)}/>;
    } else {
      actionMenuContent = <ActionMenuSetup onMenuItemClickHandler={e => this.onMenuItemClick(e)}/>;
    }

    return (
      <div className="action-menu">
        <div className="action-menu-wrapper">
          <div className="action-menu-header clearfix">
            <div className="mailvelope-logo settings-logo2">Mailvelope</div>
            <div className="nav-right">
              <a href="https://www.mailvelope.com/help" target="_blank" rel="noopener noreferrer">Hilfe</a>
            </div>
          </div>
          {actionMenuContent}
        </div>
      </div>
    );
  }
}

export default ActionMenuWrapper;
