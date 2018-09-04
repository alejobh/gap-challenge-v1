import React, { Component } from 'react';

import StoresTemplate from './stores_template';
import {fetchAllStores, fetchDeleteStore} from '../../services/storesApi';

class Stores extends Component {

  constructor() {
    super();

    this.editStore = this.editStore.bind(this);

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

  editStore (store){
    //HANDLE MODAL
    console.log("clicked edit", store);
  }

  deleteStore (store){
    fetchDeleteStore(store.id)
    .then(data => {
      if(data.success===true) {
        //DELETE STORE
        let filteredStores = this.state.stores.filter(item => item !== store)
        this.setState({
          stores: filteredStores
        });        
      }
    })
  }

  render(){
    return (
      <div>
        { this.state.loadingData!==true ? (
          <StoresTemplate editStore={this.editStore.bind(this)} deleteStore={this.deleteStore.bind(this)} stores={this.state.stores}/>
        ) : (
          <div className="container">
            <h1>Loading...</h1>
          </div>
        )}
      </div>
    )
  }
}

export default Stores;
