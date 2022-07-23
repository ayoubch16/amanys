import { Navbar,Nav, Container,Badge } from 'react-bootstrap';
import { FaShoppingCart,FaHeart,FaBars } from 'react-icons/fa';
import logo from '../logo.png';
import '../index.css';

function Bar() {
  return (
<>


<Navbar>
      <Container>
        <Navbar.Brand href="#home">
          <img className='logoImg' src={logo} alt="logo" />
        </Navbar.Brand>
        <Navbar.Toggle />
        <Navbar.Collapse className="justify-content-end">
        <Nav>
            <Nav.Link href="#deets"><FaShoppingCart style={{fontSize:'20px'}} /><Badge bg="danger">.</Badge></Nav.Link>
            <Nav.Link href="#deets"><FaHeart style={{fontSize:'20px'}} /><Badge bg="danger">.</Badge></Nav.Link>
            <Nav.Link href="#deets">Connexion</Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
</Navbar>

<Container className='p-3'>
  <FaBars style={{fontSize:'30px',color:'#EBAA33'}} />
</Container>



</>
  );
}

export default Bar;