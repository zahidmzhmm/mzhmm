import React from "react";
import {Container, Nav, Navbar} from "react-bootstrap";
import {AssetsDir} from "../../server/Config";
import classes from './Header.module.css';
import {Link,NavLink} from "react-router-dom";

const active = {
    color: '#C49B66'
}
const Header = () => {
    return (
        <div className={'fixed-top'}>
            <Navbar className={classes.navbar} bg="light" expand="lg">
                <Container>
                    <Navbar.Brand><Link to="/"><img className={classes.logo} src={`${AssetsDir}/546logo.png`} alt=""/></Link></Navbar.Brand>
                    <Navbar.Toggle className={`${classes.navbarToggler} ${classes.bars}`} aria-controls="navbar_main" />
                    <Navbar.Collapse id="navbar_main">
                        <Nav className="ml-auto">
                            <NavLink exact={true} activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/">Home</NavLink>
                            <NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/services">Services</NavLink>
                            <NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/portfolios">Portfolios</NavLink>
                            <NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/reviews">Reviews</NavLink>
                            <NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/contact">Contact</NavLink>
                            <NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/about">About</NavLink>
                            {/*<NavLink activeStyle={active} className={`${classes.navLink} mx-xl-3`} to="/fileShare">File Share</NavLink>*/}
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </div>
    );
};

export default Header;