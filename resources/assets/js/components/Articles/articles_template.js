import React from 'react';
import ArticleItem from './article_item';

const ArticlesTemplate = (props) => {

  const articlesRender = () => props.articles.map( (article,i) =>{
    return (<ArticleItem key={article.id} onClickDelete={props.deleteArticle} onClickEdit={props.editArticle} article={article}/>)
  });

  return(
    <div>
      <div className="container">
        <h1>Articles Table</h1>
        <p>The following table contains all the articles in the application.</p>

        { (props.articles.length>0) ?
          (
            <div className="table-responsive">
              <table className="table table-light table-hover">
                <thead className="thead-dark">
                  <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total in Shelf</th>
                    <th scope="col">Total in Vault</th>
                    <th scope="col">Store</th>
                  </tr>
                </thead>
                <tbody>
                  {articlesRender()}
                </tbody>
              </table>
            </div>
          )

          :
          <h3>There is no articles added</h3>
        }
      </div>
    </div>
  )
}

export default ArticlesTemplate;
