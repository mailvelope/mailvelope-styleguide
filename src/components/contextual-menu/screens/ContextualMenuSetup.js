import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/contextual-menu.css';
import '../../../css/contextual-menu-dev.css';

class ContextualMenuSetup extends Component {
  render() {
    return (
      <div className="primary">
        <ul className="contextual-menu">
          <li role="presentation" className="item-big">
            <a href="dashboard-intermediary-before-install.php" target="_parent" className="clearfix">
              <p><strong>Configure Mailvelope</strong> to get started!</p>
              <i className="fa fa-gear"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a href="dashboard-intermediary-before-install.php" target="_parent" id="mvelo-advanced-options-button">More
            options</a>
        </div>
      </div>
    );
  }
}

export default ContextualMenuSetup;
