import React from 'react';
import ReactDOM from 'react-dom';
import {HashRouter} from 'react-router-dom';
import { Route } from 'react-router-dom';
import ActionMenu from './components/action-menu/actionMenu';
import ActionMenuDe from './components/action-menu-de/actionMenu';

import registerServiceWorker from './registerServiceWorker';

ReactDOM.render((
    <HashRouter>
      <div>
        <Route path="/action-menu" component={ActionMenu} />
        <Route path="/action-menu-german" component={ActionMenuDe} />
    </div>
    </HashRouter>
), document.getElementById('root'));
registerServiceWorker();
