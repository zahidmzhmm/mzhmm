import React from 'react';
import classes from "./Services.module.css";
import Service from "./Service";
import MetaTags from "react-meta-tags";

const Services = (props) => {
    const serviceData = props.serviceData;
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
            <div className={classes.services}>
                <div className="container">
                    <h2 className={classes.title_main}><span className={classes.main_title_section}>My Services</span></h2>
                    <div className="row py-5 text-center">
                        {serviceData.map((service)=>(<Service key={service.id} service={service} />))}
                    </div>
                </div>
            </div>
        </>
    );
};

export default Services;