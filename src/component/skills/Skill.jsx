import React from 'react';
import classes from "./Skills.module.css";

const Skill = ({skill}) => {
    return (
        <>
            <div className={classes.skill}>{skill.name}
                <div className={classes.percent_section}>
                    <div className={`${classes.percent_bar} percent${skill.percent} `} />
                    <div className={classes.percent}>{skill.percent}%</div>
                </div>
            </div>
        </>
    );
};

export default Skill;