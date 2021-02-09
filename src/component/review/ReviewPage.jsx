import React from 'react';
import classes from "./ReviewPage.module.css";

const ReviewPage = () => {
    return (
        <>
            <div className="container pb-5 mb-5">
                <h2 className={`${classes.title_main} pt-4`}><span className={classes.main_title_section}>My Reviews</span></h2>
            </div>
        </>
    );
};

export default ReviewPage;