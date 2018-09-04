import {apiGet, apiDelete, apiPut} from './apiGateway.js';

const STORE_PATH = '/services/stores/';

const fetchAllStores = (params) => {
  const url = params===undefined ? STORE_PATH : STORE_PATH + params;
  return apiGet(url);
}

const fetchDeleteStore = (params) => {
  const url = params===undefined ? STORE_PATH : STORE_PATH + params;
  return apiDelete(url);
}

const fetchPutStore = (params, body) => {
  const url = params===undefined ? STORE_PATH : STORE_PATH + params;
  return apiPut(url, body);
}

export {
  fetchAllStores,
  fetchDeleteStore,
  fetchPutStore,
}
