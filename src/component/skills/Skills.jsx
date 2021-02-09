import React from 'react';
import classes from "./Skills.module.css";
import {Code} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";

const skillImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const Skills = () => {
    return (
        <div className={classes.skills_section} style={skillImage}>
            <div className="container">
                <div className={classes.skills_icons}><span className="icon"><Code /></span></div>
                <div className={classes.skill_title}><span className={classes.skill_title_tag}>My Skills</span></div>
                <div className={classes.skill_skills}>
                    <div className={classes.skill}>This is 5%
                        <div className={classes.percent_section}>
                            <div className={`${classes.percent_bar} ${classes.percent5}`} />
                            <div className={classes.percent}>5%</div>
                        </div>
                    </div>
                    <div className={classes.skill}>This is 50%
                        <div className={classes.percent_section}>
                            <div className={`${classes.percent_bar} ${classes.percent50}`} />
                            <div className={classes.percent}>50%</div>
                        </div>
                    </div>
                    <div className={classes.skill}>This is 50%
                        <div className={classes.percent_section}>
                            <div className={`${classes.percent_bar} ${classes.percent50}`} />
                            <div className={classes.percent}>50%</div>
                        </div>
                    </div>
                    <div className={classes.skill}>This is 50%
                        <div className={classes.percent_section}>
                            <div className={`${classes.percent_bar} ${classes.percent50}`} />
                            <div className={classes.percent}>50%</div>
                        </div>
                    </div>
                    <div className={classes.skill}>This is 50%
                        <div className={classes.percent_section}>
                            <div className={`${classes.percent_bar} ${classes.percent50}`} />
                            <div className={classes.percent}>50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Skills;