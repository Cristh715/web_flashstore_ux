import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import Header from '../components/Header/Header';
import Footer from '../components/Footer/Footer';
import ProductDescription from '../components/ProductDescription/ProductDescription';
import LoaderPage from '../components/LoaderPage/LoaderPage';

const ProductPage = () => {
  const { productId } = useParams();
  const [product, setProduct] = useState(null);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch(`http://localhost:8000/producto/${productId}`)
      .then(response => response.json())
      .then(data => setProduct(data))
      .catch(error => {
        console.error('Error fetching product:', error);
        setError(error);
      });
  }, [productId]);

  if (error) {
    return <div>Error: {error.message}</div>;
  }

  if (!product) {
    return <LoaderPage/>;
  }

  return <Catalogo product={product[0]} />;
};

const Catalogo = ({ product }) => {
  return (
    <div className='body'>
      <Header />
      <main className='main'>
        <ProductDescription product={product} />
      </main>
      <Footer />
    </div>
  );
}

export default ProductPage;
