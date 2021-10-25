import React from "react";
import "../css/Introduce.scss";

const Introduce = ( { contentOn } ) => {
   
    return (
        
        <section className="introduce">
            <div className="introduce__content">
                <div className={ contentOn ? "introduce__img on" : "introduce__img"}>
                    <figure>
                        <img src="./img/introduce_img.jpg" alt="없엉" />
                    </figure>
                </div>
                <div className={ contentOn ? "introduce__description on" : "introduce__description"}>
                    <div className="introduce__des_title">
                        <span>코딩과 놀다</span>
                        {/* <img src="" alt="없엉" /> */}
                    </div>
                    <p className="description">
                        안녕하세요 <br/>
                        코딩과 노는 개발자 정인아입니다.<br/>
                        유학 생활을 하며 키운 문제 해결 능력을 바탕으로 <br/>
                        스스로 발전해 나가며 진정으로 프로그래밍을 즐기는 개발자가 되겠습니다.<br/>
                        현재 리액트js의 이해도를 넓히는 중이며, 차후 Node.js 및 PHP까지 영역을 넓혀 풀스택 개발자로 우뚝 서고 싶습니다.
                    </p>
                </div>
            </div>
        </section>
    );
};

export default Introduce;


    