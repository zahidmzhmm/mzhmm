import React,{Component} from "react";
import {BrowserRouter as Router, Switch, Route} from "react-router-dom";
import Header from "./component/includes/Header";
import Home from "./component/Home/Home";

class App extends Component{
    render() {
        return (
            <>
                <Router>
                    <Header />
                    <Switch>
                        <Route exact={true} path="/" component={Home} />
                    </Switch>
                </Router>
            </>
        );
    }
}

export default App;
