import React from 'react';
import {NavLink} from 'react-router-dom';

const Header = () => {
  return (
    <div>
      <nav className="navbar navbar-laravel navbar-expand-lg navbar-dark bg-dark">
        <NavLink to="/" className="navbar-brand">GAP Challenge</NavLink>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarNav">
          <ul className="navbar-nav">
            <li className="nav-item">
              <NavLink to="/stores"
                className="nav-link"
                >
                Stores
              </NavLink>
            </li>
            <li className="nav-item">
              <NavLink to="/articles"
                className="nav-link"
                >
                Articles
              </NavLink>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  )
}

export default Header;
