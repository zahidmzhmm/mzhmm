import React,{Component} from "react";
import {BrowserRouter as Router, Switch, Route} from "react-router-dom";
import Header from "./component/includes/Header";
import Footer from "./component/includes/Footer";
import Home from "./component/home/Home";
import About from "./component/about/About";
import Skills from "./component/skills/Skills";
import Services from "./component/services/Services";
import Portfolio from "./component/portfolio/Portfolio";
import Review from "./component/review/Review";
import GetIntoTouch from "./component/getIntoTouch/GetIntoTouch";

class App extends Component{
    render() {
        return (
            <>
                <Router>
                    <Header />
                    <div style={{paddingTop:'1px'}} />
                    <Switch>
                        <Route exact={true} path="/" component={Home} />
                        <Route exact={true} path="/about" component={About} />
                        <Route exact={true} path="/skills" component={Skills} />
                        <Route exact={true} path="/services" component={Services} />
                        <Route exact={true} path="/portfolios" component={Portfolio} />
                        <Route exact={true} path="/reviews" component={Review} />
                        <Route exact={true} path="/contact" component={GetIntoTouch} />
                    </Switch>
                    <Footer />
                </Router>
            </>
        );
    }
}

export default App;
