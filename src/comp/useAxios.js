import { useReducer, useEffect, useState } from 'react';
import axios from "axios";


const getPortfolio = async () => {
    const responsive = await axios.get("/data/work.json",{
        method: 'GET',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
        }
    })
    return responsive;
}

const getTestimonial = async () => {
    const responsive = await axios.get("/data/testimonial.json",{
        method: 'GET',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
        }
    })
    return responsive;
}

const useAxios = ( sort ) => {
    let [portData, setPortData] = useState();

    useEffect( () => {
        if(sort == "portfolio"){
            getPortfolio().then( res => { setPortData(res.data) });
        }else if(sort == "testimonial"){
            getTestimonial().then( res => { setPortData(res.data) });
        }
        
    }, []);  
    

    return portData;
}

export default useAxios;