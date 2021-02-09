import React from 'react';
import classes from "./GetIntoTouch.module.css";
import {AssetsDir} from "../../server/Config";

const getIntoTouchImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_four.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const GetIntoTouch = () => {
    return (
        <div className={classes.getIntoTouch} style={getIntoTouchImage}>
            <h2 className={`${classes.get_into_title} text-center mt-5`}><span className={classes.get_into_title_section}>  Get In Touch </span></h2>
            <form className="mt-5">
                <div className="container">
                    <div className="row px-3">
                        <div className="col-lg-6 m-auto">Title</div>
                    </div>
                    <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                        <div className="col-md-6 pt-2">
                            <input type="text" name="name" required className="form_ne" placeholder="Name *" />
                        </div>
                        <div className="col-md-6 pt-2">
                            <input type="email" name="email" required className="form_ne" placeholder="Email *" />
                        </div>
                    </div>
                    <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                        <div className="col-12">
                            <input type="text" name="subject" required className="" placeholder="Subject *" />
                        </div>
                    </div>
                    <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                        <div className="col-12">
                            <textarea name="massage" id="" required className={classes.getIntoMassage} cols="30" placeholder="Massage *" rows="8" />
                        </div>
                    </div>
                    <div className="row buttons mx-0">
                        <div className="col-12">
                            <button type="submit" name="contact" className={classes.getIntoButton}>Send</button>
                        </div>
                    </div>
                </div>
            </form>
            <div className={`${classes.getIntoUser} container`}>
                <div className="row">
                    <div className={`${classes.getInto_column} col-md-6 col-lg-4 col-xs-12`}>
                        <h4>Phone</h4>
                        <p>8801741424639</p>
                    </div>
                    <div className={`${classes.getInto_column} col-md-6 col-lg-4 col-xs-12`}>
                        <h4>Email</h4>
                        <p>support@zahidmzhmm.com</p>
                    </div>
                    <div className={`${classes.getInto_column} col-md-6 col-lg-4 col-xs-12`}>
                        <h4>Address</h4>
                        <p>Assam Colony, Bou Bazar, Sopura, Rajshahi-6203, Bangladesh</p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default GetIntoTouch;