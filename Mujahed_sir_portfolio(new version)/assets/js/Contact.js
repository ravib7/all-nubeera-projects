function submitForm(event) {
    event.preventDefault();  // Prevent the default form submission
    
    var name = document.getElementById('name').value;
    var message = document.getElementById('message').value;

       // Check if fields are empty
    if (name.trim() === '' || message.trim() === '') {
        alert('Please fill out all fields.');
        return; // Exit the function if fields are empty
    }
  
    // Replace 'YOUR_GOOGLE_FORM_URL' with your actual Google Form URL
    var googleFormUrl = 'https://script.google.com/macros/s/AKfycbzwgU8xQzHlsuwmWKlO6e90aXABwuyMbVc9YMQd994I4i7Wnoykuq_ZZNQdU4zBmGPDAA/exec';
  
    var formData = new FormData();
    formData.append('entry.617381392', name);
    formData.append('entry.1039351751', message);
  
    fetch(googleFormUrl, {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (response.ok) {
            console.log('Form submitted successfully:', response);
  
            // Clear the form values after successful submission
            document.getElementById('name').value = '';
            document.getElementById('message').value = '';
  
            // Display success message on the page
            alert('Form submitted successfully! Thank you.');
        }
        else {
            console.error('Error submitting form. Server responded with:', response.status);
            alert('Error submitting form. Please try again later.');
        }
    })
    .catch(error => {
        console.error('Error submitting form:', error);
        alert('Error submitting form. Please try again later.');
    });
  }
  