import React from 'react';
import classes from "./About.module.css";
import {Facebook, LinkedIn, Twitter, YouTube} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";


const About = (props) => {
    const adminData = props.adminData;
    const addImage = {
        backgroundImage: `url('${AssetsDir+adminData.img}')`,
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        backgroundSize: 'cover',
    }
    return (
        <div className={classes.about_me}>
            <div className="container">
                <div className="row">
                    <div className="col-lg-5">
                        <div>
                            <div className={classes.about_image}>
                                <div className={classes.add_image} style={addImage} />
                            </div>
                        </div>
                    </div>
                    <div className={`col-lg-7`}>
                        <div className={classes.title_section}><span className={classes.title2}> {adminData.title} </span></div>
                        <div className={classes.long_des}>{adminData.short_description}</div>
                        <div>
                            <div className={classes.share_icon}><a target="_blank" href={adminData.facebook}><Facebook /></a></div>
                            <div className={classes.share_icon}><a target="_blank" href={adminData.twitter}><Twitter /></a></div>
                            <div className={classes.share_icon}><a target="_blank" href={adminData.linkedin}><LinkedIn /></a></div>
                            <div className={classes.share_icon}><a target="_blank" href={adminData.youtube}><YouTube /></a></div>
                        </div>
                        <div className={classes.hire_section}>
                            <div className={classes.hire_buttons}><a target="_blank" href={`${adminData.hire_link}`} front="HIRE ME" back="GO NOW" className={classes.hire_me} /></div>
                            <div className={classes.hire_buttons}><a target="_blank" href={adminData.resume} front="DOWNLOAD C.V" back="GO TO RESUME" className={classes.download_cv} /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default About;