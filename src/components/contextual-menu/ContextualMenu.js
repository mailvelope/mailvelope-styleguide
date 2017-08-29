import React, { Component } from 'react';
import { Route } from 'react-router-dom';
import * as screens from './screens';
import HeaderStyleguide from '../styleguide/HeaderStyleguide';

class ContextualMenu extends Component {
  render() {
    return (
      <div className="contextual-menu">
        <HeaderStyleguide />
        <div className="contextual-menu-wrapper">
          <div className="contextual-menu-header clearfix">
            <div className="mailvelope-logo"></div>
            <div className="nav-right">
              <a href="#">online help</a>
            </div>
          </div>
          <Route exact path="/contextual-menu/:screen" component={ContextualMenuRouter}/>
        </div>
      </div>
    );
  }
}

const ContextualMenuRouter = ({ match }) => {
  return React.createElement(screens[match.params.screen]);
};

export default ContextualMenu;
