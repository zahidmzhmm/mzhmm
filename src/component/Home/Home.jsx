import React from 'react';
import {Facebook, Twitter, LinkedIn, YouTube, ArrowDownward, Code, Mood, Layers, Star, Sync, ThumbUpAlt} from '@material-ui/icons';
import {AssetsDir} from "../../server/Config";
import classes from './Home.module.css';
import {Link} from 'react-router-dom';

const homeIMG = {
    backgroundImage: `url('${AssetsDir}162tree-736885__340.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const addImage = {
    backgroundImage: `url('${AssetsDir}169img.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
}
const skillImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const clientImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_tow.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const reviewImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_tree.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const getIntoTouchImage = {
    background: `linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0,0.8)),url('${AssetsDir}coding_four.jpg')`,
    backgroundPosition: 'center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover',
    backgroundAttachment: 'fixed',
}
const Home = () => {
    return (
        <>
            <div className={classes.home}>
                <div className={classes.homeImage}>
                    <div className={classes.imageAdd} style={homeIMG} />
                </div>
                <div className={classes.homePage}>
                    <h4 className={classes.title}>Web Developer</h4>
                    <h2 className={classes.btm_title}>
                        <div className="cd-headline clip is-full-width">
                            <span className="iam mt-3">I Am</span>
                            <span className="cd-words-wrapper">
                                <b className="is-visible"> <span>a Web Developer</span></b>
                            </span>
                        </div>
                    </h2>
                    <div className={classes.scroll_bottom}><Link to="/about_me"><ArrowDownward /></Link></div>
                </div>
            </div>
            <div className={classes.about_me}>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-5">
                            <div className="image_section">
                                <div className={classes.about_image}>
                                    <div className={classes.add_image} style={addImage} />
                                </div>
                            </div>
                        </div>
                        <div className={`col-lg-7`}>
                            <div className={classes.title_section}><span className={classes.title2}>  Web Developer </span></div>
                            <div className={classes.long_des}>
                                I am Zahid. I have 3+ years of experience in Web Development. Customer service: 20/7. You will get 100% full support of work assured until you are fully satisfied. My key skills are: 1. HTML5, CSS3, JavaScript & Jquery, Bootstrap,Wordpress Elementor, PHP, MySql 2. Any sketch, PSD, ai, photo, xd to HTML, Bootstrap, Wordpress with Elementor 3. demo import and customize with client requirement, page build with Elementor, SEO with Yoast plugin, login, registration 4. Graphic Design: A. Logo Design C. Favicon Design D. Adobe Illustrator E. Adobe Photoshop 5. Admin Panel, Controler Others.
                            </div>
                            <div>
                                <div className={classes.share_icon}><Link to="facebook"><Facebook /></Link></div>
                                <div className={classes.share_icon}><Link to="tweitter"><Twitter /></Link></div>
                                <div className={classes.share_icon}><Link to="linkedin"><LinkedIn /></Link></div>
                                <div className={classes.share_icon}><Link to="youtube"><YouTube /></Link></div>
                            </div>
                            <div className={classes.hire_section}>
                                <div className={classes.hire_buttons}><Link to='/hire' front="HIRE ME" back="GO NOW" className={classes.hire_me} /></div>
                                <div className={classes.hire_buttons}><Link to='/hire' front="DOWNLOAD C.V" back="GO TO RESUME" className={classes.download_cv} /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div className={classes.services}>
                <div className="container">
                    <h2 className={classes.title_main}><span className={classes.main_title_section}>My Services</span></h2>
                    <div className="row py-5 text-center">
                        <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                            <div className={classes.servicesColumnSection}>
                                <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                                <h3><span>AWS</span></h3>
                                <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                            </div>
                        </div>
                        <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                            <div className={classes.servicesColumnSection}>
                                <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                                <h3><span>AWS</span></h3>
                                <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                            </div>
                        </div>
                        <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                            <div className={classes.servicesColumnSection}>
                                <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                                <h3><span>AWS</span></h3>
                                <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                            </div>
                        </div>
                        <div className={`${classes.servicesColumn} col-md-6 col-xs-12 col-lg-4`}>
                            <div className={classes.servicesColumnSection}>
                                <div className={classes.servicesColumnSectionIcon}><img src={`${AssetsDir}icon/279aws.png`} alt="" /></div>
                                <h3><span>AWS</span></h3>
                                <p>I have so much experience in AWS. Operating system: Debian, Ubuntu, etc. if you want I work with this AWS platform then you need to create an account in AWS</p>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className={classes.buttons}>
                            <Link to="/services" className="button">View More</Link>
                        </div>
                    </div>
                </div>
            </div>
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
            <div className={classes.portfolio}>
                <div className="container pb-5 mb-5">
                    <h2 className={`${classes.title_main} text-center pt-3`}><span className={classes.main_title_section}>My Portfolio </span>
                    </h2>
                    <div className="row pt-5">
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                        <div className={`${classes.portfolioColumn} col-md-6 col-lg-4 p-1 col-xs-12`}>
                            <div>
                                <Link
                                className={classes.portfolioColumnA}
                                title="<?php echo $portfolio['name']; ?>"
                                description="<?php echo $portfolio['description']; ?>"
                                data-title="<?php echo $portfolio['name']; ?>"
                                data-idno="<?php echo $portfolio['id']; ?>"
                                data-image="<?php echo $portfolio['file']; ?>"
                                data-description="<?php echo $portfolio['description']; ?>"
                                data-table="portfolio"
                                data-toggle="modal" to="/">
                                <img src={`${AssetsDir}/portfolio/53903.png`} />
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className={classes.portfolioButtons}>
                            <Link to="portfolio" className={classes.portfolioButton}>View More</Link>
                        </div>
                    </div>
                </div>
            </div>
            <div className={classes.review} style={reviewImage}>
                <div className="container">
                    <div className={classes.reviewIcon}><span className={classes.reviewIcons}><ThumbUpAlt /></span></div>
                    <h2 className={`${classes.review_title} text-center`}>
                        <span className={classes.review_title_section}> Testimonials </span>
                    </h2>
                    <div className={classes.review_carousel_one}>
                        <div>
                            <div className={classes.client_image}><img src={`${AssetsDir}/4539.jpg`} alt="" />
                            </div>
                            <div className={classes.review_comment}><p className={classes.review_text}>Every time is a real pleasure to work with Zahid! :) i totally recommend him!</p></div>
                            <div className={classes.review_name}><span> Goldensio </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style={{paddingTop:'1px'}} />
            <div className={classes.getIntoTouch} style={getIntoTouchImage}>
                <h2 className={`${classes.get_into_title} text-center`}><span className={classes.get_into_title_section}>  Get In Touch </span></h2>
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
        </>
    );
};

export default Home;