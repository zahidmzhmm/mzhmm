import React, {useState} from 'react';
import classes from "./GetIntoTouch.module.css";
import {API, AssetsDir} from "../../server/Config";
import {LinearProgress} from "@material-ui/core";
import {toast} from "react-toastify";
import axios from "axios";
import MetaTags from "react-meta-tags";

const getIntoTouchImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_four.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const GetIntoTouch = (props) => {
    const adminData = props.adminData;
    const [name,setName]=useState('');
    const [email,setEmail]=useState('');
    const [subject,setSubject]=useState('');
    const [message,setMessage]=useState('');
    const [isLoading,setIsLoading]=useState(false);
    const submitForm = async (e) => {
        e.preventDefault()
        setIsLoading(true);
        const postBody = {
            "name":name,
            "email":email,
            "subject":subject,
            "message":message,
            "auth":"admin12123",
            "send_message":"send_message"
        }
        await axios.post(`${API}`,postBody).then(res=>{
            return res;
        })
        setIsLoading(false);
        setName("");
        setEmail("");
        setSubject("");
        setMessage("");
        toast("Message send success");
    }
    return (
        <>
            {props.title && props.description ?
                <MetaTags>
                    <title>{props.title}</title>
                    <meta property="og:title" content={props.title} />
                    <meta name="description" content={props.description} />
                </MetaTags>
                :null
            }
            <div className={classes.getIntoTouch} style={getIntoTouchImage}>
                <h2 className={`${classes.get_into_title} text-center mt-5`}><span className={classes.get_into_title_section}>  Get In Touch </span></h2>
                <form onSubmit={submitForm} className="mt-5">
                    <div className="container">
                        {isLoading===true&& <LinearProgress className="mx-3" color="primary" />}
                        <div className="row px-3">
                            <div className="col-lg-6 m-auto">Title</div>
                        </div>
                        <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                            <div className="col-md-6 pt-2">
                                <input value={name} type="text" name="name" required onChange={(e)=>setName(e.target.value)} className="form_ne" placeholder="Name *" />
                            </div>
                            <div className="col-md-6 pt-2">
                                <input value={email} type="email" name="email" required onChange={(e)=>setEmail(e.target.value)} className="form_ne" placeholder="Email *" />
                            </div>
                        </div>
                        <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                            <div className="col-12">
                                <input value={subject} type="text" name="subject" required className="" onChange={(e)=>setSubject(e.target.value)} placeholder="Subject *" />
                            </div>
                        </div>
                        <div className={`${classes.getIntoForm_section} row my-4 mx-0`}>
                            <div className="col-12">
                                <textarea name="massage" id="" required onChange={(e)=>setMessage(e.target.value)} className={classes.getIntoMassage} cols="30" placeholder="Massage *" rows="8" value={message} />
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
                            <p>{adminData.phone}</p>
                        </div>
                        <div className={`${classes.getInto_column} col-md-6 col-lg-4 col-xs-12`}>
                            <h4>Email</h4>
                            <p>{adminData.email}</p>
                        </div>
                        <div className={`${classes.getInto_column} col-md-6 col-lg-4 col-xs-12`}>
                            <h4>Address</h4>
                            <p>{adminData.addrs}</p>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default GetIntoTouch;