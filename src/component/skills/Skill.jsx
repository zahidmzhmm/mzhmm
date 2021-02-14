import React from 'react';
import classes from "./Skills.module.css";

const Skill = ({skillData}) => {
    return (
        <>
            <div className={classes.skill}>{skillData.name}
                <div className={classes.percent_section}>
                    <div className={`${classes.percent_bar} percent${skillData.percent} `} />
                    <div className={classes.percent}>{skillData.percent}%</div>
                </div>
            </div>
        </>
    );
};

export default Skill;