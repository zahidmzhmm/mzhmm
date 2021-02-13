import React, {useState} from 'react';
import {Info} from '@material-ui/icons';
import {API, AssetsDir} from "../../server/Config";
import classes from './Home.module.css';
import {Link} from 'react-router-dom';
import About from "../about/About";
import Skills from "../skills/Skills";
import Services from "../services/Services";
import Portfolio from "../portfolio/Portfolio";
import Review from "../review/Review";
import GetIntoTouch from "../getIntoTouch/GetIntoTouch";
import axios from "axios";

class Home extends React.Component {
    state = {
        data: '',
        isLoading: false
    }
    homeData = async () => {
        this.setState({
            isLoading: true
        })
        const adminData = await axios.get(`${API}?page=home&auth=admin12123`).then(res=>{
            return res
        })
        this.setState({
            data: adminData.data,
            isLoading: false
        })
    }
    componentDidMount() {
        this.homeData();
    }

    render() {
        const data = this.state.data;
        const homeIMG = {
            backgroundImage: `url('${AssetsDir+data.main_image}')`,
            backgroundPosition: 'center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'cover',
        }
        return (
            <>
                <div className={classes.home}>
                    <div className={classes.homeImage}>
                        <div className={classes.imageAdd} style={homeIMG} />
                    </div>
                    <div className={classes.homePage}>
                        <h4 className={classes.title}>{data.name}</h4>
                        <h2 className={classes.btm_title}>
                            <div className="cd-headline clip pt-5 is-full-width">
                                <span className="iam">I Am</span>
                                <span className="cd-words-wrapper">
                                <b className="is-visible"> <span>{data.title}</span></b>
                            </span>
                            </div>
                        </h2>
                        <div className={classes.scroll_bottom}><Link to="/about"><Info /></Link></div>
                    </div>
                </div>
                {this.state.isLoading===false && <About adminData={data} />}
                <Skills />
                <Services />
                <div className="row pb-5 mx-0">
                    <div className={classes.buttons}>
                        <Link to="/services" className="button">View More</Link>
                    </div>
                </div>
                <Review />
                <Portfolio />
                <div className="row pb-5 mx-0">
                    <div className={classes.buttons}>
                        <Link to="/portfolios" className="button">View More</Link>
                    </div>
                </div>
                <div style={{paddingTop: '1px'}} />
                <GetIntoTouch />
            </>
        );
    }
};

export default Home;