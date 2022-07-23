import { Container } from "react-bootstrap";
import "../index.css";
import ImageCat1 from "../images/ImageCat1.png";
import ImgEtudiant from "../images/etudiant.png";
import ImgVoyage from "../images/Voyage.png";
import ImgBusiness from "../images/Business.png";
import ImgFemmes from "../images/Femmes.png";

function Categorie() {
  return (
    <Container>
      <div className="Categorie parent">
        <a href="#cat1" class="div1" title="cat1">
          <img className="grandImg" src={ImageCat1} />
          <div className="catInfo">
            <h1>Tout la collection</h1>
            <p>3232 Produits</p>
          </div>
        </a>
  
        <a href="#cat2" class="div2" title="cat2">
          <img className="smallImg" src={ImgEtudiant} />
          <div className="catInfo">
            <h1>Etudiant</h1>
            <p>232 Produits</p>
          </div>
        </a>
        <a href="#cat3" class="div3" title="cat3">
          <img className="smallImg" src={ImgFemmes} />
          <div className="catInfo">
            <h1>Femmes</h1>
            <p>323 Produits</p>
          </div>
        </a>
        <a href="#cat4" class="div4" title="cat4">
          <img className="smallImg" src={ImgBusiness} />
          <div className="catInfo">
            <h1>Business</h1>
            <p>232 Produits</p>
          </div>
        </a>
        <a href="#cat5" class="div5" title="cat5">
          <img className="smallImg" src={ImgVoyage} />
          <div className="catInfo">
            <h1>Voyage</h1>
            <p>323 Produits</p>
          </div>{" "}
        </a>
      </div>
    </Container>
  );
}

export default Categorie;
