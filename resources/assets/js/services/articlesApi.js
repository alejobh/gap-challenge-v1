import {apiGet, apiDelete, apiPut} from './apiGateway.js';

const STORE_ARTICLES_PATH = '/services/articles/stores/';
const ARTICLES_PATH = '/services/articles/';

const fetchAllArticles = (params) => {
  const url = params===undefined ? ARTICLES_PATH : ARTICLES_PATH + params;
  return apiGet(url);
}

const fetchStoreArticles = (params) => {
  const url = params===undefined ? STORE_ARTICLES_PATH : STORE_ARTICLES_PATH + params;
  return apiGet(url);
}

const fetchDeleteArticle = (params) => {
  const url = params===undefined ? ARTICLES_PATH : ARTICLES_PATH + params;
  return apiDelete(url);
}

const fetchPutArticle = (params, body) => {
  const url = params===undefined ? ARTICLES_PATH : ARTICLES_PATH + params;
  return apiPut(url, body);
}

export {
  fetchAllArticles,
  fetchStoreArticles,
  fetchDeleteArticle,
  fetchPutArticle
}
