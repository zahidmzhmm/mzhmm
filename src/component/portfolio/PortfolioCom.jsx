import React, {useState} from 'react';
import classes from "./Portfolio.module.css";
import {Link} from "react-router-dom";
import {AssetsDir} from "../../server/Config";
import {Modal} from "react-bootstrap";

const PortfolioCom = ({portfolio}) => {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);
    return (
        <>
            <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                <div>
                    <Link
                        onClick={handleShow}
                        className={classes.portfolioColumnA}
                        title={portfolio.name}
                        description={portfolio.description}
                        to="/">
                        <img src={`${AssetsDir}/portfolio/${portfolio.file}`} />
                    </Link>
                </div>
            </div>
            <Modal show={show} onHide={handleClose} size="lg">
                <Modal.Header closeButton>
                    <Modal.Title>{portfolio.name}</Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <img style={{width:'100%'}} src={`${AssetsDir}/portfolio/${portfolio.file}`} alt=""/>
                    <div className="mt-2">
                        {portfolio.description}
                    </div>
                </Modal.Body>
            </Modal>
        </>
    );
};

export default PortfolioCom;