import React from 'react';
import classes from "./ClientSatisfy.module.css";
import {Layers, Mood, Star, Sync} from "@material-ui/icons";
import {AssetsDir} from "../../server/Config";

const clientImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_tow.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const ClientSatisfy = () => {
    return (
        <div className={classes.clientSatisfy} style={clientImage}>
            <div className="container">
                <div className="row text-center">
                    <div className={`${classes.clientColumn}col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Mood /></span></div>
                        <div className={`${classes.clientNumber} counter`}>12</div>
                        <p className={classes.clientText}>Customers</p>
                    </div>
                    <div className={`${classes.clientColumn}col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Layers /></span></div>
                        <div className={`${classes.clientNumber} counter`}>13</div>
                        <p className={classes.clientText}>Projects Completed</p>
                    </div>
                    <div className={`${classes.clientColumn}col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Star /></span></div>
                        <div className={`${classes.clientNumber} counter`}>14</div>
                        <p className={classes.clientText}>Full Review</p>
                    </div>
                    <div className={`${classes.clientColumn}col-md-6 col-lg-3 col-xs-12`}>
                        <div className={classes.clientIcon}><span><Sync /></span></div>
                        <div className={`${classes.clientNumber} counter`}>15</div>
                        <p className={classes.clientText}>Running Project</p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ClientSatisfy;