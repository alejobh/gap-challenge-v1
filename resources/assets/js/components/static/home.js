import React, { Component } from 'react';
import {NavLink} from 'react-router-dom';
/**
* Home
*/
export default class Home extends Component {
  render() {
    return (
      <div className="jumbotron jumbotron-fluid">
        <div className="container">
          <h1 className="display-4">Hello, GAP!</h1>
          <p className="lead">This is a simple home</p>
          <hr className="my-4" />
          <p>Let's navigate the sections in the navbar up there, or try in here below.</p>
          <p className="lead">
            <NavLink to="/stores" className="btn btn-primary btn-lg">Stores</NavLink>
            Or just try with
            <NavLink to="/articles" className="btn btn-primary btn-lg">Articles</NavLink>
          </p>
        </div>
      </div>
    );
  }
}
