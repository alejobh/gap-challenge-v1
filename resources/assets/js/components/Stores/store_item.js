import React from 'react'

const StoreItem = (props) => {
  const store = props.store;
  return (
    <tr key={store.id}>
      <td>Actions</td>
      <th scope="row">{store.id}</th>
      <td>{store.name}</td>
      <td>{store.address}</td>
    </tr>
  )
}

export default StoreItem;
