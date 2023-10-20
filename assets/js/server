const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();
const port = 3000; // You can use any port you prefer

// Configure the middleware to parse form data
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Configure your email service details
const transporter = nodemailer.createTransport({
  service: 'Gmail', // E.g., 'Gmail' or 'SendGrid'
  auth: {
    user: 'shaina.rebello18@gmail.com',
    pass: '8123324331',
  },
});

// Handle form submissions
app.post('/submit', (req, res) => {
  const { name, email, phone, message } = req.body;

  const mailOptions = {
    from: email,
    to: 'shaina.rebello18@gmail.com', // Your email address to receive submissions
    subject: 'New Contact Form Submission',
    text: `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nMessage: ${message}`,
  };

  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      console.log(error);
      res.status(500).send('Error: Could not send the email.');
    } else {
      console.log('Email sent: ' + info.response);
      res.status(200).send('Email sent successfully.');
    }
  });
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
