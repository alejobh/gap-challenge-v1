import {apiGet, apiDelete} from './apiGateway.js';

const STORE_PATH = '/services/stores/';

const fetchAllStores = (params) => {
  const url = params===undefined ? STORE_PATH : STORE_PATH + params;
  return apiGet(url);
}

const fetchDeleteStore = (params) => {
  const url = params===undefined ? STORE_PATH : STORE_PATH + params;
  return apiDelete(url);
}

export {
  fetchAllStores,
  fetchDeleteStore
}
