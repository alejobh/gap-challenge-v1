import {apiGet} from './apiGateway.js';

const STORE_ARTICLES_PATH = '/services/stores';
const ARTICLES_PATH = '/stores';

const fetchAllArticles = (params) => {
  const url = ARTICLES_PATH + params;
  return apiGet(url);
}

const fetchStoreArticles = (params) => {
  const url = STORE_ARTICLES_PATH + params;
  return apiGet(url);
}

export {
  fetchAllArticles,
  fetchStoreArticles
}
