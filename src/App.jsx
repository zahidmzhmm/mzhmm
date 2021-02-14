import React,{Component} from "react";
import {BrowserRouter as Router, Switch, Route} from "react-router-dom";
import Header from "./component/includes/Header";
import Footer from "./component/includes/Footer";
import Home from "./component/home/Home";
import Skills from "./component/skills/Skills";
import Services from "./component/services/Services";
import Portfolio from "./component/portfolio/Portfolio";
import GetIntoTouch from "./component/getIntoTouch/GetIntoTouch";
import ReviewPage from "./component/review/ReviewPage";
import AboutPage from "./component/about/AboutPage";
import axios from "axios";
import {API} from "./server/Config";
import {Spinner} from "react-bootstrap";

class App extends Component{
    state = {
        data: [],
        data2: [],
        data3: [],
        data4: [],
        data5: [],
        isLoading: true
    }
    homeData = async () => {
        const adminData = await axios.get(`${API}?page=home&auth=admin12123`).then(res=>{
            return res
        })
        this.setState({
            data: adminData.data,
            isLoading: false
        })
    }
    skillData = async () => {
        const skillData = await axios.get(`${API}?page=skill&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data2: skillData.data,
            isLoading: false
        })
    }
    serviceData = async () => {
        const serviceData = await axios.get(`${API}?page=service&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data3: serviceData.data,
            isLoading: false
        })
    }
    clientsData = async () => {
        const clientsData = await axios.get(`${API}?page=clients&auth=admin12123`).then(res=>{
            return res
        })
        const shortReview = await axios.get(`${API}?page=short_reviews&auth=admin12123`).then(res=>{
            return res
        })
        this.setState({
            data4: clientsData.data,
            data5: shortReview.data,
            isLoading: false
        })
    }
    componentDidMount() {
        this.homeData();
        this.skillData();
        this.serviceData();
        this.clientsData();
    }
    render() {
        return (
            <>
                <Router>
                    {this.state.isLoading===true&&
                    <div className="spinner">
                        <Spinner style={{marginTop:'23%'}} animation="grow" variant="primary" />
                    </div>
                    }
                    <Header />
                    <div style={{paddingTop:'1px'}} />
                    <Switch>
                        <Route exact={true} path="/" component={()=> this.state.isLoading===false&&<Home shortReviewD={this.state.data5} ReviewD={this.state.data4} serviceData={this.state.data3} skillData={this.state.data2} homeData={this.state.data} />} />
                        <Route exact={true} path="/about" component={()=>this.state.isLoading===false&&<AboutPage adminData={this.state.data} />} />
                        <Route exact={true} path="/skills" component={()=>this.state.isLoading===false&&<Skills skillData={this.state.data2} />} />
                        <Route exact={true} path="/services" component={()=>this.state.isLoading===false&&<Services serviceData={this.state.data3} />} />
                        <Route exact={true} path="/portfolios" component={()=>this.state.isLoading===false&&<Portfolio adminData={this.state.data} />} />
                        <Route exact={true} path="/reviews" component={()=>this.state.isLoading===false&&<ReviewPage reviewData={this.state.data4} />} />
                        <Route exact={true} path="/contact" component={()=>this.state.isLoading===false&&<GetIntoTouch adminData={this.state.data} />} />
                    </Switch>
                    <Footer />
                </Router>
            </>
        );
    }
}

export default App;
