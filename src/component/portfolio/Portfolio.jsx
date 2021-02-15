import React,{useState} from 'react';
import classes from "./Portfolio.module.css";
import PortfolioCom from "./PortfolioCom";
import {Modal,Button} from "react-bootstrap";

const Portfolio = ({portfolioData}) => {
    return (
        <div className={classes.portfolio}>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>Portfolios</span></h2>
                <div className="row pt-5">
                    {portfolioData.map((portfolio)=>(<PortfolioCom portfolio={portfolio} key={portfolio.id} />))}
                </div>
            </div>
        </div>
    );
};

export default Portfolio;