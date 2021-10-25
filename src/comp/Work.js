import React, { useEffect, useState, useRef } from "react";
import "../css/Work.scss";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import useAxios from './useAxios';






const Work = ( { modalfunc, modalData, indexChange, tabRef } ) => {


    const data = useAxios( "portfolio");
    const len = data && (data.length-1);
    const white_bar = useRef(null);
    const [textani, setTextani] = useState(true);
    const [thumnailOn, setThumnailOn] = useState(false);
    const [nextthumnailOn, setNextthumnailOn] = useState(false);

    const [prevphotoIndex, setPrevphotoIndex] = React.useState(0);
    const [nexphotoIndex, setNexphotoIndex] = useState(1);

    React.useEffect( () => {
        setPrevphotoIndex(len);
    }, [data]);

    function SamplePrevArrow( { className, onClick } ) {
        return (
            <button
                className={className}
                onMouseOver={() => { setThumnailOn(true) }}
                onMouseLeave={ () => { setThumnailOn(false) }}
                onClick={onClick}
            />
        );
    }
    function SampleNextArrow( { className, onClick } ) {
        return (
            <button
                className={className}
                onMouseOver={() => { setNextthumnailOn(true) }}
                onMouseLeave={ () => { setNextthumnailOn(false) }}
                onClick={onClick}
            />
        );
    }
    

    const settings = {
        dots: false,
        infinite: true,
        speed: 500,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        afterChange: (current) => {
            indexChange(current);
            setTextani(true);
            setPrevphotoIndex( () => {
                if(current == 0) return len;
                return current-1;
            });
            setNexphotoIndex( () => {
                if(current == len) return 0;
                return current+1;
            });
        },
        beforeChange: () => {
            setTextani(false);
        },
        nextArrow: <SampleNextArrow />,
        prevArrow: <SamplePrevArrow />,
    };

    const modal = () => {
        const white_line = white_bar.current;
        modalfunc();
        white_line.classList.toggle("on");
        tabRef.current[0].scrollIntoView();
    }
    

    return(
        <>
            <Slider {...settings}>
                {
                    data && data.map( (item, i) => {
                        return(
                            <div key={item.num}>
                                <h3>
                                    <figure >
                                        <img src={`../admin/files/slide${i}.png`} alt="no" /> 
                                        <figcaption>
                                            <h1 className={ textani ? "sitename on" : "sitename"}>{item.sitename}</h1>
                                            <p className={ textani ? "subs on" : "subs"}>{item.subs}</p>
                                        </figcaption>
                                    </figure>
                                </h3>
                            </div>
                        );
                    })
                }
            </Slider>
            <div onClick={modal} className={modalData ? "modal__control" : "modal__control hidden"} ><span className="top">top</span><span className="bottom">bottom</span></div>
            <div className="slide_deco">
                <div className="nextprev">
                    <span className={ modalData ? "prev_txt hidden" : "prev_txt "}>PREV</span>
                    <img className={ thumnailOn ? "prev_txt thumnail prev on" : "prev_txt thumnail prev"} src={`../admin/files/slide${prevphotoIndex}.png`} alt="no" />
                    <img className={ nextthumnailOn ? "prev_txt thumnail next on" : "prev_txt thumnail next"} src={`../admin/files/slide${nexphotoIndex}.png`} alt="no" />  
                    <span className={ modalData ? "next_txt hidden" : "next_txt "}>NEXT</span>
                </div>
                <p className="line"><span ref={white_bar}></span></p>
                <div className="btn" onClick={modal}>
                    <div className="spot"></div>
                    <p className="click">Click me to look at this Project</p>
                </div>
            </div>
        </>
    );
};

export default Work;
