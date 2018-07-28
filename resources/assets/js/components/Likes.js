import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Likes extends Component {
    constructor(props) {
        super(props);
        this.state = {
            dataLikes: props.likes
        }
    }

    handleClick() {

        axios.patch('/' + this.props.tweetId, {
            likes: parseInt(this.state.dataLikes) + 1,
        })
            .then(response => {
                this.setState({
                    dataLikes: parseInt(this.state.dataLikes) + 1
                })
            })
            .catch(error => {
                console.log(error)
            })
    }

    render() {

        return (
            <div className="flex items-center text-grey-darkest cursor-pointer hover:text-red" onClick={this.handleClick.bind(this)}>
                <div>
                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path className="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z" /></svg>
                </div>
                <div className="ml-2">{this.state.dataLikes}</div>
            </div>
        );
    }
}

// if (document.getElementById('likes')) {
//     ReactDOM.render(<Likes />, document.getElementById('likes'));
// }

const elements = document.querySelectorAll('.likes');
if (elements.length > 0) {
    elements.forEach(element => {
        const likes = element.getAttribute('data-likes');
        const tweetId = element.getAttribute('data-tweetId');
        ReactDOM.render(<Likes likes={likes} tweetId={tweetId} />, element);
    });
}
