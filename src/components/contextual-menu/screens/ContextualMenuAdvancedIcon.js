import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/contextual-menu.css';
import '../../../css/contextual-menu-dev.css';

class ContextualMenuAdvancedIcon extends Component {
  render() {
    return (
      <div className="advanced">
        <div className="header">
          <a href="contextual-menu-wrapper.php?normal" id="mvelo-normal-options-button"><i className="glyphicon glyphicon-chevron-left"></i> Back</a>
        </div>
        <ul className="contextual-menu">
          <li role="presentation" className="with-icon">
            <a href="#" className="clearfix">
              <p>Manage keys</p>
              <i className="fa fa-key"></i>
            </a>
          </li>
          <li role="presentation" className="with-icon">
            <a href="#" className="clearfix">
              <p>Review security logs</p>
              <i className="fa fa-eye"></i>
            </a>
          </li>
          <li role="presentation" className="with-icon">
            <a href="#" className="clearfix">
              <p>Manage emails provider</p>
              <i className="fa fa-server"></i>
            </a>
          </li>
          <li role="presentation" className="with-icon">
            <a href="#" className="clearfix">
              <p>Edit security settings</p>
              <i className="fa fa-lock"></i>
            </a>
          </li>
          <li role="presentation" className="with-icon">
            <a href="#" className="clearfix">
              <p>Reload extension scripts</p>
              <i className="fa fa-refresh"></i>
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

export default ContextualMenuAdvancedIcon;
