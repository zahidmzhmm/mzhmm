import React from 'react';
import {Info} from '@material-ui/icons';
import {Spinner} from "react-bootstrap";
import {AssetsDir} from "../../server/Config";
import classes from './Home.module.css';
import {Link} from 'react-router-dom';
import About from "../about/About";
import Skills from "../skills/Skills";
import Services from "../services/Services";
import Portfolio from "../portfolio/Portfolio";
import Review from "../review/Review";
import GetIntoTouch from "../getIntoTouch/GetIntoTouch";

const Home = ({homeData,skillData,serviceData,ReviewD,shortReviewD}) => {
    const data = homeData;
    const skill = skillData;
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
            <About adminData={homeData} />
            <Skills skillData={skill} />
            <Services serviceData={serviceData} />
            <div className="row pb-5 mx-0">
                <div className={classes.buttons}>
                    <Link to="/services" className="button">View More</Link>
                </div>
            </div>
            <Review reviewData={ReviewD} shortReviewData={shortReviewD} />
            <Portfolio adminData={homeData} />
            <div className="row pb-5 mx-0">
                <div className={classes.buttons}>
                    <Link to="/portfolios" className="button">View More</Link>
                </div>
            </div>
            <div style={{paddingTop: '1px'}} />
            <GetIntoTouch adminData={homeData} />
        </>
    );
};

export default Home;