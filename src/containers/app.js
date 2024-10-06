import React from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Profile from '../components/Profile';
import MemberRegistration from '../components/MemberRegistration';
import ActivityGallery from '../components/ActivityGallery';
import News from '../components/News';
import OrganizationalStructure from '../components/OrganizationalStructure';

const App = () => {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" exact component={Profile} />
        <Route path="/member-registration" component={MemberRegistration} />
        <Route path="/activity-gallery" component={ActivityGallery} />
        <Route path="/news" component={News} />
        <Route path="/organizational-structure" component={OrganizationalStructure} />
      </Switch>
    </BrowserRouter>
  );
};

export default App;
