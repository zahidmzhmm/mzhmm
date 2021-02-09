import React from 'react';
import classes from "./AboutPage.module.css";
import {AssetsDir} from "../../server/Config";

const AboutPage = () => {
    return (
        <>
            <div className="container pb-5 mb-5">
                <div className={classes.about}>
                    <div className="container mt-5 pt-5">
                        <div className={classes.image_section}><img src={`${AssetsDir}169img.jpg`} alt="" /></div>
                    </div>
                    <div className="container">
                        <h2 className="text-center">Web Developer</h2>
                        <div className="row">
                            <div className="description" style={{display:'table'}}>
                                <div>Hey,</div>
                                <p>I am Zahid. I have 3+ years of experience in Web Development. <strong><a
                                    title="Fiverr" href="https://www.fiverr.com/mjhm12" target="_blank">Customer
                                    service: 20/7.</a></strong></p>
                                <p>You will get <strong><a title="Fiverr" href="https://www.fiverr.com/mjhm12"
                                                           target="_blank">100% full support</a></strong>&nbsp;of work
                                    assured until you are fully satisfied</p>
                                <h2>My key skills are:</h2>
                                <ul style={{listStyleType: 'disc'}}>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>JavaScript&nbsp;</li>
                                    <li>Jquery / Ajax</li>
                                    <li>Bootstrap / Materializecss</li>
                                    <li>SASS (SCSS)</li>
                                    <li>PHP</li>
                                    <li>OOP, PDO</li>
                                    <li>Rest API</li>
                                    <li>MySql</li>
                                    <li>Any sketch&nbsp;or PSD to HTML</li>
                                    <li>Demo import WordPress</li>
                                    <li>PHP Website Installation</li>
                                    <li>User panel with PHP, OOP, Mysql</li>
                                    <li>Admin Panel with PHP, OOP, Mysql</li>
                                    <li>Controller with PHP, OOP, Mysql</li>
                                    <li>Laravel</li>
                                    <li>Reactjs</li>
                                    <li>Laravel with Reactjs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default AboutPage;