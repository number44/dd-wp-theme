import apiFetch from '@wordpress/api-fetch';
import { useEffect } from 'react';
interface PropsI {}
const App = ({}: PropsI) => {
	const fetchData = async () => {
		const data = await apiFetch({ path: '/wp/v2/posts' });
		console.log('data :', data);
	};
	useEffect(() => {
		fetchData();
	}, []);
	return (
		<div className="grid">
			<div className="box">
				<h1>React admin App</h1>
			</div>
		</div>
	);
};

export default App;
