import React, { Component } from 'react';

import Header from '../../static/header';
import Footer from '../../static/footer';

export default class Layout extends Component {

  render(){
    return(
      <div>
        <Header />
        {this.props.children}
        <Footer />
      </div>
    )
  }
}
