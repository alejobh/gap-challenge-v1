import React, { Component } from 'react';
import { Route, Switch } from 'react-router-dom';

import Home from './static/home';
import Stores from './Stores/stores';
import Articles from './Articles/articles';

import Layout from './hoc/Layout/layout';

export default class Routes extends Component {
  render(){
    return(
      <Layout>
        <Switch>
          <Route path="/" exact component={Home}/>
          <Route path="/stores" exact component={Stores}/>
          <Route path="/articles" exact component={Articles}/>
        </Switch>
      </Layout>
    )
  }
}
