import "../index.css";
import "../mobile.css";
import { Row, Col, Container, Badge, Carousel } from "react-bootstrap";
import {} from "react-icons/fa";
import Image1 from "../images/Image 11.png";
import SlideProduct from "./SlideProduct";

function TopProduct() {
  return (
    <>
        <Container className="TopProduct">
            <Carousel>
                <Carousel.Item>
                    <SlideProduct 
                        titre="Arrivage 1" 
                        description="En plus de ma valise, j’ai un grand tote bag en tissu zippé
                        (celui sur la photo), qui me sert de sac de ville ou de plage
                        une fois sur place. Vu que je suis fan de sacs, je peux au
                        retour le plier facilement dans ma valise, et arborer au bras
                        une possible nouvelle aquisition"
                        prix="1200"
                        color1="#4C3E3E"
                        color2="#66ffcc"
                        color3="#ff0066"
                        image={Image1}
                        />
                </Carousel.Item>
                <Carousel.Item>
                    <SlideProduct 
                        titre="Arrivage 2" 
                        description="En plus de ma valise, j’ai un grand tote bag en tissu zippé
                        (celui sur la photo), qui me sert de sac de ville ou de plage
                        une fois sur place. Vu que je suis fan de sacs, je peux au
                        retour le plier facilement dans ma valise, et arborer au bras
                        une possible nouvelle aquisition"
                        prix="1200"
                        color1="#ffff4d"
                        color2="#0066ff"
                        color3="#00cc00"
                        image={Image1}
                        />
                </Carousel.Item>
            </Carousel>

        </Container>

       
 
    </>
  );
}

export default TopProduct;
