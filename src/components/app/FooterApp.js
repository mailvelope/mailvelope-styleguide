import React, { Component } from 'react';

class FooterApp extends Component {
  render() {
    return (
      <footer className="row">
        <p className="pull-left col-md-6">© 2012-2017 Mailvelope GmbH</p>
        <div id="version" className="pull-right col-md-6">v1.8.0</div>
      </footer>
    );
  }
}

export default FooterApp;
