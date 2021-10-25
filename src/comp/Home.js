import "../css/Home.scss";
import React, { useState, useEffect, useRef } from "react";
import { TypingStep } from "typing-effect-reactjs";


    
const Home = () => {
    const intro1 =  [" JUNG IN A"];
    const intro_ani = useRef(null);
    
    const sequence1 = intro1.map( (item, i) => {
        return {content: item, config:{typeSpeed: 80}, id: i}
        })

    // Intro 
    const [ isLoading, setIsLoading] = useState(false);
    useEffect( () => {
        setTimeout( () => {
            setIsLoading(true);
        }, 2500);
    }, []);
    

    return (
        <section ref={intro_ani} id="inrtroduce" className={isLoading ? "con1 intro" : "con1"}>
            <div className="back">
                <figure>
                    <img src="./img/logo.png" alt="없엉"/>
                </figure>
                <TypingStep sequence={sequence1} element="p" typeSpeed={80} />
            </div>
        </section>
    );
}

export default Home;

