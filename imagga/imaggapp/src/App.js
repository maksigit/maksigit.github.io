import React, {Component} from 'react';

import './App.css'

let parseBody;
let tagsArr;

class App extends Component {

  state = {
    tags: []
  };

  upDateState(newState) {
    this.setState({
      tags: [newState[0], ...this.state.tags],
    });
  };

  getTags(urlImagga) {
    let request = require('request'),
      apiKey = 'acc_d89b9d03f2891a7',
      apiSecret = 'b6384a644354b467ffc7e3cffdf86b24',
      imageUrl = urlImagga.value;

    let promise = new Promise((resolve, reject) => {

      request.get('https://api.imagga.com/v1/tagging?url=' + encodeURIComponent(imageUrl), function (error, response, body) {
        parseBody = JSON.parse(body);
        tagsArr = parseBody.results;
        resolve(tagsArr);
      }).auth(apiKey, apiSecret, true);
    });
    promise.then(result => (this.upDateState(result))
    );
  }

  render() {
    return (
      <div className="App">
        <input placeholder="Input IMG(URL)" type="text" ref={(input) => {
          this.urlImagga = input
        }}/>
        <button onClick={() => this.getTags(this.urlImagga)}>Recognize</button>
        {this.state.tags.map((item, index) => {
          return <div key={index} className="wrap-response">
            <div className="wrap-img"><img src={item.image} alt=""/></div>
            <ul key={index} className="wrap-item">{item.tags.map((item, index) => {
              return <li key={index} className="item">
                <span className="tag">{item.tag}</span>
                <span className="confidence">{item.confidence} %</span>
                <span className="back-percent" style={{width: item.confidence + '%'}}> </span>
              </li>
            })}
            </ul>
          </div>
        })}
      </div>
    );
  }
}

export default App;
