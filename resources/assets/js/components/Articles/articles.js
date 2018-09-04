import React, { Component } from 'react';

import ArticlesTemplate from './articles_template';
import {fetchAllArticles, fetchDeleteArticle, fetchPutArticle} from '../../services/articlesApi';

class Articles extends Component {

  constructor() {
    super();

    this.state = {
      articles: [],
      loadingData: true,
    };
  }

  componentWillMount() {
    this.setState({
      loadingData: true,
    })
    fetchAllArticles()
    .then(data => {
      this.setState({
        articles: data.articles,
        loadingData: false,
      });
    })
  }

  editArticle (article){
    //HANDLE MODAL
    console.log("EDITING ARTICLE", article);
  }

  deleteArticle (article){
    fetchDeleteArticle(article.id)
    .then(data => {
      if(data.success===true) {
        //DELETE ARTICLE
        let filteredArticles = this.state.articles.filter(item => item !== article)
        this.setState({
          articles: filteredArticles
        });
      }
    })
  }


  render(){
    return (
      <div>
        { this.state.loadingData!==true ? (
          <ArticlesTemplate editArticle={this.editArticle.bind(this)} deleteArticle={this.deleteArticle.bind(this)} articles={this.state.articles}/>
        ) : (
          <div className="container">
            <h1>Loading...</h1>
          </div>
        )}
      </div>
    )
  }
}

export default Articles;
