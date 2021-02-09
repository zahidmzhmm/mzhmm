import React from 'react';
import classes from "./About.module.css";
import {Link} from "react-router-dom";
import {Facebook, LinkedIn, Twitter, YouTube} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";

const addImage = {
    backgroundImage: `url('${AssetsDir}169img.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const About = () => {
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
                        <div className={classes.title_section}><span className={classes.title2}>  Web Developer </span></div>
                        <div className={classes.long_des}>
                            I am Zahid. I have 3+ years of experience in Web Development. Customer service: 20/7. You will get 100% full support of work assured until you are fully satisfied. My key skills are: 1. HTML5, CSS3, JavaScript & Jquery, Bootstrap,Wordpress Elementor, PHP, MySql 2. Any sketch, PSD, ai, photo, xd to HTML, Bootstrap, Wordpress with Elementor 3. demo import and customize with client requirement, page build with Elementor, SEO with Yoast plugin, login, registration 4. Graphic Design: A. Logo Design C. Favicon Design D. Adobe Illustrator E. Adobe Photoshop 5. Admin Panel, Controler Others.
                        </div>
                        <div>
                            <div className={classes.share_icon}><Link target="_blank" to="facebook"><Facebook /></Link></div>
                            <div className={classes.share_icon}><Link target="_blank" to="tweitter"><Twitter /></Link></div>
                            <div className={classes.share_icon}><Link target="_blank" to="linkedin"><LinkedIn /></Link></div>
                            <div className={classes.share_icon}><Link target="_blank" to="youtube"><YouTube /></Link></div>
                        </div>
                        <div className={classes.hire_section}>
                            <div className={classes.hire_buttons}><a href="mailto:info@zahidmzhmm.com" front="HIRE ME" back="GO NOW" className={classes.hire_me} /></div>
                            <div className={classes.hire_buttons}><Link to='/hire' front="DOWNLOAD C.V" back="GO TO RESUME" className={classes.download_cv} /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default About;