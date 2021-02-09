import React from 'react';
import classes from "./Services.module.css";
import {AssetsDir} from "../../server/Config";
import {Link} from "react-router-dom";

const Services = () => {
    return (
        <div className={classes.services}>
            <div className="container">
                <h2 className={classes.title_main}><span className={classes.main_title_section}>My Services</span></h2>
                <div className="row py-5 text-center">
                    <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                        <div className={classes.servicesColumnSection}>
                            <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                            <h3><span>AWS</span></h3>
                            <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                        </div>
                    </div>
                    <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                        <div className={classes.servicesColumnSection}>
                            <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                            <h3><span>AWS</span></h3>
                            <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                        </div>
                    </div>
                    <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                        <div className={classes.servicesColumnSection}>
                            <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                            <h3><span>AWS</span></h3>
                            <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                        </div>
                    </div>
                    <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                        <div className={classes.servicesColumnSection}>
                            <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                            <h3><span>AWS</span></h3>
                            <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className={classes.buttons}>
                        <Link to="/services" className="button">View More</Link>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Services;