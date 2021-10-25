import './css/App.css';
import React, {useState, useEffect, useRef} from "react";
import Header from './comp/Header';
import Home from './comp/Home';
import Introduce from './comp/Introduce';
import Skill from "./comp/Skill";
import "./css/App.scss";
import Work from './comp/Work';
import Modal from './comp/Modal';
import Testimonials from './comp/Testimonials';
import Contact from'./comp/Contact';




//Scroll Hook
const useScroll = (hei) => {
  const [isNavon , setIsNavon] = useState(false);
  const [menuColor, setMenuColor] = useState(false);
  const [scrollY, setscrollY] = useState(0);
  const handleScroll = () => {
    if(window.scrollY < hei*0.5){
      setIsNavon(false);
    }else if(window.scrollY >= hei*0.5 && window.scrollY < hei*1.5){
        setIsNavon(true);

    }else if( window.scrollY >= hei*1.5  && window.scrollY < hei*2.5){
        setIsNavon(false);

    }else if( window.scrollY >= hei*2.5 && window.scrollY < hei*3.5){
      setIsNavon(true);
    }else if( window.scrollY >= hei*3.5){
      setIsNavon(false);
    }

    if(window.scrollY < hei*1){
      setMenuColor(false);
    }else if(window.scrollY >= hei*1 && window.scrollY < hei*2){
        setMenuColor(true);

    }else if( window.scrollY >= hei*2  && window.scrollY < hei*3){
        setMenuColor(false);

    }else if( window.scrollY >= hei*3 && window.scrollY < hei*4){
      setMenuColor(true);
    }else if( window.scrollY >= hei*4){
      setMenuColor(false);
    }

    return;
  }
  const onScroll = () => {
    setscrollY(window.scrollY);
  };

  useEffect( () => {
    window.addEventListener("scroll", handleScroll);
    return () => {
        window.removeEventListener("scroll", handleScroll);
    }
  }, [isNavon]);
  useEffect( () => {
    window.addEventListener("scroll", onScroll);
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  return { isNavon, scrollY, menuColor };
}

//Return width, height from Window
function getWindowDimensions() {
  const { innerWidth: width, innerHeight: height } = window;
  return {
      width,
      height
  };
}
//Dimension Hook
function useWindowDimensions() {
  const [windowDimensions, setWindowDimensions] = useState(getWindowDimensions());
  useEffect(() => {
      function handleResize() {
      setWindowDimensions(getWindowDimensions());
  }
      window.addEventListener('resize', handleResize);
      return () => window.removeEventListener('resize', handleResize);
  }, []);
  return windowDimensions;
}

function App() {
  
  const dimension = useWindowDimensions();
  const windowHeight = dimension.height;
  const {isNavon, scrollY, menuColor} = useScroll(windowHeight);
  const [modal, setModal] = useState(false);
  const tabRef = useRef([]);
  const [index, setIndex] = useState(0);
  
  //modal toggle
  const toggleModal = () => {
    if(modal == true){
      setModal( modal => !modal );
      return;
    } 
    setTimeout( () => {
      setModal( modal => !modal );
    }, 1500);
  }
  
  const indexChange = (num) => {
    setIndex(num);
  }

  return (
    <>
      <Header 
      tabRef={tabRef}
      contentOn={menuColor}
      modalfunc={toggleModal}
      modalData={modal}
      />
      <main>

        <Home /> 
        <div className={ modal ? "modal__open on" : "modal__open"}>
          <Modal index={index}  />
        </div>
        <div ref={el => tabRef.current[0] = el}>
          <Work
            indexChange={indexChange}
            modalfunc={toggleModal}
            modalData={modal}
            tabRef={tabRef}
          />
        </div>
        <div ref={el => tabRef.current[1] = el}>
          <Introduce 
            contentOn={isNavon}
          /> 
        </div>
        <div ref={el => tabRef.current[2] = el}>
          <Skill 
            contentOn={isNavon}
          />
        </div>
        <div ref={el => tabRef.current[3] = el}>
          <Testimonials 
            contentOn={isNavon}
          />
        </div>
        <div ref={el => tabRef.current[4] = el}>
          <Contact 
            contentOn={isNavon}
          />
        </div>
        
      </main>
    </>
  );
}

export default App;


