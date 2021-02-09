import React from 'react';
import classes from "./Portfolio.module.css";
import {Link} from "react-router-dom";
import {AssetsDir} from "../../server/Config";

const Portfolio = () => {
    return (
        <div className={classes.portfolio}>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} text-center pt-3`}><span className={classes.main_title_section}>My Portfolio </span>
                </h2>
                <div className="row pt-5">
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                    <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                        <div>
                            <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                            </Link>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className={classes.portfolioButtons}>
                        <Link to="portfolio" className={classes.portfolioButton}>View More</Link>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Portfolio;