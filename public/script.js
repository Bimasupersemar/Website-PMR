// Import dependencies
import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

// Import components
import App from './containers/App';
import Profile from './components/Profile';
import MemberRegistration from './components/MemberRegistration';
import ActivityGallery from './components/ActivityGallery';
import News from './components/News';
import OrganizationalStructure from './components/OrganizationalStructure';

// Render the app
ReactDOM.render(
  <BrowserRouter>
    <Switch>
      <Route path="/" exact component={App} />
      <Route path="/profile" component={Profile} />
      <Route path="/member-registration" component={MemberRegistration} />
      <Route path="/activity-gallery" component={ActivityGallery} />
      <Route path="/news" component={News} />
      <Route path="/organizational-structure" component={OrganizationalStructure} />
    </Switch>
  </BrowserRouter>,
  document.getElementById('app')
);
