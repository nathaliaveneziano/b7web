import Botao from './Botao';

const Body = (props) => {
	const handleButton = () => {
		props.setUserName('Claudia');
	};

	return (
		<article className="box">
			<Botao username={props.username} />
			<button onClick={handleButton}>Trocar para Claudia</button>
		</article>
	);
};

export default Body;
