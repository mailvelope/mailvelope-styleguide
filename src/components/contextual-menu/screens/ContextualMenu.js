import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/contextual-menu.css';
import '../../../css/contextual-menu-dev.css';

class ContextualMenu extends Component {
  render() {
    return (
      <div className="primary">
        <ul className="contextual-menu">
          <li role="presentation" className="item-big">
            <a href="#" className="clearfix">
              <p><strong>Dashboard:</strong> browse all configuration options.</p>
              <i className="fa fa-tachometer"></i>
            </a>
          </li>
          <li role="presentation" className="item-big">
            <a href="#" className="clearfix">
              <p><strong>Manage contacts:</strong> add or find recipients keys.</p>
              <i className="fa fa-users"></i>
            </a>
          </li>
          <li role="presentation" className="item-big">
            <a href="#" className="clearfix">
              <p><strong>File encryption:</strong> encrypt a file or more.</p>
              <i className="fa fa-files-o"></i>
            </a>
          </li>
        </ul>
        <div className="footer">
          <a href="#/contextual-menu/ContextualMenuAdvanced" id="mvelo-advanced-options-button">Advanced options <i
            className="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    );
  }
}

export default ContextualMenu;
