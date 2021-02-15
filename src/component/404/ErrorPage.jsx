import React from 'react';
import {Container} from "react-bootstrap";
import {Link} from "react-router-dom";
import MetaTags from "react-meta-tags";

const ErrorPage = () => {
    return (
        <>
            <MetaTags>
                <title>404</title>
                <meta property="og:title" content="404" />
                <meta name="description" content="Page Not Found" />
            </MetaTags>
            <Container className='text-center' style={{height:'70.1vh'}}>
                <div style={{marginTop: '10rem'}}>
                    <svg style={{width: '600px', height: '200px',}} alignment-baseline="middle">
                        <defs>
                            <clipPath id="clip2">
                                <path d="M 0 0 L 600 0 L 600 80 L 0 80 L 0 0 L 0 125 L 600 125 L 600 200 L 0 200 Z" />
                            </clipPath>
                        </defs>
                        <text x="300" y="190" style={{width: '600px', height: '200px',}} text-anchor="middle" font-family="Lato" font-weight="700" font-size="250" fill="#505458" clip-path="url(#clip2)">
                            4
                            <tspan fill="#35b8e0">0</tspan>
                            4
                        </text>
                    </svg>
                </div>
                <h3 className="mt-4" style={{color: 'rgb(80, 84, 88)'}}>PAGE NOT FOUND</h3>
                <p style={{color: '#333'}}>
                    It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us. You might
                    want to check your internet connection. Here's a little tip that might help you get back on track.
                </p>
                <Link to="/" className="btn btn-info"> Return home </Link>
            </Container>
        </>
    );
};

export default ErrorPage;