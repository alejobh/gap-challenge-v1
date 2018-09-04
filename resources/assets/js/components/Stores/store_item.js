import React, {Component} from 'react'

const StoreItem = (props) => {

  const store = props.store;

  this.handleClickEdit = (store) => {
    props.onClickEdit(store);
  }

  this.handleClickDelete = (store) => {
    props.onClickDelete(store);
  }

  return (
    <tr key={store.id}>
      <td>
        <button className="btn btn-sm btn-primary" onClick={()=> this.handleClickEdit(store)}>
          Edit
        </button>
        <button className="btn btn-sm btn-danger" onClick={()=> this.handleClickDelete(store)}>
          Delete
        </button>
      </td>
      <th scope="row">{store.id}</th>
      <td>{store.name}</td>
      <td>{store.address}</td>
    </tr>
  )

}

export default StoreItem;
