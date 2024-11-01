import React, { createContext, useState, useEffect, useCallback } from 'react'; 
import axios from 'axios';

export const ProductContext = createContext();

export const ProductProvider = ({ children }) => {
  const [products, setProducts] = useState([]);
  const [filteredProducts, setFilteredProducts] = useState([]);
  const [activeFilters, setActiveFilters] = useState({});
  const [category, setCategory] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState('');

  useEffect(() => {
    const fetchProducts = async () => {
      try {
        const response = await axios.get('/api/productos/productos');
        setProducts(response.data);
        setLoading(false);
      } catch (error) {
        setError('No se han encontrado productos. Por favor, intente más tarde.');
      } 
    };
    fetchProducts();
  }, []);

  useEffect(() => {
    let filtered = products;

    if (category) {
      filtered = filtered.filter(product => product.categoria_id === parseInt(category, 10));
    }

    Object.entries(activeFilters).forEach(([key, values]) => {
      if (values.length > 0) {
        if (key === 'precio') {
          filtered = filtered.filter(product => values.some(range => {
            let [min, max] = range.split(' - ');
            min = parseFloat(min.split('S/ ')[1]);
            max = parseFloat(max.split('S/ ')[1]);
            console.log(product.precio, min, max)
            return product.precio >= min && (!max || product.precio <= max);
          }));
        } else {
          filtered = filtered.filter(product => values.includes(product[key]));
        }
      }
    });

    setFilteredProducts(filtered);
  }, [products, activeFilters, category]);

  const handleFilterChange = useCallback((filters) => {
    setActiveFilters(filters);
  }, []);

  const updateCategory = useCallback((newCategory) => {
    setCategory(newCategory);
  }, []);

  return (
    <ProductContext.Provider value={{
      products, 
      filteredProducts, 
      activeFilters, 
      handleFilterChange, 
      updateCategory,
      loading, 
      error
    }}>
      {children}
    </ProductContext.Provider>
  );
};
