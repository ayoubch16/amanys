import '../index.css';
import { Row,Col, Container,Badge,Carousel } from 'react-bootstrap';
import {  } from 'react-icons/fa';
import Image1 from '../images/Image 11.png';



function SlideProduct(props) {
  return (
    <>
                  <Row>
              <Col md={6} sm={12} className="divInfo">
                <h1>Nouvelle</h1>
                <h2>{props.titre}</h2>
                <h6>
                  {props.description}
                </h6>
                <Row>
                  <Col md={4}>
                    <p style={{ margin: "0" }}>Prix :</p>
                    <h6>{props.prix} dh</h6>
                  </Col>
                  <Col md={4}>
                    <p style={{ margin: "0" }}>Coleur :</p>
                    <span
                      class="dot"
                      style={{ backgroundColor: props.color1 }}
                    ></span>
                    <span
                      class="dot"
                      style={{ backgroundColor: props.color2 }}
                    ></span>
                    <span
                      class="dot"
                      style={{ backgroundColor: props.color3 }}
                    ></span>
                  </Col>
                </Row>
              </Col>
              <Col md={6} sm={12} className="divImg">
                <img className="" src={props.image} alt={props.titre} />
              </Col>
            </Row>
    </>
  );
}

export default SlideProduct;
