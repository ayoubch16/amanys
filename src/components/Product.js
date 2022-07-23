import { Container,Col,Row } from "react-bootstrap";
import "../index.css";
import { FaRegHeart,FaHeart } from 'react-icons/fa';
// import Image4 from '../images/Image 4.png';
let testNew,txtspan;


function Product(props) {
  testNew=props.new;
  if(testNew=='new'){
    document.getElementsByClassName('divnew').displa='block';
  }else{
    txtspan='';
  }
  return (
          <Col xs={6} sm={4} md={4}>
            <div className="product">
              <div className="product-img">
                <img className="img-fluid" src={props.image} />
              </div>
              <div className="product-info">
                <h1 className="titreProduct">{props.name}</h1>
                <Row>
                    <Col md={4}>
                        <h1 className="prix">{props.prix} dh</h1>
                    </Col>
                    <Col md={4}>
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
                    <Col md={4} className="text-end">
                        <FaRegHeart style={{fontSize:'30px',color:'#ff0000'}} />
                    </Col>
                </Row>
              </div>
              {txtspan}
              <span className="divnew" ></span>
              <span className="divprix" >-10%</span>
            </div>
          </Col>
  );
}
export default Product;
