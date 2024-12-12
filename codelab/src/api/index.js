// Import axios
import axios from 'axios';

const Api = axios.create({
  // Set the base URL to match your Laravel API (Module 5)
    baseURL: 'http://127.0.0.1:8000'});

export default Api;

