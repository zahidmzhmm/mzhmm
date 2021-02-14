import React from 'react';
import classes from "./Services.module.css";
import {AssetsDir} from "../../server/Config";

const Service = ({service}) => {
    return (
        <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
            <div className={classes.servicesColumnSection}>
                <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/${service.file}`} alt="" /></div>
                <h3><span>{service.name}</span></h3>
                <p>{service.description}</p>
            </div>
        </div>
    );
};

export default Service;