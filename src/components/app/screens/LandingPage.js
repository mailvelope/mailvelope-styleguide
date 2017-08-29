import React, { Component } from 'react';
import FooterApp from '../FooterApp';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/landing-page.css';
import icon from '../../../img/cryptography-icon48.png';

class LandingPage extends Component {
  render() {
    return (
      <div className="container">
        <div className="landingpage">
          <div className="col-md-10">
            <h1>Welcome to Mailvelope!</h1>
            <p>Click on the mailvelope icon <span className="mailvelopeicon"><img src={icon} height="25px"></img></span> in your browser toolbar to begin with the configuration. </p>
            <p>Check out the <a href="#">online help</a> for more information.</p>
          </div>
          <div className="col-md-2">
            <div className="illustration"><i className="fa fa-arrow-up" aria-hidden="true"></i></div>
          </div>
        </div>
        <FooterApp />
      </div>
    );
  }
}

export default LandingPage;
