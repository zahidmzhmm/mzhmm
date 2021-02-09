import React from 'react';
import classes from "./AboutPage.module.css";

const AboutPage = () => {
    return (
        <>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>About Us</span></h2>
            </div>
        </>
    );
};

export default AboutPage;