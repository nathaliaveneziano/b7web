import Botao from './Botao';

const Header = (props) => (
	<header className="box">
		<Botao username={props.username} />
	</header>
);

export default Header;