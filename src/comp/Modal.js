import React, { useState, useEffect, useRef } from "react";
import "../css/Modal.scss";
import useAxios from './useAxios';

const Modal = ( {index} ) => {
    const data = useAxios("portfolio");
    return(
        <>
            {
                data && data.map( (item, i) => {
                    if(i == index){
                        return(
                            <div className="modal">
                                <figure className="thum">
                                    <img src={`../admin/files/thumnail${index}.png`} alt="no" />
                                </figure>
                                <div className="info">
                                    <h1 className="title">{item.name}</h1>
                                    <div className="info__text">
                                        <div className="info__left">
                                            <div className="infoBox part">
                                                <h2>참여도</h2>
                                                <p className="part__ans infoBox__ans">{item.part}</p>
                                            </div>
                                            <div className="infoBox info__skill">
                                                <h2>SKILL</h2>
                                                <p className="skill__ans infoBox__ans">{item.skill}</p>
                                            </div>
                                        </div>
                                        <div className="info__center">
                                            <div className="infoBox howlong">
                                                <h2>제작 기간</h2>
                                                <p className="howlong__ans infoBox__ans">{item.howlong}</p>
                                            </div>
                                            <div className="infoBox func">
                                                <h2>기능</h2>
                                                <p className="func__ans infoBox__ans"> {item.func}</p>
                                            </div>
                                        </div>
                                        <div className="info__right">
                                            <div className="infoBox sitepage">
                                                <h2>SITE URL</h2>
                                                <p className="sitepage__ans infoBox__ans">
                                                    <a href={item.sitepage} target="_blank">바로가기 <img src="./img/url.svg" alt="no" /></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="overview">
                                        <h2 className="overview__title">Overview</h2>
                                        <p className="overview__exp" dangerouslySetInnerHTML={ {__html: item.mission} }>
                                        </p>
                                    </div>
                                    <div className="focus">
                                        <h2 className="focus__title">Focus</h2>
                                        <p className="focus__exp">
                                        {item.exp}
                                        <span><a href={item.git} target="_blank">리드미 파일 보러가기<img src="./img/url.svg" alt="no" /></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div className="responsive">
                                    <h2>Responsive</h2>
                                    <div className="responsive__photo">
                                        <figure>
                                            <img className="mac" src={`../admin/files/mac${index}.png`} alt="no" />
                                            {(item.responsive == "on") ? (<img className="iphone" src={`../admin/files/iphone${index}.png`} alt="no" />) : <></>}
                                        </figure>
                                    </div>
                                </div>
                                <div className="modal__photo" style={ { backgroundColor: item.color } }>
                                    <h2>Pages</h2>
                                    <figure>
                                        <img src={`../admin/files/pages${index}.png`} alt="no"/>
                                    </figure>
                                </div>
                            </div>
                        );
                    }
                })
            }
        </>
    )
}
export default Modal;
