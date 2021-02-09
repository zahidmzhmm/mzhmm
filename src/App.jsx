import React,{Component} from "react";
import {BrowserRouter as Router, Switch, Route} from "react-router-dom";
import Header from "./component/includes/Header";
import Footer from "./component/includes/Footer";
import Home from "./component/home/Home";

class App extends Component{
    render() {
        return (
            <>
                <Router>
                    <Header />
                    <div style={{paddingTop:'1px'}} />
                    <Switch>
                        <Route exact={true} path="/" component={Home} />
                    </Switch>
                    <Footer />
                </Router>
            </>
        );
    }
}

export default App;
