import React from 'react';
import { render } from '@wordpress/element';
import App from './components/App';
import './base.scss';
import './admin.scss';

const root = document.querySelector('#admin-root');
if (root) {
	render(<App />, root);
}
