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
import ErrorPage from "./component/404/ErrorPage";
import {ToastContainer} from "react-toastify";
import 'react-toastify/dist/ReactToastify.min.css';

class App extends Component{
    state = {
        data: [],
        data2: [],
        data3: [],
        data4: [],
        data5: [],
        data6: [],
        data7: [],
        data8: [],
        data9: [],
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
    portfolioData = async () => {
        const portfolioData = await axios.get(`${API}?page=portfolio&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data6: portfolioData.data,
            isLoading: false
        })
    }
    portfolioWithLimit = async () => {
        const portfolioWithLimit = await axios.get(`${API}?page=portfolio_with_limit&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data7: portfolioWithLimit.data,
            isLoading: false
        })
    }
    serviceWithLimit = async () => {
        const serviceWithLimit = await axios.get(`${API}?page=service_with_limit&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data8: serviceWithLimit.data,
            isLoading: false
        })
    }
    categories2 = async () => {
        const categories2 = await axios.get(`${API}?page=categories2&auth=admin12123`).then(res=>{
            return res;
        })
        this.setState({
            data9: categories2.data,
            isLoading: false
        })
    }
    componentDidMount() {
        this.homeData();
        this.skillData();
        this.serviceData();
        this.clientsData();
        this.portfolioData();
        this.portfolioWithLimit();
        this.serviceWithLimit();
        this.categories2();
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
                    <div>
                        <ToastContainer style={{marginTop: '2.3rem'}} />
                    </div>
                    <div style={{paddingTop:'1px'}} />
                    <Switch>
                        <Route exact={true} path="/about" component={()=>this.state.isLoading===false&&<AboutPage title="About" description={this.state.data.short_description} adminData={this.state.data} />} />
                        <Route exact={true} path="/skills" component={()=>this.state.isLoading===false&&<Skills title="Skills" description={this.state.data.short_description} skillData={this.state.data2} />} />
                        <Route exact={true} path="/services" component={()=>this.state.isLoading===false&&<Services title="Services" description={this.state.data.short_description} serviceData={this.state.data3} />} />
                        <Route exact={true} path="/portfolios" component={()=>this.state.isLoading===false&&<Portfolio title="Portfolios" description={this.state.data.short_description} portfolioData={this.state.data6} />} />
                        <Route exact={true} path="/reviews" component={()=>this.state.isLoading===false&&<ReviewPage title="Reviews" description={this.state.data.short_description} reviewData={this.state.data4} />} />
                        <Route exact={true} path="/contact" component={()=>this.state.isLoading===false&&<GetIntoTouch title="Contact" description={this.state.data.short_description} adminData={this.state.data} />} />
                        <Route exact={true} path="/" component={()=> this.state.isLoading===false&&<Home mTitle="Home" mDescription={this.state.data.short_description} categories2={this.state.data9} portfolioData={this.state.data7} shortReviewD={this.state.data5} ReviewD={this.state.data4} homeServiceData={this.state.data8} skillData={this.state.data2} homeData={this.state.data} />} />
                        <Route path="" component={()=>this.state.isLoading===false&&<ErrorPage />} />
                    </Switch>
                    <Footer />
                </Router>
            </>
        );
    }
}

export default App;
