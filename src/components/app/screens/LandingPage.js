import React, { Component } from 'react';
import FooterApp from '../FooterApp';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/landing-page.css';
import icon from '../../../img/cryptography-icon48.png';
import screenshotgif from '../../../img/mailvelope_screenshot.png';

class LandingPage extends Component {
  render() {
    return (
      <div className="container">
        <div id="settingsPanel">
          <div className="navbar navbar-default navbar-fixed-top" role="navigation">
            <div className="container">
              <div className="navbar-header">
                <div to="/app/Dashboard" className="navbar-brand settings-logo"></div>
              </div>
            </div>
          </div>
        </div>
        <div className="landingpage">
          <div className="col-md-10">
            <h1>Welcome to Mailvelope!</h1>
            <p>Click on the mailvelope icon <span className="mailvelopeicon"><img src={icon} height="25px"></img></span> in your browser toolbar to begin with the configuration.</p>
            <p><img src={screenshotgif} alt="Illustration of clicking on the mailvelope icon" className="gif-illustration"/></p>
            <p>Check out the <a href="#">online help</a> for more information.</p>
          </div>
          <div className="col-md-2">
            <div className="illustration"><i className="fa fa-arrow-up" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    );
  }
}

export default LandingPage;
