import React from 'react';
import classes from "./ReviewPage.module.css";
import {AssetsDir} from "../../server/Config";
import {Star} from "@material-ui/icons";

const ReviewPageCom = ({review}) => {
    return (
        <div className={`${classes.column} col-md-6 col-lg-3 col-xs-13`}>
            <div className={`${classes.main_column} mt-4`}>
                <div className={`${classes.image} m-3`}>
                    <img src={`${AssetsDir+review.image}`} alt="" />
                </div>
                <div className={classes.description}>
                    <div className="row py-1">
                        <div className="col-4">Name:</div>
                        <div className="col-8">
                            {review.name}
                        </div>
                    </div>
                    <div className="row py-1">
                        <div className="col-4">Comment:</div>
                        <div className={`${classes.client_comment} col-8 scroller`}>
                            {review.comment}
                        </div>
                    </div>
                    <div className="row py-1">
                        <div className="col-4">Country:</div>
                        <div className="col-8">
                            <strong>{review.country}</strong>
                        </div>
                    </div>
                    <div className="row pt-1 pb-4">
                        <div className="col-4">Review:</div>
                        <div className={`${classes.icon} col-8 text-warning`}>{review.review} <Star /></div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ReviewPageCom;