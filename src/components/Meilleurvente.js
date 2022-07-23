//
import { Container } from "react-bootstrap";
import "../index.css";

import React, { useRef, useState } from "react";
// Import Swiper React components
import { Swiper, SwiperSlide } from "swiper/react";

// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

// import "./styles.css";

// import required modules
import { Pagination, Navigation } from "swiper";

import Product from './Product';
import Image4 from '../images/Image 4.png';


function Meilleurvente() {
  return (
    <Container className="Meilleurvente">
        <h1 className="text-center fancy-undeline">Meilleur vente</h1>

 <>
      <Swiper
        slidesPerView={4}
        spaceBetween={30}
        slidesPerGroup={2}
        loop={true}
        loopFillGroupWithBlank={true}
        pagination={{
          clickable: true,
        }}
        navigation={true}
        modules={[Pagination, Navigation]}
        className="mySwiper"
      >
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
        <SwiperSlide><img className="img-fluid" src={Image4} /></SwiperSlide>
      </Swiper>
    </>
    </Container>
  );
}

export default Meilleurvente;
