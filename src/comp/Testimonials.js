import React, {useState, useEffect, useRef} from "react";
import "../css/Testimonials.scss";
import Slider from "react-slick";
import useAxios from './useAxios';


const Testimonials = () => {

    const data_testimonial = useAxios("testimonial");

    const settings = {
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        speed: 4000,
        pauseOnHover: true,
        autoplaySpeed: 3000,
        cssEase: "linear",
        // focusOnSelect: true,
    };

    return(
        <section className="testimonials">
            <Slider {...settings}>
                    {
                        data_testimonial && data_testimonial.map( (item, i) => {
                            return(
                                <div>
                                    <h3>
                                        <div className="testimonials__box">
                                            <figure><img className="test__photo" src={`../admin/files/${item.photo}`} alte="no" /></figure>
                                            <div className="testimonials__text">
                                                <p>{item.tes_name} <span>/ {item.tex_real}</span></p>
                                                <h3>{item.tes_oneline}</h3>
                                                <p className="testimonials__exp">{item.tes_text}</p>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                            )
                        })
                    }
            </Slider>
        </section>
    );
}

export default Testimonials;