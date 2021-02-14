import React from 'react';
import classes from "./Portfolio.module.css";
import {Link} from "react-router-dom";
import {AssetsDir} from "../../server/Config";

const PortfolioCom = ({portfolio}) => {
    return (
        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
            <div>
                <Link
                    className={classes.portfolioColumnA}
                    title={portfolio.name}
                    description={portfolio.description}
                    data-title="<?php echo $portfolio['name']; ?>"
                    data-idno="<?php echo $portfolio['id']; ?>"
                    data-image="<?php echo $portfolio['file']; ?>"
                    data-description="<?php echo $portfolio['description']; ?>"
                    data-table="portfolio"
                    data-toggle="modal" to="/">
                    <img src={`${AssetsDir}/portfolio/${portfolio.file}`} />
                </Link>
            </div>
        </div>
    );
};

export default PortfolioCom;