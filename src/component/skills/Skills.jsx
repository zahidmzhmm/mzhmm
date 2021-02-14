import React from 'react';
import classes from "./Skills.module.css";
import {Code} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";
import Skill from "./Skill";

const skillImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const Skills = ({skillData}) => {
    return (
        <div className={classes.skills_section} style={skillImage}>
            <div className="container">
                <div className={classes.skills_icons}><span className="icon"><Code /></span></div>
                <div className={classes.skill_title}><span className={classes.skill_title_tag}>My Skills</span></div>
                <div className={classes.skill_skills}>
                    {skillData.map((skill)=>(<Skill key={skill.id} skillData={skill} />))}
                </div>
            </div>
        </div>
    );
};

export default Skills;