/**
 * Copyright (C) 2017 Mailvelope GmbH
 * Licensed under the GNU Affero General Public License version 3
 */

import React from 'react';
import PropTypes from 'prop-types';


function ActionMenuSetup(props) {
  return (
    <div className="primary">
      <ul className="action-menu" role="menu" aria-label="Mailvelope setup menu">
        <li className="item-big" role="menuitem">
          <a className="clearfix" id="setup-keys" onClick={props.onMenuItemClickHandler} role="button">
            <p><strong>Configure Mailvelope</strong> to get started!</p>
            <i className="fa fa-gear" role="presentation"></i>
          </a>
        </li>
      </ul>
      <div className="footer">
        <a id="options" onClick={props.onMenuItemClickHandler} role="button">More options</a>
      </div>
    </div>
  );
}

ActionMenuSetup.propTypes = {
  onMenuItemClickHandler: PropTypes.func
};

export default ActionMenuSetup;
