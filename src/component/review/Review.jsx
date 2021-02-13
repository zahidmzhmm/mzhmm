import React from 'react';
import classes from "./Review.module.css";
import {Layers, Mood, Star, Sync, ThumbUpAlt} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";
import ReviewCom from "./ReviewCom";
import ReactElasticCarousel from "react-elastic-carousel";

const reviewImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_tree.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const Review = () => {
    return (
        <div className={classes.review} style={reviewImage}>
            <div className="container">
                <div className={classes.reviewIcon}><span className={classes.reviewIcons}><ThumbUpAlt /></span></div>
                <h2 className={`${classes.review_title} text-center pb-2`}>
                    <span className={classes.review_title_section}> Testimonials </span>
                </h2>
            </div>
            <div className="container">
                <ReactElasticCarousel>
                    <ReviewCom key="1" userImage="1905.jpg" userComment="Testing" userName="Username" />
                    <ReviewCom key="2" userImage="1905.jpg" userComment="Testing" userName="Username" />
                    <ReviewCom key="3" userImage="1905.jpg" userComment="Testing" userName="Username" />
                    <ReviewCom key="4" userImage="1905.jpg" userComment="Testing" userName="Username" />
                </ReactElasticCarousel>
            </div>
            <div className="container mt-5">
                <div className="row text-center">
                    <div className={`${classes.clientColumn} col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Mood /></span></div>
                        <div className={`${classes.clientNumber} counter`}>12</div>
                        <p className={classes.clientText}>Customers</p>
                    </div>
                    <div className={`${classes.clientColumn} col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Layers /></span></div>
                        <div className={`${classes.clientNumber} counter`}>13</div>
                        <p className={classes.clientText}>Projects Completed</p>
                    </div>
                    <div className={`${classes.clientColumn} col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Star /></span></div>
                        <div className={`${classes.clientNumber} counter`}>14</div>
                        <p className={classes.clientText}>Full Review</p>
                    </div>
                    <div className={`${classes.clientColumn} col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Sync /></span></div>
                        <div className={`${classes.clientNumber} counter`}>15</div>
                        <p className={classes.clientText}>Running Project</p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Review;