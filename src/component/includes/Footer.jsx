import React from 'react';
import classes from './Footer.module.css';

const Footer = () => {
    return (
        <>
            <div className={`${classes.footer} text-light`}>
                <div className="container py-3 text-center">
                    <div className={classes.copyright}> &copy; Copyright Zahid Mzhmm 2021</div>
                </div>
            </div>
        </>
    );
};

export default Footer;