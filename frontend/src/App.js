import { Container,Row,Col } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import NavBar from './components/NavBar';
import TableDate from './components/TableDate';
import FormDate from './components/FormDate';

function App() {
  return (
    <div className="App">
       <Container fluid>
            <Row>
                  <Col>
                    <NavBar/>
                  </Col>
              </Row>
                <Row>
                    <Col sm={8}>
                      <TableDate/>
                    </Col>
                  <Col sm={4}>
                      <FormDate/>
                    </Col>
                </Row>
        </Container>
    </div>
  );
}

export default App;
