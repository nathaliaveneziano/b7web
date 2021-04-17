import React from 'react';

// Forma muito usada até pouco tempo
/* class App extends React.Component {
  render() {
    return <h1>Testando 1, 2, 3...</h1>;
  }
} */

// Forma mais usada atualmente
/* function App() {
  return <h1>Testando 4, 5, 6...</h1>;
} */

// Constante que recebe uma função (Arrow Function)
/* let App = () => {
  return <h1>Testando 7, 8, 9...</h1>;
} */

// Arrow Function com retorno direto, pouco usado e para algo direto
let App = () => <h1>Testando 10, 11, 12...</h1>;

export default App;
