import React, { Component } from 'react';
import { Link } from 'react-router-dom';

class HeaderStyleguide extends Component {
  render() {
    return (
      <div className="styleguide-back-home">
        <Link to="/"><i className="fa fa-arrow-left" aria-hidden="true"></i></Link>
      </div>

    );
  }
}

export default HeaderStyleguide;
