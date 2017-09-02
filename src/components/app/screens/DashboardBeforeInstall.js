import React, { Component } from 'react';
import HeaderApp from '../HeaderApp';
import FooterApp from '../FooterApp';
import Tether from 'tether/dist/js/tether';
import Shepherd from 'tether-shepherd/dist/js/shepherd';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import 'tether-shepherd/dist/css/shepherd-theme-arrows.css';
import '../../../css/dashboard.css';

class DashboardBeforeInstall extends Component {

  constructor(props) {
    super(props);
    this.tour = new Shepherd.Tour({
      defaults: {
        classes: 'shepherd shepherd-open shepherd-theme-arrows'
      }
    });
  }

  componentDidMount() {
    this.tour.addStep('example', {
      title: 'Configure Mailvelope',
      text: 'Before you can start using Mailvelope, you need to configure it. <br><br>Click on the "Configure Mailvelope" button on the left to get started!',
      attachTo: '.configure right',
      //advanceOn: '.docs-link click',
      buttons: [
        {
          text: 'Got it!',
          classes: 'shepherd-button-primary',
          action: this.tour.cancel
        }
      ]
    });
    this.tour.start();
  }

  componentWillUnmount() {
    this.tour.cancel();
  }

  render() {
    return (
      <div className="container">
        <HeaderApp />
        <div className="shepherd-backdrop"></div>
        <div className="dashboard">
          <div className="col-md-12">
            <h3>Dashboard</h3>
            <div className="alert alert-warning alert-dismissible col-md-12" role="alert">
              <button type="button" className="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> Something happened here. Pay attention to what is inside.
            </div>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item configure" href="#">
              <i className="fa fa-gear"></i>
              <span>Configure Mailvelope</span>
            </a>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item" href="key-management.php">
              <i className="fa fa-key"></i>
              <span>Manage keys</span>
            </a>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item" href="#">
              <i className="fa fa-files-o"></i>
              <span>Encrypt and decrypt files</span>
            </a>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item" href="#">
              <i className="fa fa-eye"></i>
              <span>View security logs</span>
            </a>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item" href="#">
              <i className="fa fa-server"></i>
              <span>Manage email providers</span>
            </a>
          </div>
          <div className="col-md-3">
            <a className="dashboard-item" href="#">
              <i className="fa fa-question-circle"></i>
              <span>Help</span>
            </a>
          </div>
        </div>
        <FooterApp />
      </div>
    );
  }
}

export default DashboardBeforeInstall;
