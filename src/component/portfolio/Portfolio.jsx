import React from 'react';
import classes from "./Portfolio.module.css";
import PortfolioCom from "./PortfolioCom";
import MetaTags from "react-meta-tags";

const Portfolio = (props) => {
    const portfolioData = props.portfolioData;
    return (
        <>
            {props.title && props.description ?
                <MetaTags>
                    <title>{props.title}</title>
                    <meta property="og:title" content={props.title} />
                    <meta name="description" content={props.description} />
                </MetaTags>
                :null
            }
            <div className={classes.portfolio}>
                <div className="container pb-5 mb-5">
                    <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>Portfolios</span></h2>
                    <div className="row pt-5">
                        {portfolioData.map((portfolio)=>(<PortfolioCom portfolio={portfolio} key={portfolio.id} />))}
                    </div>
                </div>
            </div>
        </>
    );
};

export default Portfolio;