import React from 'react';
import classes from "./Review.module.css";
import {ThumbUpAlt} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";

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
                <h2 className={`${classes.review_title} text-center`}>
                    <span className={classes.review_title_section}> Testimonials </span>
                </h2>
                <div>
                    <div>
                        <div className={classes.client_image}><img src={`${AssetsDir}/4539.jpg`} alt="" />
                        </div>
                        <div className={classes.review_comment}><p>Every time is a real pleasure to work with Zahid! :) i totally recommend him!</p></div>
                        <div className={classes.review_name}><span> Goldensio </span></div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Review;