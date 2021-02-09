import React from 'react';
import classes from "./ReviewPage.module.css";
import {Star} from '@material-ui/icons';
import {AssetsDir} from "../../server/Config";

const ReviewPage = () => {
    return (
        <>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>Customer's Say</span></h2>
                <div className={classes.blog}>
                    <div className="container">
                        <div className="row py-5">
                            <div className={`${classes.column} col-md-6 col-lg-3 col-xs-13`}>
                                <div className={`${classes.main_column} mt-4`}>
                                    <div className={classes.image}><img src={`${AssetsDir}10911.jpg`} alt="" />
                                    </div>
                                    <div className={classes.description}>
                                        <div className="row py-1">
                                            <div className="col-4">Name:</div>
                                            <div className="col-8">fghgfhgh
                                            </div>
                                        </div>
                                        <div className="row py-1">
                                            <div className="col-4">Comment:</div>
                                            <div className={`${classes.client_comment} col-8 scroller`}>
                                                gfhfghfghggfhfghfghggfhfghfghggfhfghfghggfhfghfghggfhfghfghggfhfghfghggfhfghfghg
                                            </div>
                                        </div>
                                        <div className="row py-1">
                                            <div className="col-4">Country:</div>
                                            <div className="col-8">
                                                <strong>Bangldesh</strong>
                                            </div>
                                        </div>
                                        <div className="row pt-1 pb-4">
                                            <div className="col-4">Review:</div>
                                            <div className={`${classes.icon} col-8 text-warning`}>5 <Star /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default ReviewPage;