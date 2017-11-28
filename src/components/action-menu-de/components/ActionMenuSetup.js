/**
 * Copyright (C) 2017 Mailvelope GmbH
 * Licensed under the GNU Affero General Public License version 3
 */

import React from 'react';
import PropTypes from 'prop-types';


function ActionMenuSetup(props) {
  return (
    <div className="primary">
      <ul className="action-menu" role="menu" aria-label="Mailvelope Einrichtungsmenü">
        <li className="item-big" role="menuitem">
          <a className="clearfix" id="setup-keys" onClick={props.onMenuItemClickHandler} role="button">
            <p>Mit dem <strong>Konfigurieren von Mailvelope</strong> starten!</p>
            <i className="fa fa-gear" role="presentation"></i>
          </a>
        </li>
      </ul>
      <div className="footer">
        <a id="options" onClick={props.onMenuItemClickHandler} role="button">Weitere Optionen</a>
      </div>
    </div>
  );
}

ActionMenuSetup.propTypes = {
  onMenuItemClickHandler: PropTypes.func
};

export default ActionMenuSetup;
