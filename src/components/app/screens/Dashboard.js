import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import FooterApp from '../FooterApp';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-sortable/Contents/bootstrap-sortable.css';
import 'font-awesome/css/font-awesome.min.css';
import '../../../css/dashboard.css';

class Dashboard extends Component {
  render() {
    return (
      <div className="container">
        <div className="dashboard">
          <div className="col-md-12">
            <h3>Dashboard</h3>
          </div>
          <div className="col-md-3">
            <Link to="/app/Dashboard" className="dashboard-item">
              <i className="fa fa-key"></i>
              <span>Manage keys</span>
            </Link>
          </div>
          <div className="col-md-3">
            <Link to="/app/Dashboard" className="dashboard-item">
              <i className="fa fa-files-o"></i>
              <span>Encrypt and decrypt files</span>
            </Link>
          </div>
          <div className="col-md-3">
            <Link to="/app/Dashboard" className="dashboard-item">
              <i className="fa fa-eye"></i>
              <span>View security logs</span>
            </Link>
          </div>
          <div className="col-md-3">
            <Link to="/app/Dashboard" className="dashboard-item">
              <i className="fa fa-server"></i>
              <span>Manage email providers</span>
            </Link>
          </div>
          <div className="col-md-3">
            <a href="https://www.mailvelope.com/en/help" className="dashboard-item" target="_blank">
              <i className="fa fa-question-circle"></i>
              <span>Help</span>
            </a>
          </div>
        </div>
      </div>
    );
  }
}

export default Dashboard;
