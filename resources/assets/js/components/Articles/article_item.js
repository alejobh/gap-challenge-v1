import React, {Component} from 'react'

const ArticleItem = (props) => {

  const article = props.article;

  this.handleClickEdit = (article) => {
    props.onClickEdit(article);
  }

  this.handleClickDelete = (article) => {
    props.onClickDelete(article);
  }

  return (
    <tr key={article.id}>
      <td>
        <button className="btn btn-sm btn-primary" onClick={()=> this.handleClickEdit(article)}>
          Edit
        </button>
        <button className="btn btn-sm btn-danger" onClick={()=> this.handleClickDelete(article)}>
          Delete
        </button>
      </td>
      <th scope="row">{article.id}</th>
      <td>{article.name}</td>
      <td>{article.description}</td>
      <td>{article.price}</td>
      <td>{article.total_in_shelf}</td>
      <td>{article.total_in_vault}</td>
      <td>{article.store_name}</td>
    </tr>
  )

}

export default ArticleItem;
