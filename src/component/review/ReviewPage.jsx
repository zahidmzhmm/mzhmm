import React from 'react';
import classes from "./ReviewPage.module.css";
import ReviewPageCom from "./ReviewPageCom";

const ReviewPage = ({reviewData}) => {
    return (
        <>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>Customer's Say</span></h2>
                <div className={classes.blog}>
                    <div className="container">
                        <div className="row py-5">
                            {reviewData.map((review)=>(<ReviewPageCom key={review.id} review={review} />))}
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default ReviewPage;