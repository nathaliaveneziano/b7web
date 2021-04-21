import Botao from './Botao';

const Menu = (props) => (
	<aside className="box">
		<Botao username={props.username} />
	</aside>
);

export default Menu;
