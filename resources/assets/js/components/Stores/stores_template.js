import React from 'react';
import StoreItem from './store_item';
const StoresTemplate = (props) => {
  const storesRender = () => props.stores.map( (store,i) =>{
    return (<StoreItem key={store.id} store={store}/>)
  });

  return(
    <div>
      <h1>Stores Table</h1>
      <h3>The following table contains all the</h3>

      { (props.stores.length>0) ?
        (
          <div className="table-responsive">
            <table className="table table-light table-hover">
              <thead className="thead-dark">
                <tr>
                  <th scope="col">Action</th>
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
        <div>No hay tiendas actualmente</div>
      }
    </div>
  )
}

export default StoresTemplate;
