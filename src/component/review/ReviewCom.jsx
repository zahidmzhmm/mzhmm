import React from 'react';
import classes from "./Review.module.css";
import {AssetsDir} from "../../server/Config";

const ReviewCom = (props) => {
    return (
        <>
            <div>
                <div className={classes.client_image}>
                    <img src={`${AssetsDir}/${props.userImage}`} alt="" />
                </div>
                <div className={classes.review_comment}><p>{props.userComment}</p></div>
                <div className={classes.review_name}><span>{props.userName}</span></div>
            </div>
        </>
    );
};

export default ReviewCom;