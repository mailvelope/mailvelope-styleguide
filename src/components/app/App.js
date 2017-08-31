import React, { Component } from 'react';
import { Route } from 'react-router-dom';
import HeaderApp from './HeaderApp';
import * as screens from './screens';
import HeaderStyleguide from '../styleguide/HeaderStyleguide';

class App extends Component {
  render() {
    return (
      <div className="app">
        <HeaderStyleguide />
        <HeaderApp />
        <Route exact path="/app/:screen" component={AppRouter} />
      </div>
    );
  }
}

const AppRouter = ({ match }) => {
  return React.createElement(screens[match.params.screen]);
};

export default App;
