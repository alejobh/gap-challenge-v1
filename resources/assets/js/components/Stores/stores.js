import React, { Component } from 'react';

import StoresTemplate from './stores_template';
import {fetchAllStores} from '../../services/storesApi';

class Stores extends Component {

  constructor() {
    super();
    this.state = {
      stores: [],
      loadingData: true
    };
  }


  componentWillMount() {
    this.setState({
      loadingData: true,
    })
    fetchAllStores()
    .then(data => {
      this.setState({
        stores: data.stores,
        loadingData: false,
      });
    })
  }

  render(){
    return (
      <div>
        { this.state.loadingData!==true ? (
          <StoresTemplate stores={this.state.stores}/>
        ) : (
          <div>Loading...</div>
        )}
      </div>
    )
  }
}

export default Stores;
