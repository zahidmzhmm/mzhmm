import React from 'react';
import {ArrowDownward} from '@material-ui/icons';
import {AssetsDir} from "../../server/Config";
import classes from './Home.module.css';
import {Link} from 'react-router-dom';

const homeIMG = {
    backgroundImage: `url('${AssetsDir}162tree-736885__340.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const Home = () => {
    return (
        <>
            <div className={classes.home}>
                <div className={classes.homeImage}>
                    <div className={classes.imageAdd} style={homeIMG} />
                </div>
                <div className={classes.homePage}>
                    <h4 className={classes.title}>Web Developer</h4>
                    <h2 className={classes.btm_title}>
                        <div className="cd-headline clip is-full-width">
                            <span className="iam mt-3">I Am</span>
                            <span className="cd-words-wrapper">
                                <b className="is-visible"> <span>a Web Developer</span></b>
                            </span>
                        </div>
                    </h2>
                    <div className={classes.scroll_bottom}><Link to="/about_me"><ArrowDownward /></Link></div>
                </div>
            </div>
            <div style={{paddingTop:'1px'}} />
        </>
    );
};

export default Home;