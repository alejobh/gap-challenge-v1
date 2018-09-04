import React from 'react';
import StoreItem from './store_item';
const StoresTemplate = (props) => {

  const storesRender = () => props.stores.map( (store,i) =>{
    return (<StoreItem key={store.id} onClickDelete={props.deleteStore} onClickEdit={props.editStore} store={store}/>)
  });

  return(
    <div>
      <div className="container">
        <h1>Stores Table</h1>
        <p>The following table contains all the stores in the application.</p>

        { (props.stores.length>0) ?
          (
            <div className="table-responsive">
              <table className="table table-light table-hover">
                <thead className="thead-dark">
                  <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                  {storesRender()}
                </tbody>
              </table>
            </div>
          )

          :
          <h3>There is no stores added</h3>
        }
      </div>
    </div>
  )
}

export default StoresTemplate;
