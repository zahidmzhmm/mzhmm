import React from 'react';
import classes from "./AboutPage.module.css";
import {AssetsDir} from "../../server/Config";
import MetaTags from "react-meta-tags";

const AboutPage = ({adminData,title,description}) => {
    return (
        <>

            <MetaTags>
                <title>{title}</title>
                <meta property="og:title" content={title} />
                <meta name="description" content={description} />
            </MetaTags>
            <div className="container pb-5 mb-5">
                <div className={classes.about}>
                    <div className="container mt-5 pt-5">
                        <div className={classes.image_section}><img src={`${AssetsDir+adminData.img}`} alt="" /></div>
                    </div>
                    <div className="container">
                        <h2 className="text-center">{adminData.title}</h2>
                        <div className="row">
                            <div className="description" style={{display:'table'}}>
                                {adminData.short_description}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default AboutPage;