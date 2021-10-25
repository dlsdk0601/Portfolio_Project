import React, {useState, useEffect, useRef} from "react";
import "../css/Contact.scss";

const Contact = ( {contentOn}) => {
 
    return(
        <section className="contact">
            <div className="contact__box">
                <div className="contact__font">
                   <h2 className={ contentOn ? "font__stroke" : "font__stroke on"}>CONTACT</h2>
                   <h2 className={ contentOn ? "font__fill" : "font__fill on"}>CONTACT</h2>
               </div>
                <div className="contact__info">
                    <article className="conatact__email">
                        <h2>EMAIL</h2>
                        <a className="info_a" href="mailto:dlsdk0601@gmail.com">dlsdk0601@gmail.com</a>
                    </article>
                    <article className="conatact__github">
                        <h2>GITHUB</h2>
                        <a className="info_a" href="https://github.com/dlsdk0601" target="_blank">https://github.com/dlsdk0601</a>
                    </article>
                    <article className="conatact__mobile">
                        <h2>MOBILE</h2>
                        <a className="info_a">010.6567.5303</a>
                    </article>
                    <article className="conatact__kakao">
                        <h2>KAKAO</h2>
                        <a className="info_a">dyddhks1227</a>
                    </article>
                </div>
            </div>
        </section>
    );
}

export default Contact;