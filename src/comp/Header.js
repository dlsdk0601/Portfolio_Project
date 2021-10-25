import { useEffect , useState} from 'react';
import "../css/Header.scss";


const Header = ({ contentOn, modalData, tabRef }) => {
    const menu = ["</ project >","</ About >", "</ skills >", "</ Testimonials>", "</ contact >"];
    const [currentTab, setCurrentTab] = useState();

    const scrollTab = (index) => {
        tabRef.current[index].scrollIntoView( {behavior: "smooth"} );
        setCurrentTab(tabRef.current[index]);
    }
    
    return (
        <nav>
            <div className="navbar__logo">
                <figure>
                    <a href="#">
                        {
                            modalData ? <img src="./img/logo.png" alt="logo" />
                            : ( (contentOn) ? <img src="./img/logo.png" alt="logo" /> : <img src="./img/logo_white.png" alt="logo"/> )
                        }
                    </a>
                </figure>
            </div>
        
            <div className="navbar__menu">
                <ul>
                    {
                        modalData ? <></>
                        : ( (contentOn) ? menu.map( (item, i) => <li key={i} onClick={ () => { scrollTab(i) }} className="black">{item}</li> ) : menu.map( (item, i) => <li key={i} onClick={ () => { scrollTab(i) }} className="white">{item}</li> ) )
                    }
                </ul>
            </div>
        </nav>
    );
}

export default Header;
