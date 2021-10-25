import "../css/Skill.scss";
import React, { useEffect, useState, useRef } from 'react';
import useMeasure from 'react-use-measure';  
import { useSpring, animated } from '@react-spring/web';
import styles from '../css/animation.module.css';


const Skill = ( {contentOn} ) => {
    const refs = useRef([]);
    const progress = useRef([]);
    const desc_tag = useRef(null);
    const title = useRef(null);
    const [open, toggle] = useState(true)
    const [ref, { width }] = useMeasure()
    const props_8 = useSpring({ width: open ? width*0.8 : 0 });
    const props_85 = useSpring({ width: open ? width*0.85 : 0 });
    const props_75 = useSpring({ width: open ? width*0.75 : 0 });
    const props_70 = useSpring({ width: open ? width*0.7 : 0 });
    const props_65 = useSpring({ width: open ? width*0.65 : 0 });
    const props_30 = useSpring({ width: open ? width*0.3 : 0 });
    const props_40 = useSpring({ width: open ? width*0.4 : 0 });
    const propsArr = [props_8, props_8, props_85, props_75, props_70, props_65, props_30, props_40];
    const score = [80, 80, 85, 75, 70, 65, 30, 40];

    const skill_svg = [
        "./img/skill_logo/html.svg", "./img/skill_logo/css.svg"
        ,"./img/skill_logo/js.svg", "./img/skill_logo/jquery.svg"
        ,"./img/skill_logo/sass.svg", "./img/skill_logo/react.svg"
        ,"./img/skill_logo/mysql.svg", "./img/skill_logo/php.svg"
    ];
    
    const description = ["Mark up, Semantic Tag, Input, validation", "Styling, Animation, Media Query", "Library, Canvas, Event, Json, API, DOM, Fetch",
                        "Ajax, Tab, Accordion, Library", "Styling, Animation, Mixin function", 
                        "Library controll, Hooks, Functional Component", "Create, Read, Update, Delete", "Login, SQL Controll"];
    const title_arr = ["HTML", "CSS", "JS", "jQuery", "Sass", "React", "MySQL", "PHP"];
    
    const LiClick = (e) => {
        const active_Num = e.target.dataset.num;
        const tag = desc_tag.current;
        const liEls = refs.current;
        const progressbar = progress.current;
        const title_tag = title.current;
        title_tag.classList.remove("on");
        for(let i = 0; i < liEls.length; i++){
            liEls[i].classList.remove("active");
            progressbar[i].classList.remove("on");
        }
        toggle(false)
        liEls[active_Num].classList.add("active");
        tag.classList.remove("on");
        setTimeout( () => {
            tag.classList.add("on");
            tag.innerText = description[active_Num];
            progressbar[active_Num].classList.add("on");
            title_tag.classList.add("on");
            title_tag.innerText = title_arr[active_Num];
            toggle(true);
        }, 300)
    }


    return (
        <section className="skill">
            <div className="skill__container">
                <div className="skill__etc">
                    <div className={ (!contentOn) ? "etc on" : "etc"}>
                        <h1>Etc</h1>
                        <ul className="license">
                            <li>
                                <img src="./img/skill_logo/document.svg" alt="없엉"/>
                                <span>빅데이터 전문가</span>
                            </li>
                            <li>
                                <img src="./img/skill_logo/document.svg" alt="없엉"/>
                                <span>운전면허 1종보통</span>
                                
                            </li>
                            <li>
                                <img src="./img/skill_logo/document.svg" alt="없엉"/>
                                <span>TestDaf B2</span>
                            </li>
                            <li>
                                <img src="./img/skill_logo/document.svg" alt="없엉"/>
                                <span>웹디 기능사 필기 합격</span>
                            </li>
                        </ul> 
                    </div>
                    <div className={ (!contentOn) ? "career on" : "career"}>
                        <h1>career</h1>
                        <ul>
                            <li>
                                <img src="./img/skill_logo/work.svg" alt="없엉"/>
                                <span>2012.04-2014.09  ㈜ 태흥테크 </span>
                            </li>
                            <li>    
                                <img src="./img/skill_logo/school.svg" alt="없엉"/>
                                <span>2011.03-2015.12 경성대학교 재학</span>
                            </li>
                            <li>
                                <img src="./img/skill_logo/school.svg" alt="없엉"/>
                                <span>2019.10~2021.03 Hochschule Bochum 재학</span>
                            </li>
                        </ul>
                    </div>
                    <div className={(!contentOn) ? "tools on" : "tools"}>
                        <h1>Tools</h1>
                        <div className="tool_box">
                            <span className="tool"><img src="./img/skill_logo/git.svg" alt="없엉"/>Git</span>
                            <span className="tool"> <img src="./img/skill_logo/code.svg" alt="없엉"/> VS Code</span>
                        </div>
                    </div>
                </div>
                <div className={(!contentOn) ? "skill__frontend on" : "skill__frontend"}>
                    <ul className="skill__icon">
                        {
                            skill_svg.map( (item, i) => {
                                return ( 
                                <li 
                                    key={i} 
                                    data-num={i}
                                    ref={ (element) => {refs.current[i] = element}} 
                                    className={ i == 0 ? "active" : "" }
                                    onClick={LiClick}
                                    > 
                                    <img data-num={i} src={item} alt="noImage" /> 
                                </li> 
                                );
                            })
                        }
                    </ul>
                    <div className="skill__description">
                        <h1 ref={title} className="description__title on">HTML</h1>
                        <div className="des_right">
                            <p ref={desc_tag} className="description on">Mark up, Hyper Link</p>
                            <ul className="progress">
                            {
                                propsArr.map( (item, i) => {
                                    return(
                                        <li ref={ (tag) => {progress.current[i] = tag} } className={ i == 0 ? "progress__detail on" : "progress__detail"}>
                                            <div key={i} className={ styles.container} >
                                                <div ref={ref} className={styles.main} >
                                                    <animated.div className={styles.fill} style={ item } />
                                                </div>
                                            </div>
                                            <span>{score[i] + "%"}</span>
                                        </li>
                                    );
                                })
                            }
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default Skill;

