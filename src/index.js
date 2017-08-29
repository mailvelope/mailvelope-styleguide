import React from 'react';
import ReactDOM from 'react-dom';
import {HashRouter} from 'react-router-dom';
import { Route } from 'react-router-dom';
import Styleguide from './components/styleguide/Styleguide';
import App from './components/app/App';
import ContextualMenu from './components/contextual-menu/ContextualMenu';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render((
    <HashRouter>
      <div>
        <Route exact path="/" component={Styleguide}/>
        <Route path="/app" component={App} />
        <Route path="/contextual-menu" component={ContextualMenu} />
    </div>
    </HashRouter>
), document.getElementById('root'));
registerServiceWorker();
