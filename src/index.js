import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import './mobile.css';
import Top from './components/Top';
import Bar from './components/Bar';
import TopProduct from './components/TopProduct';
import Categorie from './components/Categorie';
import ListProducts from './components/ListeProducts';
import Meilleurvente from './components/Meilleurvente';
import CovertureImg from './components/CovertureImg';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <Top />
    <Bar />
    <TopProduct />
    <Categorie />
    <ListProducts />
    <Meilleurvente />
    <CovertureImg />
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
