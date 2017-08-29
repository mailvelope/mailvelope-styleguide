import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/contextual-menu.css';
import '../../../css/contextual-menu-dev.css';

class ContextualMenuAdvanced extends Component {
  render() {
    return (
      <div>
        <div className="header">
          <a href="contextual-menu-wrapper.php?normal" id="mvelo-normal-options-button"><i className="glyphicon glyphicon-chevron-left"></i> Back</a>
        </div>
        <ul className="contextual-menu">
          <li role="presentation">
            <a href="#">
              <p>Manage keys</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#">
              <p>Review security logs</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#">
              <p>Manage emails provider</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#">
              <p>Edit security settings</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#">
              <p>Reload extension scripts</p>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a href="dashboard.php" target="_parent">All options</a>
        </div>
      </div>
    );
  }
}

export default ContextualMenuAdvanced;
