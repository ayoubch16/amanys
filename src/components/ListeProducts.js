import { Container,Col,Row } from "react-bootstrap";
import "../index.css";
import Image4 from '../images/Image 4.png';
import Product from './Product';

function ListProducts() {
  return (
    <Container className="ListProducts">
        <h1 className="text-center fancy-undeline">Nos Produits</h1>
        <Row style={{justifyContent:'center'}}>
          <Product image={Image4} name="Product 1" prix="100" color1="#000" color2="#00ff00" color3="#0000ff" new='new'/>
          <Product image={Image4} name="Product 2" prix="200" color1="#000" color2="#00ff00" color3="#0000ff" new=''/>
          <Product image={Image4} name="Product 3" prix="300" color1="#000" color2="#00ff00" color3="#0000ff" new='new'/>
          <Product image={Image4} name="Product 4" prix="400" color1="#000" color2="#00ff00" color3="#0000ff" new=''/>
          <Product image={Image4} name="Product 5" prix="500" color1="#000" color2="#00ff00" color3="#0000ff" new='new'/>  
        </Row>
        {/* <div>
          <a>
            Voir plus 
            <br></br>
            <img src="https://cdn-icons-png.flaticon.com/512/32/32195.png" width={20}  />
          </a>
        </div> */}
    </Container>
  );
}

export default ListProducts;


