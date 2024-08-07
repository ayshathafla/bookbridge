// backend.js

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const PORT = 3000;

// Middleware to parse JSON bodies
app.use(bodyParser.json());

// Endpoint to handle form submissions
app.post('/submit-form', (req, res) => {
    // Assuming form data is sent in the request body
    const formData = req.body;
    
    // Process the data (e.g., save to a database)
    // Your code to save the data goes here
    
    // Send a response back to the frontend
    res.json({ message: 'Form data saved successfully!' });
});

// Start the server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
