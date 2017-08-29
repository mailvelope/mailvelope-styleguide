import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import logo from '../../img/maivelope-logo.svg';
import 'bootstrap/dist/css/bootstrap.css';
import '../../css/styleguide.css';

class Styleguide extends Component {
  render() {
    return (
      <div className="styleguide">
        <div className="dashboard">
          <div className="header">
            <img src={logo} className="logo" alt="logo"/>
            <h2>styleguide</h2>
          </div>
          <div className="container">
            <div className="col-md-3"></div>
            <div className="col-md-3">
              <h3>Dashboard</h3>
              <ul>
                <li><Link to="/app/Dashboard">Dashboard</Link></li>
                <li><Link to="/app/DashboardBeforeInstall">Before install</Link></li>
                <li><Link to="/app/LandingPage">LandingPage</Link></li>
              </ul>
            </div>
            <div className="col-md-3">
              <h3>Contextual menu</h3>
              <ul>
                <li><Link to="/contextual-menu/ContextualMenu">Contextual menu</Link></li>
                <li><Link to="/contextual-menu/ContextualMenuAdvanced">Advanced section</Link></li>
                <li><Link to="/contextual-menu/ContextualMenuAdvancedIcon">Advanced section with icon</Link></li>
                <li><Link to="/contextual-menu/ContextualMenuAnimated">Animated version</Link></li>
                <li><Link to="/contextual-menu/ContextualMenuSetup">Setup</Link></li>
              </ul>
            </div>
            <div className="col-md-3"></div>
          </div>
        </div>
      </div>
    );
  }
}

export default Styleguide;
