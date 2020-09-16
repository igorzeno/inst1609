'use strict';
const e = React.createElement;

const Product = ({ id_inst, username, text, link }) => (
  <div>
      <p><b>id:</b>{id_inst}</p>
      <p><b>name:</b>{username}</p>
      <p><b>текст поста:</b>{text}</p>
      <p><b>url:</b>{link}</p>
      <hr/>
  </div>
);

/*
const Product = ({ title, author }) => (
  <div>
      <p>{title}</p>
      <p>{author}</p>
  </div>
    );
*/

//const BASE_PATH = 'https://hn.algolia.com/api/v1/search?query=';
const BASE_PATH = 'http://inst/profiles/list';

class App extends React.Component {

    state = {
        result: {}
    }
 
componentWillMount() {
    fetch(`${BASE_PATH}`)
    .then( res => res.json() )
    .then( result => this.setState({result}))
    .catch( error => error);
}
  
render() {
    const { result} = this.state;
    const { hits = [] } = result;
    return (
        <div>
            {hits.map((res, i) => 
                <Product
                    key={i}
                    id_inst={res.id_inst}
                    username={res.username}
                    text={res.text}
                    link={res.link}
                />
            )}
        </div>
        );
    }
}

const domContainer = document.querySelector('#root');
ReactDOM.render(e(App), domContainer);